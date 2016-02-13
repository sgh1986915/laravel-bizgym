@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin plan' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Plan Details</span>
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
                           Plans
                        </li>

                         <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Pro Plan
                        </li>


                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               <strong>Pro Plan</strong> 
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default'><i class='icon-edit'> </i> Edit Plan</a> 
                <a class='btn btn-default' role='button'> </i>Back to Plans</a>               
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid user-analytics'>

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-success'>$29.99</h3>
                <small>Price</small>
                <div class='text-success icon-shopping-cart align-right'></div>
            </div>
            
            <div class='span3 box-content box-statistic'>
                <h3 class='title title text-primary'>1221</h3>
                <small>Subscribers</small>
                <div class='muted icon-users title text-primary align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-primary'>Monthly</h3>
                <small>Duration</small>
                <div class='text-primary icon-calendar align-right'></div>
            </div>

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-success'>$3,230</h3>
                <small>Lifetime Revenue</small>
                <div class='text-success icon-money align-right'></div>
            </div>
        </div><!--/.row-fluid user stats-->

        
        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Plan Activity</div>
                           <span class='label label-large label-success pull-right'>Active</span> 
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Order #
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                User
                            </th>
                            <th>
                                Brand
                            </th>
                            <th>
                                Order Amount
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Order'>1</td>
                                <td data-title='Date'>9/9/13 3:30 AM</td>
                                <td data-title='User'>James Bob</td>
                                <td data-title='Brand'>Home Depot</td>
                                <td data-title='Amount'>$1230.00</td>
                            </tr> 

                            <tr>
                                <td data-title='Order'>2</td>
                                <td data-title='Date'>9/8/13 9:30 AM</td>
                                <td data-title='User'>Carl Mittens</td>
                                <td data-title='Brand'>Toyota</td>
                                <td data-title='Amount'>$230.00</td>
                            </tr>                      

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->  



        <div class='row-fluid section-header'>
            <div class='title'>
                Plan Features
            </div>
                
        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid feature-group'>
            <div class='span12 box'>
                <div class='box-header muted-background'>
                    <div class='title'>
                        Feature Group Name
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content'>      
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Options</th>
                            <th>Mapped Variable</th>  
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Icon'><i class='icon-trophy'></td>
                                <td data-title='Title'>Expert Business Advice</td>
                                <td data-title='Description'>Access our knowledgebase</td>
                                <td data-title='Options'></td>
                                <td data-title='Mapped Variable'><span class='muted'>None</span></td>
                            </tr>
                            <tr>
                                <td data-title='Icon'><i class='icon-plane'></td>
                                <td data-title='Title'>Business Reporting</td>
                                <td data-title='Description'>Access our knowledgebase</td>
                                <td data-title='Options'>Daily</td>
                                <td data-title='Mapped Variable'>business_advice</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/. span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid feature-group'>
            <div class='span12 box'>
                <div class='box-header muted-background'>
                    <div class='title'>
                        Another Group Name
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content'>      
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Options</th>
                            <th>Mapped Variable</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Icon'><i class='icon-user'></td>
                                <td data-title='Title'>Multiple Employees</td>
                                <td data-title='Description'>Grant access to your employees</td>
                                <td data-title='Options'>30</td>
                                <td data-title='Mapped Variable'>employee_number</td>
                            </tr>
                            <tr>
                                <td data-title='Icon'><i class='icon-key'></td>
                                <td data-title='Title'>Key to Success</td>
                                <td data-title='Description'>We teach you some cool stuff</td>
                                <td data-title='Options'></td>
                                <td data-title='Mapped Variable'><span class='muted'>None</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/. span12 box-->
        </div><!--/.row-fluid-->



    </div><!--/.span12-->


</div><!--/.row-fluid #content-wrapper-->
    
@stop