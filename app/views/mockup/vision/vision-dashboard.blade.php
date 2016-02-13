@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 vision-dashboard'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-dashboard'></i>
                        <span>Vision Dashboard</span>
                    </h1>
                </div> <!--/.span9-->
                <div class="span3 dash-cta">
                    <div class='btn-group'>
                        <button class="btn btn-success btn-default" id="jumpstart-business" name="button">
                        <h4>Jumpstart Your Business</h4>
                        </h5>Visit the BizGym Marketplace</h5>
                         </button>
                    </div> <!--/.btn-group-->
                </div> <!--/.span3 cta-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid'>
                <div class="span12 box">
                    <div class='box-header'>
                        <div class='title'>
                            Welcome, Bob!
                        </div><!--/.title-->
                        <div class='actions'>
                            <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                            </a>
                            <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                            </a>
                        </div><!--/.actions-->
                    </div><!--/.box-header-->
                    <div class="box-content">
                        <div class='row-fluid'>
                            <div class='span7'>

                                <div class='vision-intro-title'>
                                    Plan & Create.
                                </div>
                             <div class='vision-intro'>
                                Craft your unique vision and use our business planning tools to jumpstart your business.
                            </div><!--/.vision-intro-->   
                                
                            </div><!--/.span7-->
                            <div class='span5'>
                                <div id='video-container'>
                                    <iframe width="560" height="315" src="http://www.youtube.com/embed/x0kc6mPVmos" frameborder="0" allowfullscreen></iframe>
                                </div><!--/.video-container-->
                            </div><!--/.span5-->
                        </div><!--/.row-fluid-->
                    </div><!--/.box-content-->
                </div><!--/.span12 box-->
              
                
        </div><!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <div class='row-fluid'>
                        <div class='vision-status-title'>
                            Your vision is 60% complete.
                        </div><!--/.vision-status-title-->
                    </div><!--/.row-fluid-->
                    <div class='row-fluid'>

                        <div class="span8 section-progress">
                            <ul class="unstyled">
                                
                                <li><span class="section-title">Mission</span><span class="completed text-primary">23/95</span>
                                    <div class="progress progresss-warning">
                                        <div class="bar" style="width:30%;">30%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Company Overview</span><span class="completed text-success">96/96</span>
                                    <div class="progress progress-success">
                                        <div class="bar" style="width:100%;">100%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Your Market</span><span class="completed text-primary">50/100</span>
                                    <div class="progress">
                                        <div class="bar" style="width:50%;">50%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Goals</span><span class="completed text-warning">40/100</span>
                                    <div class="progress progress-warning">
                                        <div class="bar" style="width:40%;">40%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Your Offerings</span><span class="completed text-error">10/100</span>
                                    <div class="progress progress-danger">
                                        <div class="bar" style="width:10%;">10%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Customers</span><span class="completed text-primary">60/100</span>
                                    <div class="progress">
                                        <div class="bar" style="width:60%;">60%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Competition</span><span class="completed text-success">100/100</span>
                                    <div class="progress progress-success">
                                        <div class="bar" style="width:100%;">100%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Marketing</span><span class="completed text-primary">70/100</span>
                                    <div class="progress">
                                        <div class="bar" style="width:70%;">70%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Operations</span><span class="completed text-primary">60/100</span>
                                    <div class="progress">
                                        <div class="bar" style="width:60%;">60%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Management</span><span class="completed text-warning">35/100</span>
                                    <div class="progress progress-warning">
                                        <div class="bar" style="width:35%;">35%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Funding</span><span class="completed text-primary">6/10</span>
                                    <div class="progress">
                                        <div class="bar" style="width:60%;">60%</div>
                                    </div> <!--/.progress-->
                                </li>

                                <li><span class="section-title">Financial Projections</span><span class="completed text-error">0/100</span>
                                    <div class="progress progress-danger">
                                        <div class="bar" style="width:0%;">0%</div>
                                    </div> <!--/.progress-->
                                </li>
                            </ul>
                        </div><!--/.span8 section-progress-->

                        <div class='span4 motivational-content'>


                                <blockquote class="vision-quote">
                                    <p>The starting point of all achievement is DESIRE. Keep this constantly in mind. Weak desire brings weak results, just as a small fire makes a small amount of heat.”</p>
                                    <small>
                                        Napoleon Hill,
                                        <cite title="Source Title">American Author</cite>
                                    </small>
                                </blockquote>


                                <blockquote class="vision-quote">
                                    <p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</p>
                                    <small>
                                        Steve Jobs,
                                        <cite title="Source Title">You know who he is</cite>
                                    </small>
                                </blockquote>


                               <div class='vision-peptalk'>
                                    <p>Complete a section,<br>receive a badge.</p>
                                    <br>
                                    <p>Complete your vision,<br>prepare for success.</p>
                                </div><!--/.vision-peptalk-->


                                <div class='peptalk-icon'>
                                    <i class='icon-rocket'></i>
                                </div><!--/.peptalk-icon-->


                        </div><!--/.span4-->

                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->


        <div class="row-fluid market-header">
            <div class="span6"><h1>Available Tools</h1>
            </div><!--/.span9-->
            <div class="span3">
                <select class='select2 market-filter input-block-level'>
                    <option value='0' disabled selected style='display:none;'>Sort By</option>
                    <option value='1'>Most Recent</option>
                    <option value='2'>Top Rated</option>
                    <option value='3'>Most Downloads</option>
                    <option value='4'>Price: Highest to Lowest</option>
                    <option value='5'>Price: Lowest to Highest</option>

                </select>
            </div><!--/.span3-->
            <div class="span3">
                <select class='select2 market-filter input-block-level'>
                    <option value='0' disabled selected style='display:none;'>Filter By</option>
                    <option value='1'>Price</option>
                    <option value='2'>Name</option>
                    <option value='3'>Industry</option>
                </select>
            </div><!--/.span3-->
        </div><!--/.row-fluid-->


        <div class="row-fluid marketplace">
            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Business Card</div><!--/.title-->
                </div><!--/.box-header-->
                <div class="box-content">

                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:60%;">60%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Tool</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Stationary</div><!--/.title-->
                </div><!--/.box-header-->
                <div class="box-content">
                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:10%;">10%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Tool</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Brochure</div><!--/.title-->
                </div><!--/.box-header-->

                <div class="box-content">
                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:0%;">0%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Tool</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Store Plan</div><!--/.title-->
                </div><!--/.box-header-->

                <div class="box-content">

                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                       
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:100%;">100%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                       
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Tool</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->
        </div><!--/.row-fluid-->
       




    </div><!--/.span12-->    
</div><!--/.row-fluid #content-wrapper-->
    
@stop