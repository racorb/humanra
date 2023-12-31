@extends('portal.layouts.auth')

@section("title", "Giriş")

@section("css")
<style>
    .eye-style{
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 15px
    }

    .fa-eye-slash {
        color: #8f8d8d
    }

    .fa-eye {
        color: #6777ef
    }

    .form-control.is-invalid, .was-validated .form-control:invalid {
        background: none
    }

    span{
        color: red
    }
</style>
@endsection

@section('content')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header mt-5" style="display:block">
                        <h4 class="text-center w-100 text-capitalize">Portala giriş</h4>
                        <p class="text-center mt-3">Portala girmək üçün məlumatlarınızı daxil edin</p>
                    </div>
                    <div class="card-body pt-0">
                        <form method="POST" action="{{route('portal.index.post')}}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="username">İstifadəçi adı <span class="text-danger">*</span> </label>
                                <input id="username" type="text" style="text-transform:lowercase" class="form-control" name="username" value="{{ old('username') }}" placeholder="İstifadəçi adınızı daxil edin" >
                                @if ($errors->has('username'))
                                    <p class="text-danger">{{ $errors->first('username') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Şifrə <span class="text-danger">*</span> </label>
                                <div class="position-relative">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="******" >
                                    <i class="fas fa-eye-slash eye-style" id="eye-icon"></i>
                                </div> 
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif                               
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Daxil Ol
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    Hələdə hesabınız yoxdur? <a href="{{route('portal.register')}}">Hesab Yarat</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("js")
<script>
    $("#username").keyup(function () {
        // underscores automatically
        this.value = this.value.replace(/ /g, "_");
    });

    // show & hide password
    let eyeicon=document.getElementById("eye-icon");
    let password=document.getElementById("password");

    eyeicon.onclick=function(){
        if(password.type == "password"){
            password.type = "text";

            this.classList.add('fa-eye');
            this.classList.remove('fa-eye-slash');
        } else {
            password.type= "password";
            
            this.classList.add('fa-eye-slash');
            this.classList.remove('fa-eye');
        }
    }
</script>
@endsection