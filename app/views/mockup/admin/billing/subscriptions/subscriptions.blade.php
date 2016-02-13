@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin subscriptions' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Subscriptions</span>
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
                            Billing
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Subscriptions
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Manage your Subscriptions
            </div>
            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Return to Billing</a>
            </div><!--/.btn-group-->      

        </div><!--/.row-fluid section-header-->
        
        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header green-background'>
                        <div class='title'><i class='icon-money'> </i> Existing Subscribtions</div>
                        
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='table data-table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Payment Party</th>
                            <th>Company</th>
                            <th>Plan</th>
                            <th>Status</th>
                            <th>Revenue</th>
                            <th>Started</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='ID'>1</td>
                                <td data-title='Wallet'><a href='..admin/user/detail'>Terry Richardson</a></td>
                                <td data-title='Company'>HomeDepot</td>
                                <td data-title='Plan'><span class='label label-inverse'>Pro Plan</span></td>
                                <td data-title='Status'><span class='label label-success'>Active</span></td>
                                <td data-title='Revenue'>$1293.00</td>
                                <td data-title='Started'>9/1/2013</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini'><i class='icon-zoom-in'> </i> Details</a>
                                </td>
                            </tr>   

                            <tr>
                                <td data-title='ID'>2</td>
                                <td data-title='Wallet'><a href='..admin/user/detail'>Lance Carlsbad</a></td>
                                <td data-title='Company'>Bed Bath and Beyond</td>
                                <td data-title='Plan'><span class='label label-info'>Enterprise Plan</span></td>
                                <td data-title='Status'><span class='label'>Paused</span></td>
                                <td data-title='Revenue'>$193.00</td>
                                <td data-title='Started'>9/1/2013</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini'><i class='icon-zoom-in'> </i> Details</a>
                                </td>
                            </tr>   


                            <tr>
                                <td data-title='ID'>3</td>
                                <td data-title='Wallet'><a href='..admin/user/detail'>Andrew Hubble</a></td>
                                <td data-title='Company'>Spencers</td>
                                <td data-title='Plan'><span class='label label-success'>Starter Plan</span></td>
                                <td data-title='Status'><span class='label label-success'>Active</span></td>
                                <td data-title='Revenue'>$393.00</td>
                                <td data-title='Join Date'>9/2/2013</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini'><i class='icon-zoom-in'> </i> Details</a>
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