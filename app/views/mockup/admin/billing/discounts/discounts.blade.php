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
                        <span>Manage Discounts</span>
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
                            Discounts
                        </li>

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Create and manage special deals for products
            </div>
            <div class='btn-group'>
                <a class='btn btn-default' role='button' data-toggle='modal' href='#modal-new-discount'><i class='icon-plus'> </i> Create a Discount</a>
                <a class='btn btn-default' role='button'>Return to Billing</a>
            </div><!--/.btn-group-->      

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>All Discounts</div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Amount</th>
                            <th>Applied to</th>
                            <th>Usage</th>
                            <th>Sales</th>
                            <th>Commission</th>
                            <th>Status</td>
                            <th>Expires</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Name'>Spring Savings</td>
                                <td data-title='Code'>Spring1223</td>
                                <td data-title='Amount'>10%</td>
                                <td data-title='Applied To'>Global</td>
                                <td data-title='Usage'>12/155</td>
                                <td data-title='Sales Generated'>$402.00</td>
                                <td data-title='Commission'>10%</td>
                                <td data-title='Status'><span class='label label-success'>Active</span></td>
                                <td data-title='Expires'>9/19/13</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini'>Details</a>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-discount'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'>Halloween Special</td>
                                <td data-title='Code'>Pumpkins9129</td>
                                <td data-title='Amount'>$5</td>
                                <td data-title='Applied To'>Starter Plan</td>
                                <td data-title='Usage'>5/300</td>
                                <td data-title='Sales Generated'>$20.00</td>
                                <td data-title='Commission'>10%</td>
                                <td data-title='Status'><span class='label label-important'>Expired</span></td>
                                <td data-title='Expires'>9/1/13</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini'>Details</a>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-discount'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'>Weekend Sale</td>
                                <td data-title='Code'>Pumpkins9129</td>
                                <td data-title='Amount'>30%</td>
                                <td data-title='Applied To'>Pro Plan</td>
                                <td data-title='Usage'>2/155</td>
                                <td data-title='Sales Generated'>$1220.00</td>
                                <td data-title='Commission'>10%</td>
                                <td data-title='Status'><span class='label'>Not Active</span></td>
                                <td data-title='Expires'>10/1/13</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini'>Details</a>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-discount'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'></i></a>
                                </td>
                            </tr>
                                

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->

    <div class='modal hide fade' id='modal-new-discount' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Create a Discount</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this discount?</p>
                    <div class='controls'>
                        <input id='discount_title' class='input-block' placeholder='Ex: Holiday Offer'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>
                 <div class='control-group'>
                    <label class='control-label'>Type</label><p class='help-block'>Is this a percentage or fixed discount?</p>
                    <div class='controls'>
                        <select id="discount_type" class="select input-block-level" name="duration">
                            <option value='0' disabled selected style='display:none;'>Select Type</option>
                            <option value=''>Percentage</option>
                            <option value=''>Fixed Dollar Amount</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Amount</label><p class='help-block'>What is the value of this discount?</p>
                    <div class='controls'>
                        <input id='discount_value' placeholder='$500' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Applicable Products</label><p class='help-block'>What is this discount eligible for?</p>
                    <div class='controls'>
                        <select id="discount_type" class="select input-block-level" name="duration">
                            <option value='0' disabled selected style='display:none;'>Select Product</option>
                            <option value=''>Global (Anything)</option>
                            <option value=''>Starter Plan</option>
                            <option value=''>Pro Plan</option>
                            <option value=''>Enterprise Plan</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Code</label><p class='help-block'>What is the code that users must input for this plan?</p>
                    <div class='controls'>
                        <input id='discount_code' placeholder='Offer1212' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Commission</label><p class='help-block'>What percentage commission do you want to pay out on this discount?</p>
                    <div class='controls'>
                        <input id='discount_commission' placeholder='Enter Percentage, Ex: 10' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Number of Redemptions</label><p class='help-block'>How many times can this discount be used in total?</p>
                    <div class='controls'>
                        <input id='discount_redemptions' placeholder='13' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->


                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Active Date</label><p class='help-block'>When should this discount be active in the system?</p>
                    <div class='controls'>
                        <div class='datepicker input-append' id='datepicker'>
                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' type='text'>
                            <span class='add-on'>
                              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                            </span>
                        </div><!--/.date-picker-->
                    </div><!--/.controls-->
                </div><!--/.control-group-->


                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Expiration Date</label><p class='help-block'>When should this discount expire? Leave blank if the discount should not expire.</p>
                    <div class='controls'>
                        <div class='datepicker input-append' id='datepicker'>
                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' type='text'>
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
             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i>Create Discount</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-edit-discount' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Discount</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this discount?</p>
                    <div class='controls'>
                        <input id='discount_title' class='input-block' placeholder='Ex: Holiday Offer' value='Halloween Special'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>
                 <div class='control-group'>
                    <label class='control-label'>Type</label><p class='help-block'>Is this a percentage or fixed discount?</p>
                    <div class='controls'>
                        <select id="discount_type" class="select input-block-level" name="duration">
                            <option value='0' disabled selected style='display:none;'>Select Type</option>
                            <option value=''>Percentage</option>
                            <option selected value=''>Fixed Dollar Amount</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Amount</label><p class='help-block'>What is the value of this discount?</p>
                    <div class='controls'>
                        <input id='discount_value' placeholder='$500' class='input-block-level' value='5.00' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Applicable Products</label><p class='help-block'>What is this discount eligible for?</p>
                    <div class='controls'>
                        <select id="discount_type" class="select input-block-level" name="duration">
                            <option value='0' disabled selected style='display:none;'>Select Product</option>
                            <option value=''>Global (Anything)</option>
                            <option selected value=''>Starter Plan</option>
                            <option value=''>Pro Plan</option>
                            <option value=''>Enterprise Plan</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Code</label><p class='help-block'>What is the code that users must input for this plan?</p>
                    <div class='controls'>
                        <input id='discount_code' placeholder='Offer1212' class='input-block-level' value='Pumpkins9129' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Commission</label><p class='help-block'>What percentage commission do you want to pay out on this discount?</p>
                    <div class='controls'>
                        <input id='discount_commission' placeholder='Enter Percentage, Ex: 10' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>


                <div class='control-group'>
                    <label class='control-label'>Number of Redemptions</label><p class='help-block'>How many times can this discount be used in total?</p>
                    <div class='controls'>
                        <input id='discount_redemptions' placeholder='13' class='input-block-level' value='6' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->


                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Active Date</label><p class='help-block'>When should this discount be active in the system?</p>
                    <div class='controls'>
                        <div class='datepicker input-append' id='datepicker'>
                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' value='2013/08/01' type='text'>
                            <span class='add-on'>
                              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                            </span>
                        </div><!--/.date-picker-->
                    </div><!--/.controls-->
                </div><!--/.control-group-->


                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Expiration Date</label><p class='help-block'>When should this discount expire? Leave blank if the discount should not expire.</p>
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



</div><!--/.row-fluid #content-wrapper-->
    
@stop

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure?')
    
})
@stop