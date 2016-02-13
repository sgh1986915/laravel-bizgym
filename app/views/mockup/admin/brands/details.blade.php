@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin brands' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Brand Details</span>
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


                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Viewing Brand Details for Home Depot
            </div><!--/.title-->

            <div class='btn-group'> 
                <a class='btn btn-default' role='button'> </i>Back to Brands</a>
                <a class='btn btn-default' role='button'><i class='icon-envelope'> </i> Message Executives</a>
                <a class='btn btn-default' role='button'><i class='icon-edit'> </i> Edit Brand</a>
                <a class='btn btn-default' role='button'><i class='icon-user'> </i> View Public Profile</a>

            </div><!--/.btn-group-->


        </div><!--/.row-fluid section-header-->


        <div class='row-fluid profile-content'>

            <div class='span7'>
                <ul class='profile-meta unstyled'>
                    <li><span class='item-title'>Name:</span>Home Depot</li>
                    <li><span class='item-title'>Permalink: </span>homeDepot</li>
                    <li><span class='item-title'>Status: </span><span class='label label-large label-success'>Active</span></li>
                    <li><span class='item-title'>Subscription:</span><span class='label label-large label-inverse'>Pro</span></li>
                    <li><span class='item-title'>Entity:</span>Corporation</li>
                    <li><span class='item-title'>Primary Location:</span>Miami Beach, Florida</li>
                    <li><span class='item-title'>Created by:</span><a href='user-details'>James Bob</a></li>
                </ul>
            </div><!--/.span7-->

            <div class='span5'>
                <div class='lead'>Brand Photos</div>
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

        <div class='row-fluid profile-analytics'>
            <div class='span3 box-content box-statistic'>
                <h3 class='title title text-error'>9/3/2013</h3>
                <small>Created</small>
                <div class='muted icon-calendar title text-error align-right'></div>
            </div>

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-info'>3</h3>
                <small>Members</small>
                <div class='text-info icon-user align-right'></div>
            </div>

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-primary'>9</h3>
                <small>Last Member Login</small>
                <div class='text-primary icon-signin align-right'></div>
            </div>
            
            
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-success'>$3,230</h3>
                <small>Lifetime Revenue</small>
                <div class='text-success icon-money align-right'></div>
            </div>
        </div><!--/.row-fluid user stats-->

     
        <div class='row-fluid' style='margin-bottom:2em;'>
            <div class='span12 box'>
                <div class='box-header'>
                    <div class='title'><i class="icon-briefcase text-info"></i>
                        Brand Members</div>
                </div><!--/.box-header-->
                <div class='box-content'>
                    <table class='table data-table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Name
                            </th>

                            <th>
                                Group
                            </th>

                            <th>
                                Logins
                            </th>
                            <th>
                                Last Login
                            </th>

                            <th>
                                Date Added
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Name'><a href='user-details'>James Bob</a></td>
                                <td data-title='Group'>Executive</td>
                                <td data-title='Logins'>23</td>
                                <td data-title='Last Login'>2 days ago</td>
                                <td data-title='Date Added'>June 29, 2013</td>
                            </tr>

                            <tr>
                                <td data-title='Name'><a href='user-details'>Adam Sandler</a></td>
                                <td data-title='Group'>Employee</td>
                                <td data-title='Logins'>54</td>
                                <td data-title='Last Login'>5 days ago</td>
                                <td data-title='Date Added'>June 29, 2013</td>
                            </tr>

                            <tr>
                                <td data-title='Name'><a href='user-details'>Kerstin Bradley</a></td>
                                <td data-title='Group'>Employee</td>
                                <td data-title='Logins'>293</td>
                                <td data-title='Last Login'>7 days ago</td>
                                <td data-title='Date Added'>June 29, 2013</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!--/.box-content-->
            </div><!--/.span7-->
        </div><!--/.row-fluid-->


        <div class='row-fluid' style='margin-bottom:2em;'>
            <div class='span8 box'>
                <div class='box-header'>
                    <div class='title'><i class="icon-tag text-info"></i>
                        Assigned Values</div>
                </div><!--/.box-header-->
                <div class='box-content'>
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Type
                            </th>

                            <th>
                                Value
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Type'>Entity</td>
                                <td data-title='Value'>Business</td>
                            </tr>

                            <tr>
                                <td data-title='Type'>Model</td>
                                <td data-title='Value'>Brick and Mortar</td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div> <!--/.box-content-->
            </div><!--/.span7-->

            <div class='span4 box'>
                <div class='box-header'>
                    <div class='title'><i class="icon-gift text-info"></i>
                        Consumer Groups</div>
                </div><!--/.box-header-->
                <div class='box-content'>
                    <ul class='unstyled consumer-list list-striped'>
                        <li>Moms</li>
                        <li>Dads</li>
                        <li>Builders</li>
                    </ul>
                </div> <!--/.box-content-->
            </div><!--/.span7-->
        </div><!--/.row-fluid-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Activity Log</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
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
                                        User
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
                                        <td data-title='User'>Jim Bob</td>
                                        <td data-title='Activity'>User logged in</td>
                                        <td data-title='IP Address'>182.170.69.208</td>
                                        <td data-title='Date and Time'>9/9/13 9:32 PM</td>
                                    </tr>

                                    <tr>
                                        <td data-title='Type'>User Actions</td>
                                        <td data-title='Severity'>Normal</td>
                                        <td data-title='User'>Jill Jell</td>
                                        <td data-title='Activity'>User logged out</td>
                                        <td data-title='IP Address'>182.170.69.208</td>
                                        <td data-title='Date and Time'>9/9/13 9:32 PM</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div><!--/.scrollabe-area-->
                    </div><!--/.responsive-table-->
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop