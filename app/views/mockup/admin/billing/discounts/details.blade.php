@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin discounts' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Discount Details</span>
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

                         <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Halloween Special
                        </li>


                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Overview of Halloween Special Discount
            </div><!--/.title-->

            <div class='btn-group'> 
                <a class='btn btn-default' role='button'> </i>Back to Discounts</a>
                <a class='btn btn-default' role='button' data-toggle='modal' href='#modal-edit-discount'><i class='icon-edit'> </i> Edit Discount</a>
                <a class='btn btn-default user-action-btn' role='button'><i class='icon-trash'> </i> Delete Discount</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid profile-content'>

            <div class='span6'>
                <ul class='profile-meta unstyled'>
                    <li><span class='item-title'>Name:</span>Halloween Discount</li>
                    <li><span class='item-title'>Code: </span>Pumpkins9129</li>
                    <li><span class='item-title'>Status: </span><span class='label label-large label-important'>Expired</span></li>
                    <li><span class='item-title'>Value:</span>10% Off</li>
                    <li><span class='item-title'>For:</span>Any Products</li>
                    <li><span class='item-title'>Usage: </span>3/20</li>
                    
                </ul>
            </div><!--/.span6-->

            <div class='span6'>
                <ul class='profile-meta unstyled'>
                    <li><span class='item-title'>Revenue:</span><span class='label label-large label-success'>$1322.00</label></li>
                    <li><span class='item-title'>Commission %: </span>10%</li>
                    <li><span class='item-title'>Paid Out: </span>$300.00</li>
                    <li><span class='item-title'>Tracking Code:</span><a class='btn btn-small'><i class='icon-barcode'> </i> Generate Code</a>
                    <li><span class='item-title'>Date Active:</span>9/13/2013</li>
                    <li><span class='item-title'>Expiration Date:</span>9/15/2013</li>
                    
                </ul>
            </div><!--/.span6-->

          

        </div><!--/.row-fluid profile-content-->

        
        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Discount Activity</div>
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
    </div><!--/.span12-->

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
                        <input id='discount_commission' placeholder='Enter Percentage, Ex: 10' class='input-block-level' value='10%' type='text'></input>
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