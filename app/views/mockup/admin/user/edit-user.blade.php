@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin user-edit' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Edit User</span>
                    </h3>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                            <a href="index.html"><i class='icon-dashboard'> </i> Admin
                            </a>
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Users
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Bob323
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Edit
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Edit User info and Permissions for Bob323
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Users</a>

                <a class='btn btn-default' href='#modal-suspend' role='button' data-toggle='modal'><i class='icon-ban-circle'> </i> Suspend User </a>
                <a class='btn btn-default' href='#modal-blacklist' data-toggle='modal' role='button'><i class='icon-book'> </i> Blacklist User </a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='span7'>
                                <div class="lead">
                                    <i class="icon-user text-contrast"></i>
                                    Basic Information
                                </div><!--/.lead-->
                                <div class='control-group'>
                                    <label class='control-label'>Username</label>
                                    <div class='controls'>
                                        <input class='span9' id='username' value='Bob323' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>First Name</label>
                                    <div class='controls'>
                                        <input class='span9' id='first_name' value='Bob' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Last Name</label>
                                    <div class='controls'>
                                        <input class='span9' id='last_name' value='Knight' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Email Address</label>
                                    <div class='controls'>
                                        <input class='span9' id='last_name' value='bob@yahoo.com' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Account Status</label>
                                    <div class='controls'>
                                        <select id='account_status'>
                                            <option selected value='0'>Verified</option>
                                            <option selected value='1'>Not Verified</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <div class='controls'>
                                        <label class='checkbox'>
                                            <input data-target='#change-password' data-toggle='collapse' id='changepasswordcheck' type='checkbox' value='option1'>
                                                Change password?
                                        </label>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='collapse' id='change-password'>
                                    <div class='control-group'>
                                        <label class='control-label'>Password</label>
                                        <div class='controls'>
                                            <input class='span12' id='password' placeholder='Password' type='password'>
                                        </div>
                                    </div>
                                    <div class='control-group'>
                                        <label class='control-label'>Password confirmation</label>
                                        <div class='controls'>
                                            <input class='span12' id='password-confirmation' placeholder='Password confirmation' type='password'>
                                        </div>
                                    </div> <!--/.control-group-->
                                </div> <!--/.collapse-->

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
                            </div><!--/.span7 -->
                            <div class='span4 offset1'>
                                <div class="lead">
                                    <i class="icon-picture text-contrast"></i>
                                    User Images
                                </div><!--/.lead-->

                                <div class='control-group'>
                                    <label class='control-label'>User Photo</label>
                                    <div class='user-photo'>
                                        <img src="http://placehold.it/200x200">
                                    </div><!--/.user-photo-->
                                    <div class="input-append">
                                            <input id="coverphoto_url" value='http://bizgym.com/images/photo' type="text"/>
                                            <button class="btn btn-danger" type="button">Remove</button>
                                        </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>User Cover Photo</label>
                                    <div class='user-photo'>
                                        <img src="http://placehold.it/350x150">
                                    </div><!--/.user-photo-->
                                    <div class='controls'>
                                        
                                        <div class="input-append">
                                            <input id="coverphoto_url" value='http://bizgym.com/images/photo' type="text"/>
                                            <button class="btn btn-danger" type="button">Remove</button>
                                        </div>
                                        
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                            </div><!--/.span4 offset1-->
                        </fieldset>
                            <hr class='hr-double'>
                        <fieldset>
                            <div class='span3'>
                                <div class="lead">
                                    <i class="icon-facebook text-primary"></i>
                                    Facebook Info
                                </div><!--/.lead-->

                                <div class='control-group'>
                                    <label class='control-label'>Facebook Username</label>
                                    <div class='controls'>
                                        <input class='input-block' id='facebook_username' value='bob123' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Facebook URL</label>
                                    <div class='controls'>
                                        <input class='input-block' id='facebook_url' value='facebook.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Facebook Image</label>
                                    <div class='controls'>
                                        <input class='input-block' id='facebook_image' value='facebook.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Facebook Description</label>
                                    <div class='controls'>
                                        <input class='input-block' id='facebook_description' value='Bees in the trap' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                            </div><!--/.span4-->

                            <div class='span3'>
                                <div class="lead">
                                    <i class="icon-twitter text-primary"></i>
                                    Twitter Info
                                </div><!--/.lead-->

                                <div class='control-group'>
                                    <label class='control-label'>Twitter Username</label>
                                    <div class='controls'>
                                        <input class='input-block' id='twitter_username' value='bob123' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Twitter URL</label>
                                    <div class='controls'>
                                        <input class='input-block' id='twitter_url' value='twitter.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Twitter Image</label>
                                    <div class='controls'>
                                        <input class='input-block' id='twitter_image' value='facebook.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Twitter Description</label>
                                    <div class='controls'>
                                        <input class='input-block' id='twitter_description' value='Tweeting about Bees' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                            </div><!--/.span4-->

                            <div class='span3'>
                                <div class="lead">
                                    <i class="icon-google-plus text-primary"></i>
                                    Google+ Info
                                </div><!--/.lead-->

                                <div class='control-group'>
                                    <label class='control-label'>Google Username</label>
                                    <div class='controls'>
                                        <input class='input-block' id='google_username' value='bob123' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Google URL</label>
                                    <div class='controls'>
                                        <input class='input-block' id='google_url' value='google.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Google Image</label>
                                    <div class='controls'>
                                        <input class='input-block' id='google_image' value='google.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>Google Description</label>
                                    <div class='controls'>
                                        <input class='input-block' id='google_description' value='Talking about some bees' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                            </div><!--/.span4-->

                            <div class='span3'>
                                <div class="lead">
                                    <i class="icon-google-plus text-primary"></i>
                                    LinkedIn Info
                                </div><!--/.lead-->

                                <div class='control-group'>
                                    <label class='control-label'>LinkedIn Username</label>
                                    <div class='controls'>
                                        <input class='input-block' id='linkedin_username' value='bob123' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>LinkedIn URL</label>
                                    <div class='controls'>
                                        <input class='input-block' id='linkedin_url' value='linkedin.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>LinkedIn Image</label>
                                    <div class='controls'>
                                        <input class='input-block' id='linkedin_image' value='linkedin.com/asdfas' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                                <div class='control-group'>
                                    <label class='control-label'>LinkedIn Description</label>
                                    <div class='controls'>
                                        <input class='input-block' id='linkedin_description' value='Professional Bee Keeper' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->
                            </div><!--/.span4-->
                        </fieldset>
                            <hr class='hr-double'>
                        <fieldset>
                            <div class='span8'>
                            
                                <div class="lead">
                                    <i class="icon-group text-info"></i>
                                    System Groups
                                </div><!--/.lead-->

                                
                                <div class="input-append">
                                    <select class='select input-medium'>
                                        <option value='0' disabled selected style='display:none;'>Select Group</option>
                                        <option>Agency</option>
                                        <option>Author</option>

                                    </select>
                                    <button class="btn btn-primary" type="button"><i class='icon-plus'> </i> Add to Group</button>
                                </div><!--/.input-append-->
                                        
                                        <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                                            <thead>
                                            <tr>
                                                
                                                <th>
                                                    Group
                                                </th>


                                                <th>
                                                    Action
                                                </th>
                                      
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-title='Group'>Administrator</td>
                                                    
                                                    

                                                    <td data-title='Actions'>
                                                        
                                                        <a class='btn btn-danger btn-mini' href='#'>
                                                            <i class='icon-remove'> </i>Remove from Group
                                                        </a>
                                                        
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>

                            </div><!--/.span8-->
                      

                        </fieldset>
                            <hr class='hr-double'>
                        <fieldset>

                            <div class='span8'>
                                <div class="lead">
                                    <i class="icon-briefcase text-info"></i>
                                    Brands and Brand Groups
                                </div><!--/.lead-->

                                <div class="input-append">
                                    <select class='select input-medium'>
                                        <option value='0' disabled selected style='display:none;'>Select Brand</option>
                                        <option>Home Depot</option>
                                        <option>Bed Bath and Beyond</option>

                                    </select>


                                    <select class='select input-medium'>
                                        <option value='0' disabled selected style='display:none;'>Select Group</option>
                                        <option>Executive</option>
                                        <option>Employee</option>

                                    </select>
                                    <button class="btn btn-primary" type="button"><i class='icon-plus'> </i> Add to Group</button>
                                </div><!--/.input-append-->

                                        
                                <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                                    <thead>
                                    <tr>
                                        
                                        <th>
                                            Brand
                                        </th>

                                         <th>
                                            Group
                                        </th>


                                        <th>
                                            Action
                                        </th>
                              
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Group'>Bobs Bee Store</td>
                                            <td data-title='Group'>Executive</td>
                                            
                                            

                                            <td data-title='Actions'>
                                                
                                                <a class='btn btn-mini' href='#modal-edit-group' data-toggle='modal' role='button'>
                                                    <i class='icon-edit'> </i>Change Group
                                                </a>


                                                <a class='btn btn-danger btn-mini' href='#'>
                                                    <i class='icon-remove'> </i>Remove from Brand
                                                </a>
                                                
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>

                            </div><!--/.span8--> 


                         

                        </fieldset>

                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Go Back to Users
                                </div>

                                <div class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Save All Changes
                                </div>
                            </div>
                        </div><!--/.form-actions-->

                        </form>
                </div><!--/.box-content-->
            </div><!--/.span8 box-->
        </div><!--/.row-fluid-->

    </div><!--/.span12-->


    <div class='modal hide fade' id='modal-edit-group' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Change Brand Group</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span10'>
                    <h4>Choose different group in Bob's Bee Store</h4>

                    <div class='control-group'>
                        <label class='control-label'>Select Group</label><p class='help-block'>
                        <div class='controls'>
                            <select id="brand_group" class="select input-block-level" name="blacklist_type">
            
                                <option selected value='email'>Executive</option>
                                <option value='ip'>Employee</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'>Cancel</button>
                 <button class='btn btn-default btn-primary'><i class='icon-save'> </i>Change Group</button>
            </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->


    <div class='modal hide fade' id='modal-blacklist' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Blacklist User</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    <h4 class='shift-up'>Are you sure you want to do this?</h4>
                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Blacklist Type</label><p class='help-block'>Do you want to Blacklist by email or IP address?</p>
                        <div class='controls'>
                            <select id="blacklist_type" class="select input-block-level" name="blacklist_type">
                                <option value='0' disabled selected style='display:none;'>Select Type</option>
                                <option value='email'>Email</option>
                                <option value='ip'>IP Address</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
    

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Duration</label><p class='help-block'>How long do you want to blacklist this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Duration</option>
                                <option value=''>1 Day</option>
                                <option value=''>1 Week</option>
                                <option value=''>1 Month</option>
                                <option value=''>Forever</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Reason</label><p class='help-block'>Why are you blacklisting this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Reason</option>
                                <option value=''>Spam</option>
                                <option value=''>Flaming</option>
                                <option value=''>Late Payments</option>
                                <option value=''>Fake Account</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-inverse' data-dismiss='modal'><i class='icon-book'> </i>Blacklist User</button>
            </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-suspend' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Suspend User</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
               
                <form class='span8'>

                    <h4 class='shift-up'>Are you sure you want to do this?</h4>
                    <hr class='normal'>
                    <div class='control-group'>
                        <label class='control-label'>Duration</label><p class='help-block'>How long do you want to suspend this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Duration</option>
                                <option value=''>1 Day</option>
                                <option value=''>1 Week</option>
                                <option value=''>1 Month</option>
                                <option value=''>Forever</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Reason</label><p class='help-block'>Why are you suspending this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Reason</option>
                                <option value=''>Spam</option>
                                <option value=''>Flaming</option>
                                <option value=''>Late Payments</option>
                                <option value=''>Fake Account</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-ban-circle'> </i> Suspend User</button>
            </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->


</div><!--/.row-fluid #content-wrapper-->



    

@stop