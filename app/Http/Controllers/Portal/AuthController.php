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
        if(Auth::guard('web')->attempt($request->only('username', 'password'))){

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
        $user=User::where('username', $request->username)->first();

        if($user){
            toastr()->error('Bu adda istifadəçi artıq qeydiyyatdan keçmişdir', 'Ooops!');
            return redirect()->back();
        }

        // register code
        $user=new User();
        $user->username=$request->username;
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

    public function check(Request $request){
        if($request->post('username')){
            $username = $request->get('username');
            $check_data = User::where('username', $username)->first();
            if($check_data){
                echo 'not_unique';
            } else {
                echo 'unique';
            }
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
