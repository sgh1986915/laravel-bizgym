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
                        <span>Brand Administration</span>
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

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Manage the Brands in your Application
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'><i class='icon-magic'> </i>Create a Brand </a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>All Brands</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table brand-list table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Logo
                            </th>

                            <th>
                                Name
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Visibility
                            </th>
                            <th>
                                Plan
                            </th>
                            <th>
                                Members
                            </th>
                            <th>
                                Owner
                            </th>

                            <th>
                                Action
                            </th>     
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Logo'><img src="http://placehold.it/50x50"></td>
                                <td data-title='Name'>Chicken & Waffles</td>
                                <td data-title='Status'><span class='label label-success'>Active</span> </td>
                                <td data-title='Visibility'><span class='muted'>Hidden</span></td>
                                <td data-title='Plan'><span class='label label-inverse'>Pro</span></td>
                                <td data-title='Members'>123</td>
                                <td data-title='Owner'><a href='user-details'>James Bob</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        Overview
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
                                <td data-title='Logo'><img src="http://placehold.it/50x50"></td>
                                <td data-title='Name'>Boats and Homes</td>
                                <td data-title='Status'><span class='label label-success'>Active</span> </td>
                                <td data-title='Visibility'>Visible</td>
                                <td data-title='Plan'><span class='label label-important'>Enterprise</span></td>
                                <td data-title='Members'>133</td>
                                <td data-title='Owner'><a href='user-details'>Walter White</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        Overview
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
                                <td data-title='Logo'><img src="http://placehold.it/50x50"></td>
                                <td data-title='Name'>Shrimp Sellers</td>
                                <td data-title='Status'><span class='label label-default'>In-Active</span> </td>
                                <td data-title='Visibility'><span class='muted'>Hidden</span></td>
                                <td data-title='Plan'><span class='label label-default'>Free</span></td>
                                <td data-title='Members'>133</td>
                                <td data-title='Owner'><a href='user-details'>Frank Beamer</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                        Overview
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
                                <td data-title='Logo'><img src="http://placehold.it/50x50"></td>
                                <td data-title='Name'>Lowes</td>
                                <td data-title='Status'><span class='label label-success'>Active</span> </td>
                                <td data-title='Visibility'>Visible</td>
                                <td data-title='Plan'><span class='label label-success'>Starter</span></td>
                                <td data-title='Members'>133</td>
                                <td data-title='Owner'><a href='user-details'>Bud Foster</a></td>
                                <td data-title='Actions'>
                                    <a class='btn btn-default btn-mini' href='#'>
                                      Overview
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