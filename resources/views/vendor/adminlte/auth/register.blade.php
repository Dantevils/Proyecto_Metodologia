@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>Evil</b> Corp</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
            <p class="login-box-msg">{{"Registro de usuario"}}</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="{{ "Nombre Compelto" }}" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <!--Rut-->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="{{ "Rut" }}" name="rut" value = "{{old('rut')}}"/>
                    <span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
                </div>
                <!--Tipo de usuario-->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="{{ "Tipo de usuario" }}" name="tipo" value = "{{old('tipo')}}"/>
                    <span class="glyphicon glyphicon-cog form-control-feedback"></span>
                </div>
                <!--Email-->
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="{{ "email" }}" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <!--Contraseña-->
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ "Contraseña" }}" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ "Repetir contraseña" }}" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-1">
                        <label>
                            <div class="checkbox_register icheck">
                                <label>
                                    <input type="checkbox" name="terms">
                                </label>
                            </div>
                        </label>
                    </div><!-- /.col -->
                    <div class="col-xs-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">{{ "Aceptar terminos"}}</button>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4 col-xs-push-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{" Iniciar" }}</button>
                    </div><!-- /.col -->
                </div>
            </form>

           {{-- @include('adminlte::auth.partials.social_login')--}}

        <a href="{{ url('/login') }}" class="text-center">{{ trans('Logear') }}</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
