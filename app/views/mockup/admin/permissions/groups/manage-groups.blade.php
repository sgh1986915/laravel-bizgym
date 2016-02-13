@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin permissions' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Permission Groups</span>
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
                            Permissions
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Groups
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         <div class='row-fluid section-header'>
            <div class='title'>
               Create Groups with certain levels of access in your Application
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'>Go Back to Permissions</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>
            <div class='span8 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                    <div class='title'> </i>System Groups</div>
                    <div class='actions'>
                        <a class='btn btn-small'><i class='icon-plus'> </i>New Group</a>
                       
                    </div>
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table messages-list table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Group Name
                            </th>
                            <th>
                                Actions
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Group Name'><a href='category'>Administrator</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td data-title='Group Name'><a href='category'>Agency</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Group Name'><a href='category'>User</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>



                            
                            
                        </tbody>
                    </table>
                </div>
            </div><!--/.span12 box bordered-box-->
            
            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>What are system groups?</p>

                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>System groups are groups associated with the core application indicating what they can do with the system</li>
                      
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span8 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                    <div class='title'> </i>Brand Role Groups</div>
                    <div class='actions'>
                        <a class='btn btn-small'><i class='icon-plus'> </i>New Group</a>
                       
                    </div>
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table messages-list table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Group Name
                            </th>
                            <th>
                                Actions
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Group Name'><a href='category'>Subscriber</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td data-title='Group Name'><a href='category'>Employee</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Group Name'><a href='category'>Manager</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>



                            
                            
                        </tbody>
                    </table>
                </div>
            </div><!--/.span12 box bordered-box-->
            
            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>What are Brand Role Groups?
                  </p>
                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>Brand roles are groups which determine permissions with a brand.</li>
                            <li>You must define the base rules here, which will be inserted/updated in the database.</li>
                      
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->

                    


                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop