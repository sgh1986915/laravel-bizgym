@extends('layouts.auth')

@section('title', $title)

@section('auth_content')
<div class='form-controls'>
    <div class='caret'></div>
    <div class='form-wrapper'>
        <h1 class='text-center'>Forgot Password</h1>
        {{ Form::open(array('url' => URL::route('auth_forgot'), 'class' => 'validate-form', 'method' => 'post', 'id' => 'login-validate')) }}
        {{ Form::token() }}
        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
            <div class='row-fluid'>
                <div class='control-group'>
                    <div class='controls'>
                        <div class='span12 icon-over-input'>
                            {{ Form::text('email', Input::old('email'), array('id'=>'email', 'data-rule-email'=>'true', 'data-rule-required'=>'true', 'class' => 'span12', 'placeholder' => 'Email Address'))}}

                            <i class='icon-user muted'></i>
                        </div><!--/.span12 icon-over-input-->
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </div><!--/.row-fluid-->
            {{ Form::submit('Reset', array('class'=>'btn btn-block')) }}

        {{ Form::close() }}

        <div class='text-center'>
            <hr class='hr-normal'>
            <a href="{{ URL::route('auth_login') }}"><i class='icon-chevron-left'></i>
                Go back to sign in
            </a>
        </div><!--/.text-center-->
    </div><!--/.form-wrapper-->
</div><!--/.form-controls-->
<div class='login-action text-center'>
    <a href="{{ URL::route('auth_register') }}"><i class='icon-user'></i>
        New to {{ Config::get('app.name') }}?
        <strong>Sign up</strong>
    </a>
</div>
@stop

@section('inline_scripts')
@parent
@if(Session::has('sent_password_request'))
{{ Toastr::success('Password request sent to '.Session::get('sent_password_request')) }}
@endif
@stop