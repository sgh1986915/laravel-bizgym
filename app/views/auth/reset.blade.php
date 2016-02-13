@extends('layouts.auth')

@section('title', 'Password Reset')

@section('auth_content')
<div class='form-controls'>
    <div class='caret'></div>
    <div class='form-wrapper'>
        <h1 class='text-center'>Password Reset</h1>
        {{ Form::open(array('url' => URL::route('auth_reset', $token), 'method' => 'post', 'class' => 'validate-form', 'id' => 'login-reset'))  }}
        {{ Form::token() }}
        {{ Form::hidden('token', $token, array('id'=>'token'))}}
        {{ Form::hidden('email', $email, array('id'=>'email'))}}

        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
            <div class='row-fluid'>
                <div class='control-group'>
                    <div class='controls'>
                        <div class='span12 icon-over-input'>
                            {{ Form::password('password' , array('id'=>'password', 'class' => 'span12', 'data-rule-required'=>'true', 'placeholder' => 'New password', 'AUTOCOMPLETE' => 'OFF')) }}
                            <i class='icon-lock muted'></i>
                        </div>
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </div>
            <div class='row-fluid'>
                <div class='control-group'>
                    <div class='controls'>
                        <div class='span12 icon-over-input'>
                             {{ Form::password('password_confirmation', array('id'=>'confirm_password', 'class' => 'span12', 'data-rule-equalto'=>'#password', 'data-rule-required'=>'true', 'placeholder' => 'New password confirmation', 'AUTOCOMPLETE' => 'OFF'))  }}
                            <i class='icon-lock muted'></i>
                        </div>
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </div>
            {{ Form::submit('Confirm', array('class'=>'btn btn-block')) }}

        {{ Form::close() }}
    </div><!--/.form-wrapper-->
</div>
@stop

@section('inline_scripts')
@parent
@if(Session::has('error'))
{{ Toastr::error(trans(Session::get('reason'))) }}
@endif
@stop