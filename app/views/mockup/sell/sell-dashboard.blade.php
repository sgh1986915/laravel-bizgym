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
                                   Sell Your Vision.
                                </div>
                             <div class='vision-intro'>
                                Use our tools to sell your products and to get the word out about your business.
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



        <div class="row-fluid marketplace">
            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Elevator Pitch</div><!--/.title-->
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
                    <div class='title'>Podium Pitch</div><!--/.title-->
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
                    <div class='title'>Roadshow Pitch</div><!--/.title-->
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
                    <div class='title'>Identity Brief</div><!--/.title-->
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