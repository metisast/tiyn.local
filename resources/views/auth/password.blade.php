<!-- resources/views/auth/password.blade.php -->
@extends('auth._start')

@section('auth-form')
    {!! csrf_field() !!}
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>{{ trans('interface.authPasswordReset') }}</b></a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ trans('interface.authPasswordResetDesc') }}</p>
            <form action="/{{ LaravelLocalization::getCurrentLocale() }}/password/email" method="post">
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
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-flat">{{ trans('interface.authPasswordResetButton') }}</button>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop