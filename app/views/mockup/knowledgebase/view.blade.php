@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid knowledgebase' id='content-wrapper'>
    <div class='span12 forum'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-lightbulb'></i>
                        <span>Knowledgebase</span>
                    </h1>
                </div> <!--/.span9-->

                <div class="span3 dash-cta">
                    <div class='btn-group'>
                        <button class="btn btn-success btn-default" id="jumpstart-business" name="button">
                        <h4>Expand your Knowledge</h4>
                        </h5>Visit the BizGym Marketplace</h5>
                         </button>
                    </div> <!--/.btn-group-->
                </div> <!--/.span3 cta-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->

        <div class="row-fluid knowledge-header">
            <div class='title'>
                The BizGym Book
            </div><!--/.title-->
            <div class='author'>
                <a href='user-profile.html'>By BizGym <img alt='Avatar' height='23' class='img-circle' style='margin-left:10px; margin-top:-5px;' src='assets/images/avatar.jpg' width='23'> </a>
            </div><!--/.author-->
            <div class="switch-knowledge">
                <select class='select2 knowledge-filter input-block-level'>
                    <option value='0' disabled selected style='display:none;'>Load Another Collection</option>
                    <option value='1'>BizTips</option>
                    <option value='2'>Business Plan For All</option>
                    <option value='3'>The Best Tips</option>
                </select>
            </div><!--/.switch-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box view'>
                
                <div class='box-content'>
                    <div class='row-fluid chapter-header'>
                        <div class='span8'>
                            <div class='title'>Section 6.1 an Overview of Your Customers</div><!--/.title-->
                        </div><!--/.span8-->

                        <div class='span4'>
                            <a href='knowledgebase-view' class='btn btn-success pull-right'>Next Page <i class='icon-arrow-right'> </i></a>
                        </div><!--/.span4-->
                    </div> <!--/.row-fluid-->

                    
                        
                    

                    <div class='tabbable'>

                            <div class='row-fluid'>


                                <div class='pagination pagination-large'>
                                    <ul>
                                        <li>
                                            <a href='#'>«</a>
                                        </li>
                                        <li class='active'>
                                            <a href='#'>1</a>
                                        </li>
                                        <li>
                                            <a href='#'>2</a>
                                        </li>
                                        <li>
                                            <a href='#'>3</a>
                                        </li>
                                        <li>
                                            <a href='#'>4</a>
                                        </li>
                                        <li>
                                            <a href='#'>5</a>
                                        </li>
                                        <li>
                                            <a href='#'>6</a>
                                        </li>
                                        <li>
                                            <a href='#'>7</a>
                                        </li>
                                        <li>
                                            <a href='#'>8</a>
                                        </li>
                                        <li>
                                            <a href='#'>9</a>
                                        </li>
                                        <li>
                                            <a href='#'>10</a>
                                        </li>
                                        <li>
                                            <a href='#'>11</a>
                                        </li>
                                        <li>
                                            <a href='#'>12</a>
                                        </li>
                                        <li>
                                            <a href="#">»</a>
                                        </li>
                                    </ul>
                                </div><!--/.pagination-->



                                <ul class='nav nav-tabs resources-list'>
                                    <li class='active'><a data-toggle='tab' href='#teacher'><i class='icon-lightbulb'></i>Teacher</a></li>
                                    <li class=''><a data-toggle='tab' href='#examples'><i class='icon-beaker'></i>Examples</a></li>
                                </ul>

                                
                            </div><!--/.row-fluid-->

                            <div class='row-fluid'>
                                <div class='span9'>
                                    <div class='tab-content resource-content'>


                                        <div class='tab-pane active' id='teacher'>
                                            <h1>Create a Mission Statement to Guide Your Business</h1>
                                            <h3>How do I choose the right Statement?</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            <h3>What makes a strong mission Statement?</h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                            <h3>Who should I target?</h3>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                        </div><!--/#teacher-->
                                        <div class='tab-pane ' id='examples'>
                                            <h1>Mission Statement Examples</h1>
                                            <h3>Example 1</h3>
                                            <p>Nike helps runners get better workouts through revolutionary running shoes featuring Nike x technology.</p>
                                            <h3>Example 2</h3>
                                            <p>Home Depot helps builders get the best supplies through competitive pricing and a comprehensive inventory featuring only quality products.</p>
                                            <h3>Example 3</h3>
                                            <p>Arbys helps hungry people get tasty meals through fast service featuring delicious ingredients</p>
                                        </div><!--/#teacher-->
                                    </div><!--/.tab-content-->
                                </div><!--/.span8-->

                                <div class='span3'>
                                    <div class='box'>
                                        
                                        <div class='box-content'>
                                            <ul class='chapter-nav list-hover list-striped'>
                                                <li><a href='#'>6.1 Customer Overview</a></li>
                                                <li><a href='#'>6.1.2 Customer Overview Examples</a></li>
                                                <li><a href='#'>6.3 Customer Profiles</a></li>
                                                <li><a href='#'>6.1 Customer Profile Examples</a></li>
                                            </ul>
                                        </div><!--/.box-content-->

                                </div><!--/.span4-->

                            </div><!--/.row-fluid-->
                        </div><!--/.tabbable--> 

                    

                    <div class='row-fluid knowledge-footer'>
                        <div class='span4'>
                            <p>Page 1 of 4 in this section</p>
                        </div><!--/.span4-->

                        <div class='span4 text-center'>
                            <a href='knowledgebase-toc' class='btn btn-default'>View Table of Contents</a>
                        </div><!--/.span4-->

                
                        <div class='span4'>
                            <a href='knowledgebase-view' class='btn btn-success pull-right'>Next Page <i class='icon-arrow-right'> </i></a>
                        </div><!--/.span4-->
                    </div><!--/.row-fluid-->

                </div>
            </div> <!--span12 box-->
        </div> <!--/.row-fluid-->

          

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->


@stop