@extends('portal.layouts.auth')

@section("title", "Qeydiyyat")

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
                    <div class="card-header mt-4" style="display:block">
                        <h4 class="text-center w-100 text-capitalize">Portala Qeydiyyat</h4>
                        <p class="text-center mt-3">İndi qeydiyyatdan keçin və 30 gün pulsuz istifadə edin</p>
                    </div>
                    <div class="card-body pt-0">
                        <form method="POST" action="{{route('portal.register.post')}}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tam Adınız <span class="text-danger">*</span> </label>
                                <input id="name" type="text" class="form-control" name="name" autofocus value="{{ old('name') }}" placeholder="Tam adınızı daxil edin" >
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">E-poçt ünvanı <span class="text-danger">*</span> </label>
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email ünvanınızı daxil edin" >
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
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
                                    Təsdiq et
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3 text-muted text-center">
                        Hesabınız var? <a href="{{route('portal.index')}}">Daxil Ol</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("js")
<script>
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