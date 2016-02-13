@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid marketplace' id='content-wrapper'>
  
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span12">
                    <h1>
                        <i class='icon-shopping-cart'></i>
                        <span>Marketplace</span>

                        <span class='heading-small pull-right'>
                            Tools to Jumpstart <span class='text-italic'>Your</span> Business
                        </span>
                    </h1>
                </div><!--/.span12-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    

    <div class="row-fluid market-header">
        <div class="span6"><h1>Today's Featured Item</h1>
        </div><!--/.span9-->
        
        <div class="span3 pull-right">
            <select class='select2 market-filter input-block-level'>
                <option value='0' disabled selected style='display:none;'>Sort Features by KPI</option>
                <option value='1'>Funding</option>
                <option value='2'>Sell</option>
                <option value='3'>Graphic Design</option>
            </select>
        </div><!--/.span3-->
    </div><!--/.row-fluid-->
     
    <div class="row-fluid featured-item">
        <div class="span12 box">     
           <div class='box-content'>
                <div class='row-fluid'>
                    <div class='span8'>
                        <div class='row-fluid'>
                            <span class='item-name'>Top Pitch</span>
                            <span class='featured'>Featured in <a href='funding'>Funding</a></span>
                            <span class='price'>$ 99</span>
                        </div><!--/.row-fluid-->
                        <div class='row-fluid description'>
                            <p>Written to persuade just about anyone to talk to you. This pitch is for restaurant owners who mean business. Restuarant owenrs have found themeselves on the Food Network as a result of this pitch.</p>
                        </div><!--/.row-fluid description-->

                        <div class='row-fluid'>
                            <div class='span8'>
                                <div class="progress item-progress span12">
                                <div class="bar" style="width:60%;">60% of Data Filled In</div>
                            </div>
                            </div><!--/.span8-->
                        </div><!--/.row-fluid-->
                        <div class='row-fluid shift-down'>
                            
                            <div class='item-stats'>
                                <a class='btn btn-default'><i class='icon-thumbs-up'></i>75%</a>
                                <a class='btn btn-default'><i class='icon-download-alt'></i>1223</a>
                                <div class='btn btn-default item-kpi'>
                                    <ul class='unstyled inline'>
                                        <li><i class='icon-tag'></i> <a href='tag-category'>Funding</a> </li>
                                        <li><i class='icon-tag'></i> <a href='tag-category'>Pitch</a> </li>
                                        <li><i class='icon-tag'></i> <a href='tag-category'>Sell</a> </li>
                                    </ul>
                                </div>
                                <a class='btn btn-default'>by Zee Designer</a>
                            </div><!--/.item-stats-->
                            
                        </div><!--/.row-fluid-->
                        <div class='row-fluid'>
                            <div class='span6'>
                                <a class='btn btn-block btn-large btn-success' id='view-item'>View Details</a>
                            </div><!--/.span6-->
                        </div><!--/.row-fluid-->
                    </div><!--/.span8-->
                    <div class='span4 item-image'>
                        <img src='http://placehold.it/300x300'>
                    </div><!--/.span4-->
                </div><!--/.box-content-->
           </div><!--/.box-contnet-->
        </div><!--/.span 12-->
    </div>

       
    <div class="row-fluid market-header">
        <div class="span6"><h1>Showing Most Recent</h1>
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
                  

    <div class="row-fluid">
        <div class="span3 box product">
            <div class='box-header'>
                <div class='title'>Business Card</div><!--/.title-->
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
                <div class='title'>Stationary</div><!--/.title-->
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
                <div class='title'>Brochure</div><!--/.title-->
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
                <div class='title'>Store Plan</div><!--/.title-->
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
</div><!--/.row-fluid #content-wrapper-->


@stop