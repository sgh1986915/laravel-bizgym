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
                        <span>Outstanding Transactions</span>
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
                            Outstanding
                        </li>

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Manage and View your System's Outstanding Transactions
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default'>Back to Billing</a>
            </div><!--/.btn-group-->
        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Transaction History</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Order</th>
                            <th>Date Due</th>
                            <th>Type</th>
                            <th>Item</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Order ID'><a href='billing/invoice'>12</a></td>
                                <td data-title='Date'>9/26/13</td>
                                <td data-title='Type'>Recurring</td>
                                <td data-title='Item'>Pro Plan</td>
                                <td data-title='User'>Bob Jones</td>
                                <td data-title='Status'><span class='label label-important has-popover' data-content='Canceled by Admin user Steve Bob on 9/3/13 at 9:03 AM' data-placement='top' data-title='Details'>Cancelled</span></td>
                                <td data-title='Amount'>$93.99</td>
                                <td data-title='Action'><a class='btn btn-mini' href='#modal-change-status' role='button' data-toggle='modal'><i class='icon-cog'> </i> Change Status</a></td>
                            </tr>
                            <tr>
                                <td data-title='Order ID'><a href='billing/invoice'>13</a></td>
                                <td data-title='Date'>9/26/13</td>
                                <td data-title='Type'>Recurring</td>
                                <td data-title='Item'>Pro Plan</td>
                                <td data-title='User'>Bob Jones</td>
                                <td data-title='Status'><span class='label label-warning has-popover' data-content='Paypal transaction failed on 9/26/2013 at 8:00 AM' data-placement='top' data-title='Details'>Past Due</span></td>
                                <td data-title='Amount'>$93.99</td>
                                <td data-title='Action'><a class='btn btn-mini' href='#modal-change-status' role='button' data-toggle='modal'><i class='icon-cog'> </i> Change Status</a></td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                    

        <div class='modal hide fade' id='modal-change-status' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Change Status</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    
                    <div class='control-group'>
                        <label class='control-label'>Transaction Status</label><p class='help-block'>What should you update the status of this transaction to?</p>
                        <div class='controls'>
                            <select id="transaction_status" class="select input-block-level" name="duration">
                                <option value=''>Past Due</option>
                                <option selected value=''>Paid Manually</option>
                                <option value=''>Cancel</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Note</label><p class='help-block'>Add a note related to the status of this message</p>
                        <div class='controls'>
                            <textarea id='status_note' placeholder='Ex: Paid via check on 9/20/13' class='input-block-level' rows='3' type='text'></textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>                   

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Update Status</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->
  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop