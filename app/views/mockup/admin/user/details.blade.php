@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin users' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>User Details</span>
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
                            Bob623
                        </li>


                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Viewing User Details for Bob623
            </div><!--/.title-->

            <div class='btn-group'> 
                <a class='btn btn-default' role='button'> </i>Back to Users</a>
                <a class='btn btn-default' role='button'><i class='icon-envelope'> </i> Message User</a>
                <a class='btn btn-default' role='button'><i class='icon-edit'> </i> Edit User</a>
                <a class='btn btn-default' role='button'><i class='icon-user'> </i> View Public Profile</a>

            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid profile-content'>

            <div class='span7'>
                <ul class='profile-meta unstyled'>
                    <li><span class='item-title'>Name:</span>James Bob</li>
                    <li><span class='item-title'>Email: </span>james@bob.com</li>
                    <li><span class='item-title'>Status: </span><span class='label label-large label-success'>Verified</span></li>
                    <li><span class='item-title'>Subscription:</span><span class='label label-large label-inverse'>Pro</span></li>
                    <li><span class='item-title'>Username:</span>Bob623</li>
                    <li><span class='item-title'>System Groups:</span><span class='label system label-important'>Admin</span><span class='label system'>User</span></li>
                    
                </ul>
            </div><!--/.span7-->

            <div class='span5'>
                <div class='lead'>User Photos</div>
                <div class='row-fluid'>
                    <div class='span8'>
                        <div class='cover-image'>
                            <!-- User cover image -->
                            <img src='http://placehold.it/350x170' alt='Cover Photo on Dashboard'>
                        </div><!--/.profile-image-->
                    </div><!--/.span8-->
                    <div class='span4'>
                        <div class='profile-image'>
                            <!-- User profile image -->
                            <img src='http://placehold.it/200x200' alt='Profile Image'>
                        </div><!--/.profile-image-->
                    </div><!--/.span4-->
                </div><!--/.row-fluid-->

                <div class='row-fluid social'>
                    <div class='lead'>Connected Social Accounts</div>

                    <ul class="user-connect">
                    <li>
                        <button class="btn share-button">
                        <i class="icon-facebook"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn share-button">
                        <i class="icon-twitter"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn share-button">
                        <i class="icon-linkedin"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn share-button">
                        <i class="icon-google-plus"></i>
                        </button>
                    </li>
                </ul>
       

                </div><!--/.row-fluid-->
            </div><!--/.span5-->

        </div><!--/.row-fluid profile-content-->

        <div class='row-fluid user-analytics'>
            <div class='span3 box-content box-statistic'>
                <h3 class='title title text-error'>9/23/2013</h3>
                <small>Joined</small>
                <div class='muted icon-calendar title text-error align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-primary'>3 Days Ago</h3>
                <small>Last Login</small>
                <div class='text-primary icon-signin align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-info'>3409</h3>
                <small>Logins</small>
                <div class='text-info icon-repeat align-right'></div>
            </div>
            

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-success'>$3,230</h3>
                <small>Lifetime Revenue</small>
                <div class='text-success icon-money align-right'></div>
            </div>
        </div><!--/.row-fluid user stats-->

     
        <div class='row-fluid' style='margin-bottom:2em;'>
            <div class='span7 box'>
                <div class='box-content'>
                    <div class="lead">
                        <i class="icon-briefcase text-info"></i>
                        Brands and Brand Groups
                    </div><!--/.lead-->

                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Brand
                            </th>

                             <th>
                                Group
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Brand'>Bobs Bee Store</td>
                                <td data-title='Group'>Executive</td>
                            </tr>

                            <tr>
                                <td data-title='Brand'>Home Depot</td>
                                <td data-title='Group'>Executive</td>
                            </tr>

                            <tr>
                                <td data-title='Brand'>Hurley</td>
                                <td data-title='Group'>Employee</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!--/.box-content-->
            </div><!--/.span7-->

            <div class='span5 box'>
                <div class='box-content'>
                    <div class="lead">
                        <i class="icon-trophy text-info"></i>
                        Badges
                    </div><!--/.lead-->

                    <ul class='inline badges'>
                        <li><a class='has-popover' data-placement='top' data-content='Recevied at (date)' data-original-title='Badge Name'><img src="http://placehold.it/40x40" class='img-circle'></a></li>
                        <li><a class='has-popover' data-placement='top' data-content='Recevied at (date)' data-original-title='Badge Name'><img src="http://placehold.it/40x40" class='img-circle'></a></li>
                        <li><a class='has-popover' data-placement='top' data-content='Recevied at (date)' data-original-title='Badge Name'><img src="http://placehold.it/40x40" class='img-circle'></a></li>
                        <li><a class='has-popover' data-placement='top' data-content='Recevied at (date)' data-original-title='Badge Name'><img src="http://placehold.it/40x40" class='img-circle'></a></li>
                        <li><a class='has-popover' data-placement='top' data-content='Recevied at (date)' data-original-title='Badge Name'><img src="http://placehold.it/40x40" class='img-circle'></a></li>
                    </ul>
                    
                </div> <!--/.box-content-->
            </div><!--/.span8-->  

        </div><!--/.row-fluid-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Activity Log</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            
                            <th>
                                Type
                            </th>

                            <th>
                                Severity
                            </th>
                    
                            <th>
                                Activity
                            </th>
                            <th>
                                IP Address
                            </th>

                            <th>
                                Date & Time
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Type'>User Actions</td>
                                <td data-title='Severity'>Normal</td>
                                <td data-title='Activity'>User logged in</td>
                                <td data-title='IP Address'>182.170.69.208</td>
                                <td data-title='Date and Time'>9/9/13 9:32 PM</td>
                            </tr>

                            <tr>
                                <td data-title='Type'>User Actions</td>
                                <td data-title='Severity'>Normal</td>
                                <td data-title='Activity'>User logged out</td>
                                <td data-title='IP Address'>182.170.69.208</td>
                                <td data-title='Date and Time'>9/9/13 9:32 PM</td>
                            </tr>

                          

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop