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
                        <span>Subscription Details</span>
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

                         <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            134
                        </li>


                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Subscription #3235
            </div><!--/.title-->

            <div class='btn-group'> 
                <a class='btn btn-default' role='button'> </i>Back to Subscriptions</a>
                <a class='btn btn-default' role='button' data-toggle='modal' href='#modal-edit-subscription'><i class='icon-edit'> </i> Edit Subscription</a>
                <a class='btn btn-default' role='button' data-toggle='modal' href='#modal-transfer-subscription-payment'><i class='icon-credit-card'> </i>Transfer Payment Responsiblity</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid profile-content'>

            <div class='span6'>
                <ul class='profile-meta unstyled'>
                    <li><span class='item-title'>Wallet:</span><a href='../../users/3/'>James Franco</a></li>
                    <li><span class='item-title'>Company:</span>Home Depot</li>
                    <li><span class='item-title'>Status:</span><span class='label label-large label-success'>Active</span></li>
                    <li><span class='item-title'>Last Login:</span>5 Days ago</li>
                    <li><span class='item-title'>Total Logins:</span>23</li>
                    
                </ul>
            </div><!--/.span6-->

            <div class='span6'>
                <ul class='profile-meta unstyled'>
                    <li><span class='item-title'>Revenue:</span><span class='label label-large label-success'>$1322.00</label></li>
                    <li><span class='item-title'>Last Payment:</span>9/19/13</li>
                    <li><span class='item-title'>Transfered:</span>0 Times</li>
                    <li><span class='item-title'>Date Started:</span>9/13/2013</li>
                    <li><span class='item-title'>Expiration Date:</span>9/15/2013</li>
                    
                </ul>
            </div><!--/.span6-->

          

        </div><!--/.row-fluid profile-content-->

        
        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Subscription Activity</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Activity
                            </th>
                            <th>
                                Description
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td data-title='Date'>9/11/13 6:30 AM</td>
                                <td data-title='Activity'>Status Change</td>
                                <td data-title='Description'>User James Bob un-paused subscription</td>
                            </tr> 

                            <tr>
                                <td data-title='Date'>9/10/13 3:30 AM</td>
                                <td data-title='Activity'>Status Change</td>
                                <td data-title='Description'>User James Bob paused subscription</td>
                            </tr> 

                            <tr>
                                <td data-title='Date'>9/9/13 3:30 AM</td>
                                <td data-title='Activity'>Payment</td>
                                <td data-title='Description'>User James Bob made <a href='link-to-invoice'>a payment for $15.00</a></td>
                            </tr> 

                            <tr>
                                <td data-title='Date'>8/9/13 2:30 AM</td>
                                <td data-title='Activity'>Payment</td>
                                <td data-title='Description'>User James Bob made <a href='link-to-invoice'>a payment for $15.00</a></td>
                            </tr> 


                            <tr>
                                <td data-title='Date'>7/9/13 3:30 AM</td>
                                <td data-title='Activity'>Transfer</td>
                                <td data-title='Description'>Jimmy Caan transferred subsction to James Bob</td>
                            </tr> 

                            <tr>
                                <td data-title='Date'>6/9/13 3:30 AM</td>
                                <td data-title='Activity'>Company Linked</td>
                                <td data-title='Description'>Jimmy Caan linked Company Sega to this plan</td>
                            </tr> 

                            <tr>
                                <td data-title='Date'>6/5/13 3:30 AM</td>
                                <td data-title='Activity'>Plan Started</td>
                                <td data-title='Description'>Jimmy Caan purchased this plan. <a href='link-to-invoice'>Payment made for $15.00</a></td>
                            </tr> 

                                             

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->                    
    </div><!--/.span12-->

    <div class='modal hide fade' id='modal-edit-subscription' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Subscription</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                
                <div class='control-group'>
                    <label class='control-label'>Plan</label><p class='help-block'>Which plan does this subscription use?</p>
                    <div class='controls'>
                        <select id="subscription_plan" class="select input-block-level" name="duration">
                            <!--list available plans -->
                            <option value=''>Starter</option>
                            <option value=''>Pro</option>
                            <option value=''>Enterprise</option>
                            
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>
                 <div class='control-group'>
                    <label class='control-label'>Status</label><p class='help-block'>Change the status of this plan</p>
                    <div class='controls'>
                        <select id="subscription_status" class="select input-block-level" name="duration">
                            <option selected="selected" value='Active'>Active</option>
                            <option value='Active'>Paused</option>
                            <option value='Active'>Canceled</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Expiration Date</label><p class='help-block'>Modify this plan's expiration date</p>
                    <div class='controls'>
                        <div class='datepicker input-append' id='datepicker'>
                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' value='2013/09/01' type='text'>
                            <span class='add-on'>
                              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                            </span>
                        </div><!--/.date-picker-->
                    </div><!--/.controls-->
                </div><!--/.control-group-->


            </form>
            
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Save Changes</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->


    <div class='modal hide fade' id='modal-transfer-subscription-payment' role='dialog' tabindex='-1'>
-        <div class='modal-header red-background'>
-            <button class='close' data-dismiss='modal' type='button'>&times;</button>
-            <h3>Transfer Subscription</h3>
-        </div><!--/.modal-header-->
-        <div class='modal-body'>
-            <form class='span8'>
-
-                <h4>Are you sure you want to do this?</h4>
-                <p>This will transfer the wallet, or payment responsiblities to another user within the attached Company. The change will not go into effect until the new Wallet holder acknonwledges the change and creates a payment profile.</p>
-
-                <hr class='normal'>
-                
-                <div class='control-group'>
-                    <label class='control-label'>New Subscription Holder</label><p class='help-block'>Who should take over this plan?</p>
-                    <div class='controls'>
-                        <input type="text" class="input-block-level" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Abe Lincoln", "Bob Jones", "Cara Carne", "Dean Waltz", "Emily Bowles"]'>
-                    </div><!--/.controls-->
-                </div><!--/.control-group-->
-
-            </form>
-            
-        </div><!--/.modal-body-->
-
-        <div class='modal-footer'>
-            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
-             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-exchange'> </i> Transfer Subscription</button>
-        </div><!--/.modal-footer-->
-    </div><!--/.modal hide fade--> 

</div><!--/.row-fluid #content-wrapper-->
    
@stop