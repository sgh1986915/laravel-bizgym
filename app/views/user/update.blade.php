@extends('layouts.dashboard')

@section('title', $title)
@section('content')

<div class='row-fluid user-edit' id='content-wrapper'>
<div class='span12'>
<div class="row-fluid">
    <div class='page-header' style=''>
        <div class='pull-left'>
            <h3>
                <i class='icon-dashboard'></i>
                <span>Edit Your Profile, Bob</span>
            </h3>
        </div><!--/.pull-left-->
        <div class='pull-right'>
            <a class='btn btn-default' href='/user/profile'><i class='icon-globe'> </i> View Your Public Profile</a>
        </div>
    </div> <!--/.page-header-->
</div> <!--/.row-fluid-->
<div class='row-fluid'>
    <div class='span8 box'>
        <div class='box-content box-double-padding'>
                {{ Form::open(array('url' => 'user/profile/edit', 'method' => 'post', 'id' => 'user-default', 'class' => 'form validate-form', 'novalidate' => 'novalidate')) }}
                {{ Form::token() }}
                <div class='row-fluid'>
                    <div class="lead">
                        <i class="icon-user text-contrast"></i>
                        Basic Information
                    </div><!--/.lead-->
                    <div class='control-group'>
                        <label class='control-label'>Username</label>
                        <div class='controls'>
                            <input class='span9' id='username' name='meta_username' data-rule-required='true' value='{{ $user->metas->username }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='control-group'>
                        <label class='control-label'>First Name</label>
                        <div class='controls'>
                            <input class='span9' id='first_name' name='first_name' data-rule-required='true' value='{{ $user->first_name }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='control-group'>
                        <label class='control-label'>Last Name</label>
                        <div class='controls'>
                            <input class='span9' id='last_name' name='last_name' data-rule-required='true' value='{{ $user->last_name }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='control-group'>
                        <label class='control-label'>Email Address</label>
                        <div class='controls'>
                            <input class='span9' id='email' data-rule-email='true' name='email' data-rule-required='true' value='{{ $user->email }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <hr class='normal'>
                    <div class='control-group'>
                        <div class='controls'>
                            <label class='checkbox'>
                                <input data-target='#change-password' data-toggle='collapse' data-rule-required='true' id='changepasswordcheck' type='checkbox' value='option1'>
                                Change password?
                            </label>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='collapse' id='change-password'>
                        <div class='control-group'>
                            <label class='control-label'>Password</label>
                            <div class='controls'>
                                <input class='span12' id='password' name='password' data-rule-required='true' placeholder='Password' type='password'>
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Password confirmation</label>
                            <div class='controls'>
                                <input class='span12' id='password-confirmation' name='password_confirm' data-rule-equalto='#password' data-rule-required='true' placeholder='Password confirmation' type='password'>
                            </div>
                        </div> <!--/.control-group-->
                    </div> <!--/.collapse-->
                    <hr class='normal'>
                    <div class='control-group'>
                        <label class='control-label'>Location</label>
                        <div class='controls'>
                            <input class='span9' id='location' name='meta_location' value='{{ $user->metas->location }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='control-group'>
                        <label class='control-label'>Website</label>
                        <div class='controls'>
                            <input class='span9' id='website' name='meta_website' value='{{ $user->metas->website }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='control-group'>
                        <label class='control-label'>Title</label>
                        <div class='controls'>
                            <input class='span9' id='title' name='meta_title' value='{{ $user->metas->title }}' type='text'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='control-group'>
                        <label class='control-label'>Bio</label>
                        <div class='controls'>
                            <textarea class='input-block-level' name='meta_bio' rows='4'>{{ $user->metas->bio }}</textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                </div><!--/.row-fluid-->
        </div><!--/.box-content-->
    </div><!--/.span 8 box-->
    {{ Form::close() }}

    {{ Form::open(array('class' => 'form','url' => URL::route('attachment.postuser', $user->id), 'id' => 'user-action-attachment', 'files' => true))  }}
    {{ Form::token() }}
    <div class='span4 box'>
        <div class='box-content box-padding'>
            <div class="lead">
                <i class="icon-picture text-contrast"></i>
                Profile Image
            </div><!--/.lead-->
            <div class='control-group'>
                <div class='user-photo'>
                    <img src="/media/user/profile/{{ $user->id }}" />
                </div><!--/.user-photo-->
<!--                <button class="btn btn-danger remove-photo-btn" type="button"><i class='icon-trash'> </i> Remove Image</button>-->
                    <span class="btn btn-default fileinput-button">
                        <i class="icon-picture icon-white"></i>
                        <span>Upload Photo</span>
                        <input type="file" name="profile_picture" class='uploader' data-bfi-disabled="">
                    </span>
            </div><!--/.control-group-->
        </div><!--/.box-content-->
    </div><!--/.span4 box-->
    <div class='span4 box'>
        <div class='box-content box-padding'>
            <div class="lead">
                <i class="icon-picture text-contrast"></i>
                Cover Photo
            </div><!--/.lead-->
            <div class='control-group'>
                <div class='user-photo'>
                    <img src="/media/user/cover/{{ $user->id }}" />
                </div><!--/.user-photo-->
