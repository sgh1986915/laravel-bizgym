@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin billing' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Recent Billing</span>
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
            <div class='title'>
               Viewing Invoice
            </div><!--/.title-->

            <div class='btn-group'> 
                <a class='btn btn-default' role='button'> Return to Billing</a>
            </div><!--/.btn-group-->
        </div><!--/.row-fluid section-header-->


		<div class='row-fluid invoice'>
		    <div class='span12 box'>
		        <div class='box-content box-double-padding'>
		            <div class='row-fluid'>
		                <div class='invoice-header'>
		                    <div class='invoice-title'>
		                        BizGym
		                        
		                    </div>
		                    <div class='invoice-number'>
		                        
		                        <span class='invoice-name'>Invoice</span>
		                        <span class='invoice-no'>#001</span>
		                        <span class='label label-success paid-status'><i class='icon-ok'> </i> Paid</span>

		                    </div>
		                </div>
		            </div>
		            <div class='row-fluid'>
		                <div class='span4 seller'>
		                    <div class='lead text-contrast'>From</div>
		                    <i class='icon-globe'></i>
		                    <address>
		                        <strong>BizGym</strong>
		                        <br>
		                        Long street 123
		                        <br>
		                        Some city
		                        <br>
		                        Country
		                        <br>
		                        <br>
		                        <small><a href="mailto:info@bizgym.com">info@bizgym.com</a></small>
		                        <br>
		                        <small>(101) 123456-111</small>
		                    </address>
		                </div>
		                <div class='span4 buyer'>
		                    <div class='lead text-contrast'>To</div>
		                    <i class='icon-globe'></i>
		                    <address>
		                        <strong>Doe Jane</strong>
		                        <br>
		                        Short street 456
		                        <br>
		                        Some village
		                        <br>
		                        Country
		                        <br>
		                        <br>
		                        <small><a href="mailto:jane@doe.com">jane@doe.com</a></small>
		                        <br>
		                        <small>(101) 123456-111</small>
		                    </address>
		                </div>
		                <div class='span4 info'>
		                    <div class='lead muted'>Info</div>
		                    
		                    Invoice date:
		                    <strong>12/09/2013</strong> at 9:53 AM
		                    <br>
		                    Paid Date:
		                    <strong>12/09/2013</strong> at 10:00 AM
		                    <br>
		                    Transaction ID:
		                    <strong>TR-91290309</strong>
		                </div>
		            </div>
		            <div class='row-fluid'>
		                <div class='span12'>
	                        <table class='table table-striped table-hover table-bordered'>
	                            <thead>
	                            <tr>
	                                <th>Code</th>
	                                <th>Item</th>
	                                <th>
	                                    <div class='text-center'>Qty</div>
	                                </th>
	                                <th>
	                                    <div class='text-right'>Price</div>
	                                </th>
	                                <th>
	                                    <div class='text-right'>Price total</div>
	                                </th>
	                            </tr>
	                            </thead>
	                            <tbody>
	                            <tr>
	                                <td>A1</td>
	                                <td>Pro Subscription, Non-Recurring</td>
	                                <td>
	                                    <div class='text-center'>1</div>
	                                </td>
	                                <td>
	                                    <div class='text-right'>$39.00</div>
	                                </td>
	                                <td>
	                                    <div class='text-right'>$39.00</div>
	                                </td>
	                            </tr>
	                            
	                            </tbody>
	                        </table>
		                </div><!--/.span12-->
		            </div><!--/.row-fluid-->

		            <div class='row-fluid'>
		            	<div class='span12'>
				            <div class='text-right discounts'>
				                Discounts: <span class='muted'>None</span>
				            </div>
				        </div><!--/.span12-->
			        </div><!--/.row-fluid-->

		            <hr class='hr-normal'>

		            <div class='row-fluid'>
		                <div class='span12'>
		                    <div class='text-right text-contrast subtotal'>
		                        Total $39.00
		                    </div>
		                </div>
		            </div>
		            <div class='row-fluid'>
		                <div class='span12'>
		                    <div class='well comment'>
		                        Thanks for joining BizGym! <i class='icon-smile'></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> <!--/.row-fluid invoice-->

	</div> <!--/.span12-->
</div> <!--/.row-fluid content-container-->




@stop