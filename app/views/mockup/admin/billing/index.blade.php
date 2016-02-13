@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin users' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Billing Management</span>
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

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <a class='btn btn-default' role='button'><i class='icon-bar-chart'> </i>Reporting</a>
            <a class='btn btn-default' role='button'><i class='icon-gift'> </i> Manage Discounts</a>         
            <a class='btn btn-default' role='button'><i class='icon-barcode'> </i> Manage Plans</a>
            <a class='btn btn-default' role='button'><i class='icon-key'> </i>Manage Subscriptions</a>
            <a class='btn btn-default' role='button'><i class='icon-money'> </i>Author Billing</a>
            <a class='btn btn-default' role='button'><i class='icon-warning-sign'> </i> Outstanding Transactions</a>      
        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>
            <div class='span4'>
                <div class='box'>
                    <div class='box-header'>
                        <div class='title'>
                            Billing Breakdown
                        </div><!--/.title-->
                    </div><!--/.box-header-->
                    <div class='box-content'>
                        <div id='stats-chart5' style='margin-top:20px;'></div>
                    </div><!--/.box-content-->
                </div><!--/box-->
            </div><!--/.span4-->


            <div class='span4 billing-stats'>
                <div class='span12 box'>
                    <div class='box-header'>
                        <div class='title'>This Month</div>
                    </div><!--/.box-header-->
                    <div class='row-fluid'>
                        <div class='span12 box-content box-statistic'>
                            <div class='pull-left'>
                                <h3 class='title text-success'>123</h3>
                                <small>Transactions</small>
                            </div><!--/.pull-left-->
                            <div class='pull-right text-success'><i class='icon-arrow-up'></i> 10%</div>

                        </div>
                    </div>
                    <div class='row-fluid'>    
                        <div class='span12 box-content box-statistic'>
                            <div class='pull-left'>
                                <h3 class='title text-error'>3</h3>
                                <small>Outstanding Transactions</small>
                            </div><!--/.pull-left-->
                            <div class='pull-right text-error'><i class='icon-arrow-up'></i> 10%</div>
                        </div>
                    </div>
                    <div class='row-fluid'>
                        <div class='span12 box-content box-statistic'>
                            <div class='pull-left'>
                                <h3 class='title title text-success'>15</h3>
                                <small>New Subscriptions</small>
                            </div><!--/.pull-left-->
                            <div class='pull-right text-success'><i class='icon-arrow-up'></i> 10%</div>
                        </div>
                    </div>
                    
                </div>
            </div><!--/.span4-->

            <div class='span4'>
                <div class='span12 box'>
                    <div class='box-header'>
                        <div class='title'>Last Month</div>
                    </div><!--/.box-header-->
                    <div class='row-fluid'>
                        <div class='span12 box-content box-statistic'>
                            <h3 class='title text-success'>523</h3>
                            <small>Transactions</small>
                            <div class='text-success icon-credit-card align-right'></div>
                        </div>
                    </div>
                    <div class='row-fluid'>    
                        <div class='span12 box-content box-statistic'>
                            <h3 class='title text-error'>5</h3>
                            <small>Outstanding Transactions</small>
                            <div class='text-error icon-warning-sign align-right'></div>
                        </div>
                    </div>
                    <div class='row-fluid'>
                        <div class='span12 box-content box-statistic'>
                            <h3 class='title title text-primary'>31</h3>
                            <small>New Subscriptions</small>
                            <div class='muted icon-key title text-primary align-right'></div>
                        </div>
                    </div>
                    
                </div>
            </div><!--/.span4-->


        </div><!--/.row-fluid-->






        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Transaction History</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Order</th>
                            <th>Type</th>
                            <th>Item</th>
                            <th>Brand</th>
                            <th>User</th>
                            <th>Discount</th>
                            <th>Trasaction ID</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Date'>9/26/13 9:53 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>12</a></td>
                                <td data-title='Type'>Recurring</td>
                                <td data-title='Item'>Pro Plan</td>
                                <td data-title='Brand'>Home Depot</td>
                                <td data-title='User'>Bob Jones</td>
                                <td data-title='Discount'><span class='muted'>None</span></td>
                                <td data-title='Transaction ID'>TX-1239023</td>
                                <td data-title='Amount'>$93.99</td>
                            </tr>
                            <tr>
                                <td data-title='Date'>9/26/13 9:51 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>11</a></td>
                                <td data-title='Type'>Recurring</td>
                                <td data-title='Item'>Starter Plan</td>
                                <td data-title='Brand'>Bob's Bee Store</td>
                                <td data-title='User'>Bob Jones</td>
                                <td data-title='Discount'><span class='muted'>None</span></td>
                                <td data-title='Transaction ID'>TX-1239023</td>
                                <td data-title='Amount'>$39.99</td>
                            </tr>  

                            <tr>
                                <td data-title='Date'>9/25/13 8:51 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>10</a></td>
                                <td data-title='Type'>One-Time</td>
                                <td data-title='Item'>Starter Plan</td>
                                <td data-title='Brand'>Acura</td>
                                <td data-title='User'>Billy Honda</td>
                                <td data-title='Discount'><span class='muted'>None</span></td>
                                <td data-title='Transaction ID'>TX-12390222</td>
                                <td data-title='Amount'>$19.99</td>
                            </tr>  


                            <tr>
                                <td data-title='Date'>9/25/13 8:45 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>9</a></td>
                                <td data-title='Type'>One-Time</td>
                                <td data-title='Item'>Enterprise Plan</td>
                                <td data-title='Brand'>AMC</td>
                                <td data-title='User'>Frodo Gandalf</td>
                                <td data-title='Discount'><a href='billing/discounts/details'>Spring Savings</a></td>
                                <td data-title='Transaction ID'>TX-123902112</td>
                                <td data-title='Amount'>$19.99</td>
                            </tr> 

                            <tr>
                                <td data-title='Date'>9/25/13 8:40 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>10</a></td>
                                <td data-title='Type'>Marketplace</td>
                                <td data-title='Item'>BizPlan Template</td>
                                <td data-title='Brand'>AMC</td>
                                <td data-title='User'>Frodo Gandalf</td>
                                <td data-title='Discount'><span class='muted'>None</span></td>
                                <td data-title='Transaction ID'>TX-123902119</td>
                                <td data-title='Amount'>$19.99</td>
                            </tr> 


                            <tr>
                                <td data-title='Date'>9/25/13 8:30 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>11</a></td>
                                <td data-title='Type'>Marketplace</td>
                                <td data-title='Item'>Pitch Material</td>
                                <td data-title='Brand'>AMC</td>
                                <td data-title='User'>Frodo Gandalf</td>
                                <td data-title='Discount'><span class='muted'>None</span></td>
                                <td data-title='Transaction ID'>TX-123902113</td>
                                <td data-title='Amount'>$29.99</td>
                            </tr> 


                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop