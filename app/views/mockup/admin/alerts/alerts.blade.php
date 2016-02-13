@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin alerts' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Alerts</span>
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
                            Alerts
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

      <div class='row-fluid section-header'>
            <div class='title'>
                Create & manage alerts for certain actions in your Application
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-success' role='button'>Create Alert</a>
            </div><!--/.btn-group-->

        </div>
       

        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-bullhorn'> </i>Existing Alerts</div>
                <div class='actions'>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table alerts-list table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            Image
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Text
                        </th>

                        <th>
                            Status
                        </th>

                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-title='Image'><img src='http://placehold.it/50x50'></td>
                            <td data-title='Title'>Hello Alert</td>
                            <td data-title='Text'>this is a test message for the system...</td>
                            <td data-title='Status'><span class='label label-success'>Active</span></td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-bar-chart'> </i>Details
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td data-title='Image'><img src='http://placehold.it/50x50'></td>
                            <td data-title='Title'>Just Testing</td>
                            <td data-title='Text'>this is a test message for the system...</td>
                            <td data-title='Status'><span class='label label-success'>Active</span></td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-bar-chart'> </i>Details
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td data-title='Image'><img src='http://placehold.it/50x50'></td>
                            <td data-title='Title'>Hello Alert</td>
                            <td data-title='Text'>this is a test</td>
                            <td data-title='Status'><span class='label label-success'>Active</span></td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-bar-chart'> </i>Details
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Image'><img src='http://placehold.it/50x50'></td>
                            <td data-title='Title'>Sup Tara Reid</td>
                            <td data-title='Text'>Blank message</td>
                            <td data-title='Status'><span class='label label-default'>Active</span></td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-bar-chart'> </i>Details
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td data-title='Image'><img src='http://placehold.it/50x50'></td>
                            <td data-title='Title'>Hello Alert</td>
                            <td data-title='Text'>this is a test</td>
                            <td data-title='Status'><span class='label label-success'>Active</span></td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-bar-chart'> </i>Details
                                </a>
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