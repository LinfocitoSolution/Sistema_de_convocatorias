<!DOCTYPE html>
<html>
<head>
    <!--href="{{ asset('assets/css/util.css') }}"-->
    <link href="{{ asset('misStyles/assets/css/font-awesome-4.6.1/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('misStyles/assets/css/util.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('misStyles/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('misStyles/assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('nisStyles/assets/images/logotec.jpg" alt="IMG">
                    <p>Cochabamba-Bolivia</p>
                </div>
//<!-- {{ route('auth.register_store') }} -->
                <form class="login100-form validate-form" action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <span class="login100-form-title">
                            REGISTRARSE
                        </span>

                        <div class="wrap-input100 validate-input {{ $errors->has('name')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('name')? $errors->first('name') : 'Nombre completo es requerido' }}">
                            <input class="input100" type="text" name="name" placeholder="Nombre completo"  value="nombre usuario">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input {{ $errors->has('email')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('email')? $errors->first('email') : 'E-mail valido es requerido: example@abc.xyz' }}">
                            <input class="input100" type="text" name="email" placeholder="Email" value="email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input {{ $errors->has('password')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('password')? $errors->first('password') : 'Password es requerido' }}">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input {{ $errors->has('password_confirm')? 'alert-validate' : '' }}" data-validate="{{ $errors->has('password_confirm')? $errors->first('password_confirm') : 'Password es requerido' }}">
                            <input class="input100" type="password" name="password_confirm" placeholder="Repite la contrasenia">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt2" href="">
                                I already have a membership
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
<!-- jQuery 2.1.4 -->
<script src="{{ asset('nisStyles/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('nisStyles/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset('nisStyles/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
</div>
        </div>
    </div>
    <script src="{{ asset('nisStyles/js/app.js')}}"></script>
    <script src="{{ asset('nisStyles/assets/js/main.js')}}"></script>
</body>

</html>ssss