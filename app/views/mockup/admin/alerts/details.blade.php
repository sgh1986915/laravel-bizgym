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
                        <span>Alert Details</span>
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
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Test Alert
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Details
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                See the details of your alert and find out how it's doing.
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Alerts</a>
                <a class='btn btn-success' role='button'>Create New Alert</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid alert-details'>
            <div class='span12 box'>
               
                <div class='box-content'>
                        
                    <div class='row-fluid'>
                        <div class='span9'>
                            <div class='row-fluid'>
                                <div class='title'>Test Alert</div>
                                <div class='status active'><i class='icon-ok'> </i> Active</div> <!--/.div-->
                                <!--<div class='status inactive'><i class='icon-ban-circle'> </i> Inactive</div>  --><!--/.div-->
                            </div><!--/.row-fluid-->

                            <div class='row-fluid'>
                                <div class='alert-text'>
                                    <p>This alert says all sorts of things. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </div>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid'>
                                <i class='icon-calendar meta-label'> </i>Alert set to expire <span class='alert-date'>December 28, 2013 at 7:30 pm</span>
                            </div><!--/.row-fluid-->
                            <div class='row-fluid shift-down'>
                                <span class='pull-left'> <i class='icon-bullseye meta-label'> </i>Targeted Users: </span>
                                <ul class='inline list-unstyled target-users pull-left'>
                                    <li><i class='icon-user'> </i> Administrator</li>
                                    <li><i class='icon-user'> </i> User</li>
                                </ul>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid shift-down'>
                               <i class='icon-pencil meta-label'> </i> Created <span class='alert-date'>Friday May 7, 2013 at 7:35 pm</span> by <span class='alert-author'>Steve Jobs</span>

                                <div class='btn-group alert-options pull-right'>
                                    <a class='btn btn-default'><i class='icon-edit'> </i> Edit this Alert</a>
                                    <a class='btn btn-default'><i class='icon-remove'> </i> Delete this Alert</a>
                                </div><!--/.btn-group-->
                            </div><!---/.row-fluid-->
                        </div><!--/.span9-->

                        <div class='span3'>
                            <div class='alert-image'>
                                <img src='http://placehold.it/150x150'>
                            </div><!--/.alert-image-->
                        </div> <!--/.span3-->

                    </div><!--/.row-fluid-->

                </div><!--/.box-content-->
            </div><!--/.span12 box-->

        </div><!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-bullhorn'> </i>Alert Statistics</div>
                <div class='actions'>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table alerts-statistics table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Date of Alert
                        </th>
                        <th>
                            Targeted User
                        </th>

                        <th>
                            Was Alert Read?
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='alert-number'>1</td>
                            <td class='alert-date'>September 12, 2013 - 10:28 pm</td>
                            <td class='alert-user'>Jimmy Johnson</td>
                            <td class='alert-status'><span class='label label-success'>Yes</span></td>
                        </tr>

                        <tr>
                            <td class='alert-number'>2</td>
                            <td class='alert-date'>September 11, 2013 - 10:28 pm</td>
                            <td class='alert-user'>Tara Reid</td>
                            <td class='alert-status'><span class='label label-default'>No</span></td>
                        </tr>
                        <tr>
                            <td class='alert-number'>3</td>
                            <td class='alert-date'>September 10, 2013 - 10:28 pm</td>
                            <td class='alert-user'>Mila Kunis</td>
                            <td class='alert-status'><span class='label label-default'>No</span></td>
                        </tr>
                        <tr>
                            <td class='alert-number'>4</td>
                            <td class='alert-date'>September 9, 2013 - 10:28 pm</td>
                            <td class='alert-user'>Heidi Klum</td>
                            <td class='alert-status'><span class='label label-success'>Yes</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

       



    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop