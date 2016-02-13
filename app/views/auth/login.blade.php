@extends('layouts.auth')

@section('title', $title)

@section('auth_content')
<div class='form-controls'>
    <div class='caret'></div>
    <div class='form-wrapper'>
        <h1 class='text-center'>Sign in</h1>
        {{ Form::open(array('url' => URL::route('auth_login'), 'class' => 'validate-form', 'method' => 'post'))  }}
        {{ Form::token() }}
        <div style="margin:0;padding:0;display:inline"></div>
            <div class='row-fluid'>
                <div class='control-group'>
                    <div class='controls'>
                        <div class='span12 icon-over-input'>
                            {{ Form::text('email', isset($email) ? $email : '', array('id'=>'email', 'class' => 'span12', 'data-rule-required' => 'true', 'data-rule-email' => 'true', 'placeholder' => 'Email address')) }}
                             <script type="text/javascript">
                                document.getElementById('email').focus()
                                </script>
                            <i class='icon-user muted'></i>
                        </div><!--/.span12 icon-over-input-->
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </div><!--/.row-fluid-->
            <div class='row-fluid'>
                <div class='control-group'>
                    <div class='controls'>        
                        <div class='span12 icon-over-input'>
                            {{ Form::password('password' , array('id'=>'password', 'class' => 'span12', 'data-rule-required' => 'true', 'placeholder' => 'Password', 'AUTOCOMPLETE' => 'OFF')) }}
                            <i class='icon-lock muted'></i>
                        </div>
                    </div><!--/.controls-->
                </div><!--/.congrol-group-->
            </div><!--/.row-fluid-->
            <label class="checkbox" for="remember_me">
            <input type="checkbox" name='remember' id="remember" {{ Input::old('remember') ? 'checked="checked"':'' }} value="remember-me" />
                Remember me
            </label>
            {{ Form::submit('Sign in', array('class'=>'btn btn-block')) }}

        {{ Form::close() }}

        @if ( ! Session::has('connection') && ! Session::has('tmp_register'))
        <div class='row-fluid social-login'>
            <a href="{{ URL::route('auth_connect','facebook') }}" class="btn btn-default span6" name="facebook-signin" type="submit">Login with Facebook <i class="icon-facebook"> </i></a>

            <a href="{{ URL::route('auth_connect', 'twitter') }}" class="btn btn-default span6" name="facebook-signin" type="submit">Login with Twitter <i class="icon-twitter"> </i></a>
        </div><!--/.row-fluid-->
        @endif

        <div class='text-center'>
            <hr class='hr-normal'>
            <a href="{{ URL::route('auth_forgot') }}">Forgot your password?</a>
        </div><!--/.text-center-->
    </div><!--/.form-wrapper-->
</div>
<div class='login-action text-center'>
    <a href="{{ URL::route('auth_register') }}"><i class='icon-user'></i>
        New to {{ Config::get('app.name') }}?
        <strong>Sign up</strong>
    </a>
</div>
@stop

@section('inline_scripts')
  @parent
  // Toastr
  @if(Session::has('activation'))
  {{ Toastr::info('Account not activated', HTML::link(URL::route('auth_activate_resend', Session::get('activation')), 'Resend activation e-mail?'),  array('timeout' => '10000')) }}
  @endif
@stop