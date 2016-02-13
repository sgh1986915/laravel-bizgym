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
                        <span>Edit Your Subscription</span>
                    </h3>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <a class='btn btn-default'><i class='icon-barcode'> </i> Return to Subscription Details</a>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid edit-subscription'>
            <div class='span8 box'>
                <div class='box-content box-double-padding'>
                    <form class='form validate-form' novalidate='novalidate'>
                    <div class='row-fluid'>
                
                        
                        <div class='control-group'>
                            
                            <div class="lead">Company</div><!--/.lead-->
                            <div class='controls'>
                                <strong>Bob's Bee Store</strong>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->


                        <hr class='normal'></hr>

                        <div class='control-group'>
                         <div class="lead">Current Plan</div><!--/.lead-->
                            <div class='controls'>
                                <span class='label label-large label-inverse'>Pro Plan</span>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->



                        <div class='control-group'>
                            <div class='controls'>
                                <label class='checkbox'>
                                    <input data-target='#change-plan' data-toggle='collapse' data-rule-required='true' id='changepayment' type='checkbox' value='option1'>
                                        Change Plan?
                                </label>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                        
                        <div class='collapse' id='change-plan'>
                            <div class='control-group shift-down'>
                                <label class='control-label'>Select a Plan to upgrade or downgrade to.</label><p class='help-block'>This change will only take place after the payment goes through, if you are choosing to upgrade.</p>
                                <div class='controls'>
                                    <select class='input-xlarge' id='subscription_status'>
                                        <option value='0'>Starter Plan - $50 a month</option>
                                        <option value='1'>Pro Plan - $200 a month </option>
                                        <option value='1'>Enterprise Plan - $500 a month</option>
                                    </select>
                                </div><!--/.controls-->
                            </div><!--/.control group-->
                        </div> <!--/.collapse-->

                        <hr class='normal'>

                        <div class='control-group'>
                            <div class="lead">Responsible Payment Party</div><!--/.lead-->
                            <div class='controls'>
                                <strong>Jimmy Tudeski</strong>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->


                        <div class='control-group'>
                            <div class='controls'>
                                <label class='checkbox'>
                                    <input data-target='#change-payment' data-toggle='collapse' data-rule-required='true' id='changepayment' type='checkbox' value='option1'>
                                        Transfer Payment Responsiblity to another User?
                                </label>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                        
                        <div class='collapse' id='change-payment'>
                            <div class='control-group shift-down'>
                                <label class='control-label'>User Responsible for Payment</label><p class='help-block'>This change will only take place after the new user accepts the responsility, and completes a payment profile.</p>
                                <div class='controls'>
                                    <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Abe Lincoln", "Bob Jones", "Cara Carne", "Dean Waltz", "Emily Bowles"]'>
                                </div><!--/.controls-->
                            </div><!--/.control group-->
                        </div> <!--/.collapse-->

                        <hr class='normal'>

                        <div class='control-group'>
                            <div class="lead">Subscription Status</div><!--/.lead-->
                            
                            <div class='controls'>
                                <span class='label label-large label-success'> Active </span>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <div class='controls'>
                                <label class='checkbox'>
                                    <input data-target='#change-status' data-toggle='collapse' data-rule-required='true' id='changepayment' type='checkbox' value='option1'>
                                        Change Status?
                                </label>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                        
                        <div class='collapse' id='change-status'>
                            <div class='control-group shift-down'>
                                <label class='control-label'>Change the status of your plan.</label><p class='help-block'>You may pause your plan for up to three months without losing all data associated with the projects under this plan.</p>
                                <div class='controls'>
                                    <label class='radio'>
                                        <input type='radio' value=''>
                                        Pause for One Month
                                    </label>
                                    <label class='radio'>
                                        <input type='radio' value=''>
                                        Pause for Two Months
                                    </label>
                                    <label class='radio'>
                                        <input type='radio' value=''>
                                        Pause for Three Months
                                    </label>
                                </div><!--/.controls-->
                            </div><!--/.control group-->
                        </div> <!--/.collapse-->




                        <hr class='normal'>

                        <div class='control-group'>
                            <label class='control-label'>Cancel Subscription</label>
                            <div class='controls'>
                                <label class='checkbox'>
                                    <input data-target='#cancel-subscription' data-toggle='collapse' data-rule-required='true' id='cancel_subscription' type='checkbox' value='option1'>
                                        Do you really want to cancel your subscription? This is not reversible.
                                </label>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='collapse' id='cancel-subscription'>
                            <div class='control-group shift-down'>
                                <div class='controls'>
                                    <a class='btn btn-default btn-danger'> <i class='icon-remove'> </i> Yes, Cancel Subscription </a>
                                </div><!--/.controls-->
                            </div><!--/.control group-->
                        </div> <!--/.collapse-->
                        

                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <a class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Go Back
                                </a>

                                <a class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Save All Changes
                                </a>
                            </div>
                        </div><!--/.form-actions-->

                        </form>

                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span 8 box-->

            <div class='span4'>

                <div class='row-fluid shift-up'>
                    <div class="span12 box">
                        <div class='box-header'>
                           <i class='icon-bar-chart'> </i> Current Stats
                        </div><!--/.box-header-->
                        <div class="box-content box-statistic">
                            <h3 class="title text-success">133/200</h3>
                            <small>Seats Used</small>
                            <div class="text-success icon-user align-right"></div>
                        </div> <!--/.box-content-->

                        <div class="box-content box-statistic">
                            <h3 class="title text-info">93 Days</h3>
                            <small>Until Expiration</small>
                            <div class="text-info icon-calendar align-right"></div>
                        </div> <!--/.box-content-->
                    </div><!--/.span12-->
                </div><!--/.row-fluid-->

                            
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-header'>
                            <div class='title'><i class='icon-gift'> </i> Available Plans</div>
                        </div><!--/.box-header-->
                        <div class='box-content'>
                            <div class='accordion accordion-green' id='accordion2' style='margin-bottom:0;'>
                                <div class='accordion-group'>
                                    <div class='accordion-heading'>
                                        <a class='accordion-toggle' data-parent='#accordion2' data-toggle='collapse' href='#collapseOne-accordion2'>
                                            Starter Plan
                                        </a>
                                    </div>
                                    <div class='accordion-body collapse' id='collapseOne-accordion2'>
                                        <div class='accordion-inner'>
                                            Perfect for small startups, this plan allows for 100 users and gives weekly reports. If you're a medium sized business, you may want to look at other options. 
                                        </div>
                                    </div>
                                </div>
                                <div class='accordion-group'>
                                    <div class='accordion-heading'>
                                        <a class='accordion-toggle' data-parent='#accordion2' data-toggle='collapse' href='#collapseTwo-accordion2'>
                                            Pro Plan
                                        </a>
                                    </div>
                                    <div class='accordion-body collapse' id='collapseTwo-accordion2'>
                                        <div class='accordion-inner'>
                                            Perfect for small startups, this plan allows for 100 users and gives weekly reports. If you're a medium sized business, you may want to look at other options. 
                                        </div>
                                    </div>
                                </div>
                                <div class='accordion-group'>
                                    <div class='accordion-heading'>
                                        <a class='accordion-toggle' data-parent='#accordion2' data-toggle='collapse' href='#collapseThree-accordion2'>
                                            Enterprise Plan
                                        </a>
                                    </div>
                                    <div class='accordion-body collapse' id='collapseThree-accordion2'>
                                        <div class='accordion-inner'>
                                            Perfect for small startups, this plan allows for 100 users and gives weekly reports. If you're a medium sized business, you may want to look at other options. 
                                        </div>
                                    </div><!--/.accordion body collapse-->
                                </div>
                            </div>
                        </div><!--/.box-content-->
                    </div><!--/.span12 box-->
                </div><!--/.row-fluid-->

            </div><!--/.span4-->
        </div><!--/.row-fluid-->


        
               
        

    </div><!--/.span12-->

</div><!--/.row-fluid #content-wrapper-->

@stop