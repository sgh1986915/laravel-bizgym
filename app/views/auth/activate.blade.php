@extends('layouts.auth')

@section('title', $title)

@section('auth_content')
<div class='controls'>
    <div class='caret'></div>
    <div class='form-wrapper'>
    	@if(Session::has('message'))
        <h1 class='text-center'>Registration success!</h1>
        @else
        <h1 class='text-center'>Activation Required</h1>
        @endif
		<p class="text-center alert">You have been sent an email with the verification link to activate your account.  Please check your email now for the link.</p>

        <div class='text-center'>
            <hr class='hr-normal'>
            <a href="{{ URL::route('auth_login') }}"><i class='icon-chevron-left'></i>
                Ready to sign in?
            </a>
        </div><!--/.text-center-->
    </div><!--/.form-wrapper-->
</div>

@if(Session::has('activation'))
<div class='login-action text-center'>
    <a href="{{ URL::route('auth_activate_resend', Session::get('activation')) }}"><i class='icon-envelope'></i>
        Still waiting for the email?
        <strong>Resend Activation Mail</strong>
    </a>
</div>
@endif
	
@stop

@section('inline_scripts')
@parent
@if(Session::has('sent_activation'))
{{ Toastr::success('Activation code sent to '.Session::get('sent_activation'), HTML::link(URL::route('auth_activate_resend', Session::get('sent_activation')), 'Resend activation e-mail?'),  array('timeout' => '10000')) }}
@endif
@stop