@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin brand' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Edit Brand</span>
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
                            Brands
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Home Depot
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
                Edit Brand Profile for Home Depot
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Brands</a>

                
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='span7'>
                                <div class="lead">
                                    <i class="icon-briefcase text-contrast"></i>
                                    Basic Information
                                </div><!--/.lead-->
                                
                                <div class='control-group'>
                                    <label class='control-label'>Brand Name</label>
                                    <div class='controls'>
                                        <input class='span9' id='brand_name' placeholder='Ex: BizGym' value='Home Depot' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Brand URL</label><p class='help-block'>Choose a permalink for this brand, similar to a username.</p>
                                    <div class='controls'>
                                        <input class='span9' id='brand_url' placeholder='yourbrand' value='HomeDepot' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Website</label><p class='help-block'>Does your brand have a website? Add it here. </p>
                                    <div class='controls'>
                                        <input class='span9' id='brand_website' placeholder='http://bobsbeestore.com' value='http://homedepot.com' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <label class='control-label'>Description</label>
                                    <div class='controls'>
                                        <textarea class='input-block-level' placeholder='My brand sells this and that' rows='4'>Selling nails and boards</textarea>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <label class='control-label'>Status</label><p class='help-block'>Is this brand active in the system?</p>
                                    <div class='controls'>
                                        <select class='input-large'>
                                            <option value='0'>Active</option>
                                            <option value='1'>In-Active</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <label class='control-label'>Visibility</label><p class='help-block'>Is this brand visible to outsiders?</p>
                                    <div class='controls'>
                                        <select class='input-large'>
                                            <option value='0'>Visible</option>
                                            <option value='1'>Hidden</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->



                                
                            </div><!--/.span7-->
                            <div class='span4 offset1'>
                                <div class="lead">
                                    <i class="icon-picture text-contrast"></i>
                                    Brand Images
                                </div><!--/.lead-->

                                <div class='control-group'>
                                    <label class='control-label'>Brand Logo</label>
                                    <div class='user-photo'>
                                        <img src="http://placehold.it/200x200">
                                    </div><!--/.user-photo-->
                                    <div class="input-append">
                                            <input id="coverphoto_url" value='http://bizgym.com/images/photo' type="text"/>
                                            <button class="btn btn-danger" type="button">Remove</button>
                                        </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Brand Cover Photo</label>
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
                                    <i class="icon-briefcase text-info"></i>
                                    Brand Members
                                </div><!--/.lead-->

                                <div class='control-group add-member'>
                                    <select class='select2 input-large'>
                                            <option value='0' disabled selected style='display:none;'>Select User</option>
                                            <option>User 1</option>
                                            <option>User 2</option>
                                            <option>User 3</option>
                                            <option>User 4</option>
                                            <option>User 5</option>
                                    </select>

                                 
                                    <select class='select input-medium'>
                                        <option value='0' disabled selected style='display:none;'>Select Group</option>
                                        <option>Executive</option>
                                        <option>Owner</option>
                                        <option>Employee</option>

                                    </select>
                                        
                                    <button class="btn btn-primary" type="button"><i class='icon-plus'> </i> Add to Brand</button>
                                </div><!--/.control-group-->

                                        
                                <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                                    <thead>
                                    <tr>
                                        
                                        <th>
                                            User
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
                                            <td data-title='User'>Bill Davis</td>
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
                            <hr class='hr-double'>
                        <fieldset>

                            <div class='span8'>
                                <div class="lead">
                                    <i class="icon-tags text-info"></i>
                                    Assigned Values
                                </div><!--/.lead-->

                                        
                                <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                                    <thead>
                                    <tr>
                                        
                                        <th>
                                            ID
                                        </th>

                                         <th>
                                            Type
                                        </th>


                                        <th>
                                            Value
                                        </th>

                                        <th>
                                            Consumer Group
                                        </th>
                                        
                                        <th>
                                            Actions
                                        </th>
                              

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='ID'>1</td>
                                            <td data-title='Type'>Entity</td>
                                            <td data-title='Value'>Business</td>
                                            <td data-title='Consumer Group'>Global</td>

                                            <td data-title='Actions'>
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
                                    Go Back to Brands
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
                    <h4>Choose different group in Home Depot</h4>

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



</div><!--/.row-fluid #content-wrapper-->



    

@stop