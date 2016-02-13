@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin messages' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Message Groups</span>
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
                            Messages
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
                Create Groups of Recipients for your messages
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Messages</a>
            </div><!--/.btn-group--> 

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-envelope'> </i>Existing Groups</div>
                <div class='actions'>
                    <a class='btn btn-small'><i class='icon-plus'> </i>New Group</a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table messages-list table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>

                        <th>
                            Created
                        </th>
                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td class='title'>Test Group</td>
                            <td class='description'>It's a test group</td>
                            <td class='date'>June 20, 2013</td>
                            
                            <td class='actions'>
                            
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class='id'>2</td>
                            <td class='title'>Test Group 2</td>
                            <td class='description'>It's still a test group</td>
                            <td class='date'>June 18, 2013</td>
                            
                            <td class='actions'>
                            
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
        </div><!--/.row-fluid-->

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop