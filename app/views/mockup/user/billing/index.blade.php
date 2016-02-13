@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')



<div class='row-fluid user-edit' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Billing History</span>
                    </h3>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <a href='../user/subscriptions'class='btn btn-default'><i class='icon-barcode'> </i> View Your Subscriptions</a>
                    <a class='btn btn-default'><i class='icon-credit-card'> </i> Update your Payment Profile</a>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header green-background'>
                        <div class='title'>Showing All Transactions</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Order</th>
                            <th>Item</th>
                            <th>Company</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Date'>9/26/13 9:53 am</td>
                                <td data-title='Order ID'><a href='billing/invoice'>12</a></td>
                                <td data-title='Item'>Pro Plan</td>
                                <td data-title='Company'>Home Depot</td>
                                <td data-title='Amount'>$93.99</td>
                                <td data-title='Action'><a class='btn btn-mini'><i class='icon-list'> </i> View Invoice</a></td>
                            </tr>
                      

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop