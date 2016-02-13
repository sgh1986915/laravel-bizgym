@extends('layouts.auth')

@section('title', $title)

@section('auth_content')
<div class='form-controls'>

    <div class='caret'></div>
    <div class='form-wrapper'>
        <h1 class='text-center'>Sign up</h1>
        {{ Form::open(array('url' => URL::route('auth_register'), 'class' => 'validate-form', 'method' => 'post'))  }}
        {{ Form::token() }}
        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
            <div class='row-fluid'>
              <div class='control-group'>
                <div class='controls'>
                  <div class='span12 icon-over-input'>
                      {{ Form::text('email', isset($email) ? $email : '', array('id'=>'email', 'class' => 'span12', 'data-rule-email'=>'true', 'data-rule-required'=>'true', 'placeholder' => 'Email address')) }}
                      <i class='icon-user muted'></i>
                  </div><!--/.icon-over-input-->
                   <script type="text/javascript">
                    document.getElementById('email').focus()
                  </script>
                </div><!--/.controls-->
              </div><!--/.control-group-->
            </div>
            <div class='row-fluid'>
              <div class='control-group'>
                <div class='controls'>
                  <div class='span12 icon-over-input'>
                      {{ Form::password('password' , array('id'=>'password', 'class' => 'span12', 'data-rule-required'=>'true', 'placeholder' => 'Password', 'AUTOCOMPLETE' => 'OFF')) }}
                      <i class='icon-lock muted'></i>
                  </div><!--/.icon-over-input-->
                </div><!--/.controls-->
              </div><!--/.control-group-->

            </div>
            <div class='row-fluid'>
              <div class='control-group'>
                <div class='controls'>
                  <div class='span12 icon-over-input'>
                       {{ Form::password('confirm_password', array('id'=>'confirm_password', 'class' => 'span12', 'data-rule-equalto'=>'#password', 'data-rule-required'=>'true', 'placeholder' => 'Password confirmation', 'AUTOCOMPLETE' => 'OFF'))  }}
                      <i class='icon-lock muted'></i> 
                  </div><!--/.icon-over-input-->
                </div><!--/.controls-->
              </div><!--/.control-group-->
            </div>
              <div class='control-group'>
                <div class='controls'>
                  <label class="checkbox" for="agreement"><input id="agreement" name="agreement" data-rule-required='true' type="checkbox" value="1" checked />
                      I accept
                      <a href="#tos-modal" data-toggle="modal" class="text-contrast">user agreements</a>
                  </label>
                </div><!--/.controls-->
              </div><!--/.control-group-->
             

             {{ Form::submit('Sign up', array('class'=>'btn btn-block')) }}
      
        {{ Form::close() }}

        @if ( ! Session::has('connection'))
        <div class='row-fluid social-login'>
            <a href="{{ URL::route('auth_connect', 'facebook') }}" class="btn btn-default span6" name="facebook-signin">
            Sign up via Facebook <i class="icon-facebook"> </i></a>

            <a href="{{ URL::route('auth_connect', 'twitter') }}" class="btn btn-default span6" name="facebook-signin" type="submit">Sign up via Twitter <i class="icon-twitter"> </i></a>
        </div><!--/.row-fluid-->
        @endif

        <div class='text-center'>
            <hr class='hr-normal'>
            <a href="{{ URL::route('auth_login') }}"><i class='icon-chevron-left'></i>
                Go back to sign in
            </a>
        </div>
    </div>
</div> <!--/.controls-->


<div id="tos-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">User agreements</h3>
  </div>
  <div class="modal-body">
  @include('layouts.partials.modal.tos')
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
@stop

@section('inline_scripts')
  @parent
  // Toastr
  @if(Session::has('activation'))
  {{ Toastr::info('Account not activated', HTML::link(URL::route('auth_activate_resend', Session::get('activation')), 'Resend activation e-mail?'),  array('timeout' => '10000')) }}
  @endif
@stop