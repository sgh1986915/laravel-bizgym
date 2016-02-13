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
                        <span>Manage Plans</span>
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
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Manage and Create plans for your users
            </div>
            <div class='btn-group'>
                <a class='btn btn-default'><i class='icon-list'> </i> Manage Features</a>
                <a class='btn btn-default' role='button'>Return to Billing</a>
            </div><!--/.btn-group-->      

        </div><!--/.row-fluid section-header-->
        
        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header blue-background'>
                        <div class='title'><i class='icon-money'> </i> Existing Plans</div>
                        <div class='actions'>
                            <a class='btn btn-default'><i class='icon-plus'> </i> Create a Plan</a>
                        </div><!--/.actions-->
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Subscribers</th>
                            <th>Revenue</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Name'><span class='label label-default'>Starter</span></td>
                                <td data-title='Price'>$29.99</td>
                                <td data-title='Duration'>Monthly</td>
                                <td data-title='Subscribers'>123</td>
                                <td data-title='Revenue'>$1293.00</td>
                                <td data-title='Status'><span class='label label-success'>Active</td>
                                
                                <td data-title='Action'>
                                    <a class='btn btn-mini'>Details</a>
                                    <a class='btn btn-mini' role='button'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'><span class='label label-inverse'>Pro</span></td>
                                <td data-title='Price'>$59.99</td>
                                <td data-title='Duration'>Monthly</td>
                                <td data-title='Subscribers'>123</td>
                                <td data-title='Revenue'>$1293.00</td>
                                <td data-title='Status'><span class='label label-success'>Active</td>
                                
                                <td data-title='Action'>
                                    <a class='btn btn-mini'>Details</a>
                                    <a class='btn btn-mini' role='button'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'><span class='label label-info'>Enterprise</span></td>
                                <td data-title='Price'>$2229.99</td>
                                <td data-title='Duration'>Yearly</td>
                                <td data-title='Subscribers'>23</td>
                                <td data-title='Revenue'>$22593.00</td>
                                <td data-title='Status'><span class='label label-default'>In-Active</td>
                                
                                <td data-title='Action'>
                                    <a class='btn btn-mini'>Details</a>
                                    <a class='btn btn-mini' role='button'><i class='icon-edit'> </i> Edit</a>
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