<!-- resources/views/auth/login.blade.php -->
@extends('auth._start')

@section('auth-form')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>{{ trans('interface.authLogin') }}</b></a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ trans('interface.authSignIn') }}</p>
            <form action="/{{ LaravelLocalization::getCurrentLocale() }}/auth/login" method="post">
                {!! csrf_field() !!}
                @if(count($errors))
                        @foreach($errors->all() as $error)
                                <p class="text-red">{{ $error }}</p>
                        @endforeach
                @endif
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ trans('interface.authPassword') }}" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> {{ trans('interface.authRememberMe') }}
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('interface.authSignInBtn') }}</button>
                    </div><!-- /.col -->
                </div>
                <div class="social-auth-links text-center">
                    <p>- {{ trans('interface.authOr') }} -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                </div><!-- /.social-auth-links -->

                <a href="/{{ LaravelLocalization::getCurrentLocale() }}/password/email">{{ trans('interface.authForgotPassword') }}</a><br>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop