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
                        <span>Manage Permission Rules</span>
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
                            Rules
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         <div class='row-fluid section-header'>
            <div class='title'>
               Create permissions rules to assign your groups
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'>Go Back to Permissions</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>
            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                    <div class='title'> </i>Existing Rules</div>
                    <div class='actions'>
                        <a class='btn btn-small'><i class='icon-plus'> </i>New Rule</a>
                       
                    </div>
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table messages-list table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Slug
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Actions
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Name'>Super User</td>
                                <td data-title='Slug'>superuser</td>
                                <td data-title='Description'>Access to Everything</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini disabled' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-mini disabled' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td data-title='Name'>Admin</td>
                                <td data-title='Slug'>is_admin</td>
                                <td data-title='Description'>Administrative Privileges</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini disabled' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-mini disabled' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>


                            <tr>
                                <td data-title='Name'>Create a Brand</td>
                                <td data-title='Slug'>brand_create</td>
                                <td data-title='Description'>Create a new Brand</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'>Manage a Brand</td>
                                <td data-title='Slug'>brand_manage</td>
                                <td data-title='Description'>Manage Brand Settings</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'>Delete Brand</td>
                                <td data-title='Slug'>brand_remove</td>
                                <td data-title='Description'>Delete a brand from the system</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#'>
                                        <i class='icon-edit'> </i> Edit
                                    </a>
                                    <a class='btn btn-mini' href='#'>
                                        <i class='icon-remove'> </i> Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>Things you should know about these rules</p>

                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>The rules found here will be used in the group or user permissions.</li>
                            <li>You must define the base rules here, which will be inserted/updated in the database.</li>
                            <li>However, superuser and is_admin cannot be deleted or edited.</li>
                            <li>Once a rule has been created here, add it within Group Permissions</li>
                      
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->


    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop