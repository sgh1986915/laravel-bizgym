@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 vision-tools'> 
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-eye-open'></i>
                    <span>Vision</span>
                    <i id="arrow-after-main" class="icon-double-angle-right"></i>
                    <span class="heading-small">Tools</span>
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
                    <div class='title'>Business Plan</div><!--/.title-->
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
                    <div class='title'>Executive Summary</div><!--/.title-->
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
                    <div class='title'>Goals Pyramid</div><!--/.title-->
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
                    <div class='title'>Tombstone Test</div><!--/.title-->
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
                    <div class='title'>Company Data Sheet</div><!--/.title-->
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

        </div><!--/.row-fluid-->
       

        <div class="row-fluid">
            <div class="span12 content">
                <h2>Items you may be interested in:</h2>
            </div><!--/.span12-->
        </div>   
        <div class="row-fluid marketplace">
            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Org Chart</div><!--/.title-->
                </div><!--/.box-header-->
                <div class="box-content">

                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                        <div class="product-price">Free</div>
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:60%;">60%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span6 stat item-rating'><i class='icon-thumbs-up'></i>75%</span>
                            <span class='span6 stat item-downloads'><i class='icon-download-alt'></i>1223</span>
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                        <div class='span12 stat item-kpi'>
                            <ul class='unstyled inline'>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Funding</a> </li>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Pitch</a> </li>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Sell</a> </li>
                            </ul>
                        </div> <!--/.item-kpi-->
                    </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Product</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Brand Strategy</div><!--/.title-->
                </div><!--/.box-header-->
                <div class="box-content">
                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                        <div class="product-price">Free</div>
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:10%;">10%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span6 stat item-rating'><i class='icon-thumbs-up'></i>75%</span>
                            <span class='span6 stat item-downloads'><i class='icon-download-alt'></i>1223</span>
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                        <div class='span12 stat item-kpi'>
                            <ul class='unstyled inline'>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Funding</a> </li>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Pitch</a> </li>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Sell</a> </li>
                            </ul>
                        </div> <!--/.item-kpi-->
                    </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Product</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Values Poster</div><!--/.title-->
                </div><!--/.box-header-->

                <div class="box-content">
                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                        <div class="product-price">Free</div>
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:0%;">0%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span6 stat item-rating'><i class='icon-thumbs-up'></i>75%</span>
                            <span class='span6 stat item-downloads'><i class='icon-download-alt'></i>1223</span>
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                        <div class='span12 stat item-kpi'>
                            <ul class='unstyled inline'>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Funding</a> </li>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Pitch</a> </li>
                                <li><i class='icon-tag'></i> <a href='tag-category'>Sell</a> </li>
                            </ul>
                        </div> <!--/.item-kpi-->
                    </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Product</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

            <div class="span3 box product">
                <div class='box-header'>
                    <div class='title'>Infographics</div><!--/.title-->
                </div><!--/.box-header-->

                <div class="box-content">

                    <a href="marketplace/business-card.html"><div class="product-image">
                        <img src='http://placehold.it/200x150'>
                        <div class="product-price">Free</div>
                    </div><!--/.product-image--></a>
                    
                    <div class='row-fluid'>
                        <div class="progress item-progress span12">
                            <div class="bar" style="width:100%;">100%</div>
                        </div><!--/.progress-->
                    </div><!--/.row-fluid-->
                    
                    <div class='item-stats'>
                        <div class='row-fluid'>
                            <span class='span6 stat item-rating'><i class='icon-thumbs-up'></i>75%</span>
                            <span class='span6 stat item-downloads'><i class='icon-download-alt'></i>1223</span>
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <div class='span12 stat item-kpi'>
                                <ul class='unstyled inline'>
                                    <li><i class='icon-tag'></i> <a href='tag-category'>Funding</a> </li>
                                    <li><i class='icon-tag'></i> <a href='tag-category'>Pitch</a> </li>
                                    <li><i class='icon-tag'></i> <a href='tag-category'>Sell</a> </li>
                                </ul>
                            </div> <!--/.item-kpi-->
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <span class='span12 stat item-author'>by Zee Designer</span>
                        </div>
                    </div><!--/.item-stats-->
                    <a href="product.html"><button class="btn btn-success btn-large btn-block btn-products view-product" type="submit" style="" name="button">View Product</button></a>
                </div><!--/.box-content-->
            </div><!--/.span3 box-->

        </div><!--/.row-fluid-->




    </div><!--/.span12-->    
</div><!--/.row-fluid #content-wrapper-->
    
@stop