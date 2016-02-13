@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

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
                    <a class='btn btn-default'><i class='icon-globe'> </i> View Your Public Profile</a>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span8 box'>
                <div class='box-content box-double-padding'>
                    <form class='form validate-form' novalidate='novalidate'>
                    <div class='row-fluid'>
                
                        <div class="lead">
                            <i class="icon-user text-contrast"></i>
                            Basic Information
                        </div><!--/.lead-->
                        <div class='control-group'>
                            <label class='control-label'>Username</label>
                            <div class='controls'>
                                <input class='span9' id='username' data-rule-required='true' value='Bob323' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                        <div class='control-group'>
                            <label class='control-label'>First Name</label>
                            <div class='controls'>
                                <input class='span9' id='first_name' data-rule-required='true' value='Bob' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>Last Name</label>
                            <div class='controls'>
                                <input class='span9' id='last_name' data-rule-required='true' value='Knight' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>Email Address</label>
                            <div class='controls'>
                                <input class='span9' id='last_name' data-rule-email='true' data-rule-required='true' value='bob@yahoo.com' type='text'>
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
                                    <input class='span12' id='password' data-rule-required='true' placeholder='Password' type='password'>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label'>Password confirmation</label>
                                <div class='controls'>
                                    <input class='span12' id='password-confirmation' data-rule-equalto='#password' data-rule-required='true' placeholder='Password confirmation' type='password'>
                                </div>
                            </div> <!--/.control-group-->
                        </div> <!--/.collapse-->

                        <hr class='normal'>

                        <div class='control-group'>
                            <label class='control-label'>Location</label>
                            <div class='controls'>
                                <input class='span9' id='location' value='Raleigh, North Carolina' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>Website</label>
                            <div class='controls'>
                                <input class='span9' id='website' value='http://bobsbeestore.com' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>Title</label>
                            <div class='controls'>
                                <input class='span9' id='title' value='Master Bee Keeper' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->


                        <div class='control-group'>
                            <label class='control-label'>Bio</label>
                            <div class='controls'>
                                <textarea class='input-block-level' value='I sell bee keeping supplies and stuff.' rows='4'></textarea>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span 8 box-->

            <div class='span4 box'>
                <div class='box-content box-padding'>
                    <div class="lead">
                        <i class="icon-picture text-contrast"></i>
                        Profile Image
                    </div><!--/.lead-->
                    <div class='control-group'>

                        <p class='help-block'></p>
                            The desired size for a profile photo is 200px wide, by 200px high.
                            </p> 


                        <div class='user-photo'>
                            <img src="http://placehold.it/200x200">
                        </div><!--/.user-photo-->

                        <button class="btn btn-danger remove-photo-btn" type="button"><i class='icon-trash'> </i> Remove Image</button>

                        <span class="btn btn-default fileinput-button">
                            <i class="icon-picture icon-white"></i>
                            <span>Upload Photo</span>
                            <input type="file" data-bfi-disabled="">
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

                        <p class='help-block'></p>
                            The desired size for a cover photo is 1000px wide, by 350px high.
                            </p> 


                        <div class='user-photo'>
                            <img src="http://placehold.it/300x150">
                        </div><!--/.user-photo-->

                        <button class="btn btn-danger remove-photo-btn" type="button"><i class='icon-trash'> </i> Remove Image</button>

                        <span class="btn btn-default fileinput-button">
                            <i class="icon-picture icon-white"></i>
                            <span>Upload Photo</span>
                            <input type="file" data-bfi-disabled="">
                        </span>
                    </div><!--/.control-group-->
                </div><!--/.box-content-->
            </div><!--/.span4 box-->

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
                            <tr>
                                <td data-title='Company'><a href='company-profile'>Bobs Bee Store</a></td>
                                <td data-title='Role'>Executive</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-danger btn-mini leave-company-btn' href='#'>
                                        <i class='icon-remove'> </i>Leave Company
                                    </a>
                                </td>
                            </tr>
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

                <div class='btn btn-primary btn-large'>
                    <i class='icon-save'></i>
                    Save All Changes
                </div>
            </div>
        </div><!--/.form-actions-->

        </form>
               
        

    </div><!--/.span12-->

</div><!--/.row-fluid #content-wrapper-->

@stop


@section('inline_scripts')
@parent
$('.leave-company-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure you want to leave this company?')
    
})

$('.remove-photo-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure you want to delete this photo?')
    
})
@stop