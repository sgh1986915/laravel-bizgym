@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')



<div class='row-fluid marketplace single-product' id='content-wrapper'>
  
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span9">
                    <h1 class='pull-left'>
                    <i class='icon-shopping-cart'></i>
                    <span>Marketplace</span>
                    <i id="arrow-after-main" class="icon-double-angle-right"></i>
                    <span class="heading-small">Business Plan</span>
                    </h1>
                </div> <!--/.span9 -->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->
        <div class="row-fluid">
            <div class="span8 box">     
                <div class="row-fluid box-content">
                    <div class="span12">
                        
                        <div class="row-fluid item-header">
                            <div class='item-title'>Business Plan</div><!--/.title-->
                            <span class="item-price">Free</span>
                        </div><!--/.row-fluid-->

                        <div class="row-fluid item-details">
                            <div class='product-images'>
                                <div class="main-image">
                                    <a href="#" rel="image1" data-trigger="hover"><img src="http://placehold.it/245x245&text=preview" alt="Fff&text=preview"></a>
                                </div><!--/.span3-->
                                <div class='second-images'>
                                    <div class='row-fluid'>
                                        <a href='#' rel='image2' data-trigger="hover"><img src="http://placehold.it/75x&75text=preview" alt="Fff&text=preview"></a>
                                    </div><!--/.row-fluid-->
                                    <div class='row-fluid'>   
                                        <a href='#' rel='image3' data-trigger="hover"><img src="http://placehold.it/75x75&text=preview" alt="Fff&text=preview"></a>
                                    </div><!--/.row-fluid-->
                                    <div class='row-fluid'>
                                        <a href='#' rel='image4' data-trigger="hover"><img src="http://placehold.it/75x75&text=preview" alt="Fff&text=preview"></a>
                                    </div><!--/.row-fluid-->
                                </div><!--/.span1-->
                            </div><!--/.product-images-->
                                <div class='item-description'>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div><!--/.item-description-->  

                        </div> <!--/.row-fluid-->

                        

                        

                        
                        <div class="row-fluid product-action">
                            <div class="progress item-progress span6">
                                <div class="bar" style="width:80%;">80%</div>
                            </div>
                            <div class="span6">
                                <a href='business-card-data.html' class="btn btn-success btn-block btn-large" type="submit" name="button">Purchase this!</a>
                            </div><!--/.span6-->
                        </div><!--/.row-fluid product-action-->



                    </div><!--/.span12-->
                </div><!--/.row-fluid box-content-->
            </div><!--/.span8 box-->


            <div class="span4">
                
                <div class="row-fluid">
                    <div class="box-content box-product-info">
                        <h3 class="title text-error">191</h3>
                        <small>Downloads</small>
                        <div class="text-error icon-inbox align-right"></div>
                    </div>
                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    <div class="box-content box-product-info">
                        <h3 class="title text-primary">78%</h3>
                        <small>User Rating</small>
                        <div class="text-primary icon-thumbs-up align-right"></div>
                    </div>
                </div><!--/.row-fluid-->


                <div class="row-fluid">
                    <div class="box-content box-product-info">
                            <span class="author">Submitted by <span class="author-name">BizGym</span></span>
                            <span class="author-image">
                                <img src="http://placehold.it/40x40" class="img-circle">
                            </span>
                    </div><!--/.box-conetent box-product-info-->
                </div><!--/.row-fluid-->

                

                <div class='row-fluid item-kpi'>
                    <div class='box-content box-product-info'>
                        <small>Item KPIs:</small>
                        <ul class='unstyled inline'>
                            <li><i class='icon-tag'></i> <a href='tag-category'>Funding</a> </li>
                            <li><i class='icon-tag'></i> <a href='tag-category'>Pitch</a> </li>
                            <li><i class='icon-tag'></i> <a href='tag-category'>Sell</a> </li>
                        </ul>
                    </div><!--/.box-product-info-->
                </div><!--/.row-fluid item-kpi-->

                <div class="row-fluid">
                    <div class="box-content box-product-info">
                        <span class='date' id='submitted-on'>Submitted on 5th of February, 2013</span>
                        <span class='date' id='updated-on'>Last updated on July 28, 2013</span>
                    </div>
                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    <div class="box-content box-product-info">
                            <div class="row-fluid">
                                <small>Share This</small>
                            </div><!--/.row-fluid-->

                            <div class="row-fluid">
                                <ul class="share-this">
                                    <li>
                                        <button class="btn share-button">
                                        <i class="icon-facebook"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn share-button">
                                        <i class="icon-twitter"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn share-button">
                                        <i class="icon-linkedin"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn share-button">
                                        <i class="icon-google-plus"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div><!--/.row-fluid-->
                    </div><!--/.box-conetent box-product-info-->
                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    
                </div><!--/.row-fluid-->

            </div><!--/.span4-->
        </div><!--/.row-fluid-->
        <div class="row-fluid">
            <div class="span12 content">
                <h2>Items you may be interested in:</h2>
            </div><!--/.span12-->
        </div>   
        <div class="row-fluid marketplace">
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
    </div><!--/.span12 -->
</div><!--/.row-fluid #content-wrapper-->


@stop