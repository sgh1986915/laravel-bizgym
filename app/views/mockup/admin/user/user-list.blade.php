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
                        <span>User Administration</span>
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

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Manage the Users of your Application
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'><i class='icon-ban-circle'> </i> View Suspended Users </a>
                <a class='btn btn-default' role='button'><i class='icon-book'> </i> View the Blacklist</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>All Users</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            
                            <th>
                                User Name
                            </th>

                            <th>
                                Name
                            </th>
                            
                            <th>
                                Email
                            </th>
                            <th>
                                Joined
                            </th>
                            <th>
                                Status
                            </th>

                            <th>
                                Primary Role
                            </th>

                            <th>
                                Subscriber
                            </th>

                            <th>
                                Action
                            </th>



                            
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='User Name'>Bob230923</td>
                                <td data-title='Full Name'>Bob Knight</td>
                                <td data-title='Email'>bobknight@espn.com</td>
                                <td data-title='Join Date'>9/18/13</td>
                                <td data-title='Status'>
                                    <span class='label label-success'>Verified</span> 
                                </td>
                                <td data-title='Primary Role'>
                                        <span class='label label-important'>Admin</span>
                                </td>
                                <td data-title='Subsriber Status'>
                                    <span class='label label-success'>Yes</i>
                                </td>

                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-user'> </i>History
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='User Name'>James123</td>
                                <td data-title='Name'>James Baldwin</td>
                                <td data-title='Email'>james@522.com</td>
                                <td data-title='Join Date'>9/15/13</td>
                                <td data-title='Status'>
                                    <span class='label label-success'>Verified</span> 
                                </td>
                                <td data-title='Primary Role'>
                                    <span class='label label-default'>User</span>
                                </td>
                                <td data-title='Subsriber Status'>
                                    <span class='label label-default'>No</span>
                                </td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-user'> </i>History
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i>Edit
                                    </a> 
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i>
                                    </a>
                                </td>

                            </tr>

                            <tr>
                                <td data-title='User Name'>LanceR</td>
                                <td data-title='First Name'>Lance Reynolds</td>
                                <td data-title='Email'>test@google.com</td>
                                <td data-title='Join Date'>9/13/13</td>
                                <td data-title='Status'>
                                    <span class='label label-warning'> Not Verified</span> 
                                </td>
                                <td data-title='Primary Role'>
                                    <span class='label label-info'>Author</span> 
                                </td>
                                <td data-title='Subsriber Status'>
                                    <span class='label label-success'>Yes</span>
                                </td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-user'> </i>History
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='User Name'>RyanJay</td>
                                <td data-title='Name'>Ryan Jay</td>
                                <td data-title='Email'>hi@yahoo.com</td>
                                <td data-title='Join Date'>9/12/13</td>
                                <td data-title='Status'>
                                    <span class='label label-warning'>Not Verified</span> 
                                </td>
                                <td data-title='Primary Role'>
                                    <span class='label label-default'>User</span> 
                                </td>
                                <td data-title='Subsriber Status'>
                                    <span class='label label-default'>No</span>
                                </td>

                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-user'> </i>History
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='User Name'>MileyCyrus</td>
                                <td data-title='Name'>Miley Cyrus</td>
                                <td data-title='Email'>weird@mtv.com</td>
                                <td data-title='Join Date'>9/12/13</td>
                                <td data-title='Status'>
                                    <span class='label label-important'>Suspended</span> 
                                </td>
                                <td data-title='Primary Role'>
                                    <span class='label label-default'>User</span> 
                                </td>
                                <td data-title='Subsriber Status'>
                                    <span class='label label-default'>No</span>
                                </td>

                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-user'> </i>History
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i>
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td data-title='User Name'>KimK</td>
                                <td data-title='Name'>Kim Kardashian</td>
                                <td data-title='Email'>owned@kanye.com</td>
                                <td data-title='Join Date'>9/8/13</td>
                                <td data-title='Status'>
                                    <span class='label label-inverse'>Blacklisted</span> 
                                </td>
                                <td data-title='Primary Role'>
                                    <span class='label label-default'>User</span> 
                                </td>
                                <td data-title='Subsriber Status'>
                                    <span class='label label-default'>No</span>
                                </td>

                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-user'> </i>History
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i>
                                    </a>
                                </td>
                            </tr>

                            

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop