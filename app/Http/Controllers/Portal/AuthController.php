<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login section
    public function index(){
        return view('portal.index');
    }
    public function postIndex(AuthLoginRequest $request) {
        // login code
        if(Auth::guard('web')->attempt($request->only('email', 'password'))){

            $user=User::find(Auth::guard('web')->user()->id);
            $user->status=1;
            $user->save();

            toastr()->success('Başarılı giriş etdiniz', 'Təbriklər!');
            return redirect()->route('portal.dashboard');
        }

        toastr()->error('Giriş zamanı xəta yarandı. Yenidən cəhd edin', 'Ooops!');
        return redirect('portal');
    }

    // register section
    public function register(){
        return view('portal.register');
    }
    public function postRegister(AuthRegisterRequest $request) {
        // register code
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $data=$user->save();

        if($data){
            toastr()->success('Başarılı şəkildə qeydiyyatdan keçdiniz', 'Təbriklər!');
            return redirect()->route('portal.index');
        } else {
            toastr()->error('Qeydiyyat zamanı xəta yarandı. Yenidən cəhd edin', 'Ooops!');
            return redirect()->back();
        }

    }

    // logout section
    public function logout() {
        $user=User::find(Auth::guard('web')->user()->id);
        $user->status=0;
        $user->save();

        Auth::guard('web')->logout();
        return redirect('/portal');
    }
}
