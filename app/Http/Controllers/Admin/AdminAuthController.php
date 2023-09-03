<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin;

class AdminAuthController extends Controller
{
    // login section
    public function index(){
        return view('admin.index');
    }
    public function postIndex(AuthLoginRequest $request) {
        // login code
        if(Auth::guard('admin')->attempt($request->only('username', 'password'))){

            $user=Admin::find(Auth::guard('admin')->user()->id);
            $user->status=1;
            $user->save();

            toastr()->success('Başarılı giriş etdiniz', 'Təbriklər!');
            return redirect()->route('admin.dashboard');
        }

        toastr()->error('Giriş zamanı xəta yarandı. Yenidən cəhd edin', 'Ooops!');
        return redirect('admin');
    }

    // logout section
    public function logout() {
        $user=Admin::find(Auth::guard('admin')->user()->id);
        $user->status=0;
        $user->save();

        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
