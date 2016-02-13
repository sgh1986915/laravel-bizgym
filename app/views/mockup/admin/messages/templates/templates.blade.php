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
                        <span>Manage Message Templates</span>
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
                            Templates
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-coument'> </i>Existing Templates</div>
                <div class='actions'>
                       <a class='btn btn-small'><i class='icon-plus'> </i>New Template</a>
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
                            Date
                        </th>
                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td class='title'>Standard</td>
                            <td class='date'>September 12, 2013</td>
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
                            <td class='title'>Test</td>
                            <td class='date'>September 10, 2013</td>
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