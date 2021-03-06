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
            <h1 class='text-center'>Sign up</h1>
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
                </div>
                <div class='row-fluid'>
                    <div class='span12 icon-over-input'>
                        <input class="span12" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" type="password" value="" />
                        <i class='icon-lock muted'></i>
                    </div>
                </div>
                <label class="checkbox" for="agreement"><input id="agreement" name="agreement" type="checkbox" value="1" />
                    I accept
                    <a href="#" class="text-contrast">user agreements</a>
                </label>
                <button class="btn btn-block" name="button" type="submit">Sign up</button>
            </form>

            <div class='row-fluid social-login'>
                    <button class="btn btn-default span6" name="facebook-signin" type="submit">
                    Sign up via Facebook <i class="icon-facebook"> </i></button>

                    <button class="btn btn-default span6" name="facebook-signin" type="submit">Sign up via Twitter <i class="icon-twitter"> </i></button>
                </div><!--/.row-fluid-->

            <div class='text-center'>
                <hr class='hr-normal'>
                <a href="sign_in.html"><i class='icon-chevron-left'></i>
                    Go back to sign in
                </a>
            </div>
        </div>
    </div>
    <div class='login-action text-center'>
        <a href="forgot_password.html"><i class='icon-lock'></i>
            Forgot your password?
        </a>
    </div>


@stop