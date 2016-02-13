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
                        <span>Manage Your Subscriptions</span>
                    </h3>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    
                    <a class='btn btn-default'><i class='icon-list-alt'> </i>View Your Billing History</a>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid'>

            <div class='span8 user-subscriptions'>
            
                <div class='row-fluid subscription'>
                    <div class='span12 box'>
                        <div class='box-content box-padding'>
                            <div class='row-fluid'>
                                <div class='pull-left'>
                                    <div class='lead'>
                                       Pro Plan
                                        </div><!--/lead-->
                                    
                                </div><!--/.pull-left-->
                                <div class='expiration'>
                                    <span class='label label-large label-info'>Expires in 11 Days</span>
                                </div>
                                
                            </div><!--/.row-fluid-->
                            <p>Subscription linked to the company, <strong>Bob's Bee Store</strong></p>
                            <p><strong><span class='text-success'>23 of 146</span></strong> seats used.</p>
                            
                            <p>Subscription started on 1/1/13 and expires on 10/11/13</p>
                            <p><strong>You</strong> are the Responsible Payment Party for this Subscription</p>
                            <div class='subscription-options'>
                                <a class='btn btn-default btn-success'><i class='icon-bolt'> </i> Upgrade Plan</a> <a class='btn btn-default btn-info'><i class='icon-info-sign'> </i> View Usage Details</a> <a class='btn btn-primary'><i class='icon-edit'> </i> Edit Subscription</a> <a href='../company/team' class='btn btn-default btn-success'><i class='icon-group'> </i> Manage Your Team</a>
                            </div><!--/.row-fluid-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box-->
                </div><!--/.row-fluid subscription-->

                <div class='row-fluid subscription'>
                    <div class='span12 box'>
                        <div class='box-content box-padding'>
                            <div class='row-fluid'>
                                <div class='pull-left'>
                                    <div class='lead'>
                                       Enterprise Plan
                                        </div><!--/lead-->
                                    
                                </div><!--/.pull-left-->
                                <div class='pull-right expiration'>
                                    <span class='label label-large label-info'>Expires in 8 Days</span>
                                </div>
                                
                            </div><!--/.row-fluid-->
                            <p>Subscription linked to the company, <strong>Home Depot</strong></p>
                            <p><strong><span class='text-success'>23 of 146</span></strong> seats used.</p>
                            
                            <p>Subscription started on 3/1/13 and expires on 10/8/13</p>
                            <p><strong>James Bob</strong> is the Responsible Payment Party for this Subscription</p>
                            <div class='subscription-options'>
                                <a class='btn btn-default btn-success'><i class='icon-bolt'> </i> Upgrade Plan</a> <a class='btn btn-default btn-info'><i class='icon-info-sign'> </i> View Usage Details</a> <a class='btn btn-primary'><i class='icon-edit'> </i> Edit Subscription</a> <a href='../company/team' class='btn btn-default btn-success'><i class='icon-group'> </i> Manage Your Team</a>
                            </div><!--/.row-fluid-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box-->
                </div><!--/.row-fluid subscription-->

            </div><!--/.span8 user-subscriptions-->

            <div class='span4'>
                <div class='row-fluid'>
                    <div class='span12 box'>
                    <div class='box-content box-padding'>
                        <div class="lead">
                            <i class="icon-credit-card text-success"></i>
                            Payment Profile
                        </div><!--/.lead-->
                        <div class='control-group'>
                            <p class='help-block'>You have linked the PayPal address, <strong>hello@bobsmith.com</strong> to your BizGym account.</p>
                                <br>
                            <div class='controls'>
                                <button class="btn btn-success" type="button"><i class='icon-cog'> </i>Update Payment Profile</button>
                            </div><!--/.controls-->

                        </div><!--/.control-group-->
                    </div><!--/.box-content-->
                </div><!--/.span4 box-->
            </div><!--/.row-fluid-->

                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-content box-padding'>
                            <div class="lead">
                                <i class="icon-bolt text-success"></i>
                                Ready for more?
                            </div><!--/.lead-->
                            <div class='control-group'>
                                <p class='help-block'>If you're looking to pickup another plan for a new company, no problem! Just head on over to our plans and select the one that works for your needs. </p>
                                    <br>
                                <div class='controls'>
                                    <button class="btn btn-success" type="button"><i class='icon-shopping-cart'> </i>View BizGym Plans</button>
                                </div><!--/.controls-->

                            </div><!--/.control-group-->
                        </div><!--/.box-content-->
                    </div><!--/.span4 box-->
                </div><!--/.row-fluid-->
            </div><!--/span4-->

            

        </div><!--/.row-fluid-->
               
        

    </div><!--/.span12-->

</div><!--/.row-fluid #content-wrapper-->

@stop


@section('inline_scripts')
@parent
$('.leave-company-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure you want to leave this company?')
    
})

$('.remove-photo-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure you want to delete this photo?')
    
})
@stop