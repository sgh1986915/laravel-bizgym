@extends('layouts.auth')

@section('title', $title)
@section('content')



                <a href="sign_in.html"><img src='/assets/images/bizgym-logo-175.png' alt='BizGym'>
            </a>

            </div>
        </div>
        <div class='controls'>
            <div class='caret'></div>
            <div class='form-wrapper'>
                <h1 class='text-center'>Sign in</h1>
                <form accept-charset="UTF-8" action="index.html" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                    <div class='row-fluid'>
                        <div class='span12 icon-over-input'>
                            <input class="span12" id="email" name="email" placeholder="E-mail" type="text" value="" />
                            <i class='icon-user muted'></i>
                        </div>
                    </div>
                    <div class='row-fluid'>
                        <div class='span12 icon-over-input'>
                            <input class="span12" id="password" name="password" placeholder="Password" type="password" value="" />
                            <i class='icon-lock muted'></i>
                        </div>
                    </div><!--/.row-fluid-->
                    <label class="checkbox" for="remember_me"><input id="remember_me" name="remember_me" type="checkbox" value="1" />
                        Remember me
                    </label>
                    <button class="btn btn-block" name="button" type="submit">Sign in</button>
                </form>
                <div class='text-center'>
                    
                    <div class='row-fluid social-login'>
                        <button class="btn btn-default span6" name="facebook-signin" type="submit">Login with Facebook <i class="icon-facebook"> </i></button>

                        <button class="btn btn-default span6" name="facebook-signin" type="submit">Login with Twitter <i class="icon-twitter"> </i></button>
                    </div><!--/.row-fluid-->
                </div><!--/.text-center-->
                <div class='text-center'>
                    <hr class='hr-normal'>
                    <a href="forgot_password.html">Forgot your password?</a>
                </div><!--/.text-center-->
            </div><!--/.form-wrapper-->
        </div>
        <div class='login-action text-center'>
            <a href="sign_up.html"><i class='icon-user'></i>
                New to BizGym?
                <strong>Sign up</strong>
            </a>
        </div>



@stop