<!--                <button class="btn btn-danger remove-photo-btn" type="button"><i class='icon-trash'> </i> Remove Image</button>-->
                    <span class="btn btn-default fileinput-button">
                        <i class="icon-picture icon-white"></i>
                        <span>Upload Photo</span>
                        <input type="file" name="cover_picture" class='uploader' data-bfi-disabled="">
                    </span>
            </div><!--/.control-group-->
        </div><!--/.box-content-->
    </div><!--/.span4 box-->
    {{ Form::close() }}
    <div class='span4 box'>
        <div class='box-content box-padding'>
            <div class="lead">
                <i class="icon-credit-card text-success"></i>
                Subscription
            </div><!--/.lead-->
            <div class='control-group'>
                <p class='help-block'>You are currently linked to one subscription, but you don't have one of your own. Get your own subscription and plan your own business! </p>
                <br>
                <div class='controls'>
                    <button class="btn btn-success" type="button"><i class='icon-shopping-cart'> </i>Subscription Options</button>
                </div><!--/.controls-->
            </div><!--/.control-group-->
        </div><!--/.box-content-->
    </div><!--/.span4 box-->
</div><!--/.row-flui-->
<div class='row-fluid'>
    <div class='span12 box'>
        <div class='box-content box-double-padding'>
            <div class='row-fluid social-section'>
                <fieldset>
                    <div class='span4'>
                        <div class="lead">
                            <i class="icon-facebook text-primary"></i>
                            Facebook Account
                        </div><!--/.lead-->
                        <div class='control-group'>
                            <p class='help-block'>Connect your Facebook account to optionally login with Facebook, share your creations, and invite your Facebook friends.</p>
                            <div class='controls shift-down'>
                                <a class='btn btn-primary input-large'>Connect Your Facebook Account</a>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                    </div><!--/.span4-->
                    <div class='span4'>
                        <div class="lead">
                            <i class="icon-twitter text-primary"></i>
                            Twitter Account
                        </div><!--/.lead-->
                        <div class='control-group'>
                            <p class='help-block'>Connect your Twitter account as another way to login. Spread the word about your business creations through Tweets.</p>
                            <div class='controls shift-down'>
                                <a class='btn btn-primary input-large'>Connect Your Facebook Account</a>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                    </div><!--/.span4-->
                    <div class='span4'>
                        <div class="lead">
                            <i class="icon-google-plus text-primary"></i>
                            Google+ Account
                        </div><!--/.lead-->
                        <div class='control-group'>
                            <!-- <p class='help-block'>Use your Google Plus account to share content out to your circles, or to invite your Google friends.</p> -->
                            <div class='controls shift-down'>
                                <!-- <a class='btn btn-primary input-large'>Connect Your Facebook Account</a> -->
                                <div class='btn-group'>
                                    <button class='btn btn-default'><i class='icon-link'> </i> Connected as JimBob</button>
                                    <button class='btn dropdown-toggle' data-toggle='dropdown'>
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li>
                                            <a href='#'>Disconnect Google +</a>
                                        </li>
                                    </ul>
                                </div><!--/.btn-group-->
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                    </div><!--/.span4-->
                </fieldset>
            </div><!--/.row-fluid-->
        </div><!--/.box-content-->
    </div><!--/.span12 box-->
</div><!--/.row-fluid-->
<div class='row-fluid'>
    <fieldset>
        <div class='span12 box'>
            <div class='box-content box-double-padding'>
                <div class="lead">
                    <i class="icon-briefcase text-info"></i>
                    Your Companies
                </div><!--/.lead-->

                <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            Company
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                    <tr>
                        <td data-title='Company'><a href='#'>{{ $brand->title }}</a></td>
                        <td data-title='Role'>
                            @foreach($brand->group_list as $group)
                            {{ $group->name }}
                            @endforeach
                        </td>
                        <td data-title='Actions'>
                            <button class='btn btn-danger btn-mini leave-company-btn' id="{{ $brand->id }}">
                                <i class='icon-remove'> </i>Leave Company
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!--/.box-content-->
        </div><!--/.span12-->
    </fieldset>
</div><!--/.row-fluid-->
<div class='form-actions' style='margin-bottom: 0;'>
    <div class='text-right'>
        <div class='btn btn-default btn-large'>
            <i class='icon-globe'></i>
            View Your Profile
        </div>

        <button class='btn btn-primary btn-large submit-form' rel='user-default'>
            <i class='icon-save'></i>
            Save All Changes
        </button>
    </div>
</div><!--/.form-actions-->
</div><!--/.span12-->

</div><!--/.row-fluid #content-wrapper-->

@stop


@section('inline_scripts')
@parent

$('.uploader').live('change', function(e){
    var uploader = $(e.currentTarget),
    container = uploader.parent(),
    form = $('#user-action-attachment')

    container.replaceWith(uploader)
    uploader.css('display','none')

    setTimeout(function(){
        form.submit()
        },1000)
})

$('.submit-form').click(function(){
    $(this).attr('disabled', 'disabled')

    var formId = $(this).attr('rel'),
    form = $('#'+formId)

    form.submit()
    e.preventDefault()
})

$('.leave-company-btn').click(function(){
        var target = $(this).attr('id');
        var redirect = "{{ Request::url() }}";

        var confirmed = confirm('Are you sure you want to leave this company?');

        if(confirmed === true) {
            $.ajax({
                type: "DELETE",
                url: "{{ URL::route("user.deletebrandremoval") }}",
                data: { _token: "{{ Session::get('_token') }}", brand_id: target }
            }).done(function(data){
                console.log('complete!');
                window.location.href=redirect;
            }).fail(function(){
                console.log('failed');
                window.location.href=redirect;
            });
        }
    });

$('.remove-photo-btn').click(function(){
    var target = $(this).attr('rel'),

    confirmed = confirm('Are you sure you want to delete this photo?');
});

@stop