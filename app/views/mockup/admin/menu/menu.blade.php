@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin admin-menu' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Menus</span>
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
                            Menu
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

      

            <div class='alert alert-info'>
                <a class='close' data-dismiss='alert' href='#'>&times;</a>
                <div class='row-fluid'>
                    <strong>Hey there!</strong>
                </div>
                <div class='row-fluid shift-down'>
                    <div class='span8'>
                        <p>Start out with the different menu locations listed below, and then create menus for those locations. Manage the restictions of each menu, and control what items are displayed in each menu. <i class='icon-smile'></i></p>
                    </div><!--/.span8 offset1-->
                </div><!--/.row-fluid-->


                <ul>
                    <li>The rules found here will be used in the group or user permissions.</li>
                    <li>You must define the base rules here, which will be inserted/updated in the database.</li>
                    <li>However, superuser and is_admin cannot be deleted or edited.</li>
                </ul>

            </div><!--/.alert-->

       

        

        <div class='row-fluid menu-category'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header purple-background'>
                <div class='title'><i class='icon-sitemap'> </i> Header</div>
                 


                <div class='actions'>
                    

                    <a class='btn btn-small'><i class='icon-plus'> </i>Add Menu</a>
                    <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                    </a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            Menu Name
                        </th>
                        <th>
                            Restrictions
                        </th>
                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Admin</td>
                        <td><span class='label label-success'>Visible on all pages</span></td>
                        
                        <td>
                            
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-cog'> </i>Menu Settings
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-link'> </i> Manage Menu Items
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete This Menu
                                </a>
                            
                        </td>
                    </tr>

                    <tr>
                        <td>Subscriber</td>
                        <td><span class='label label-defeault'>Visible on 26 pages</span>
                            <span class='label label-warning'>Prohibited from 3 Pages</span></td>
                        
                        <td>
                            
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-cog'> </i>Menu Settings
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-link'> </i> Manage Menu Items
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete This Menu
                                </a>
                            
                        </td>
                    </tr>
                   
                
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid menu-category'>
            <div class='span12 box bordered-box purple-border'>
            <div class='box-header purple-background'>
                <div class='title'><i class='icon-sitemap'> </i> Left Sidebar</div>
                 


                <div class='actions'>
                    

                    <a class='btn btn-small'><i class='icon-plus'> </i>Add Menu</a>
                    <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                    </a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            Menu Name
                        </th>
                        <th>
                            Restrictions
                        </th>
                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Admin</td>
                        <td><span class='label label-success'>Visible on all pages</span></td>
                        
                        <td>
                            
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-cog'> </i>Menu Settings
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-link'> </i> Manage Menu Items
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete This Menu
                                </a>
                            
                        </td>
                    </tr>

                    <tr>
                        <td>Subscriber</td>
                        <td><span class='label label-defeault'>Visible on 26 pages</span>
                            <span class='label label-warning'>Prohibited from 3 Pages</span></td>
                        
                        <td>
                            
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-cog'> </i>Menu Settings
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-link'> </i> Manage Menu Items
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete This Menu
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