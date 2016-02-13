@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')



<div class='row-fluid knowledgebase' id='content-wrapper'>
    <div class='span12'>
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
                <a href='user-profile.html'>By BizGym <img alt='Avatar' height='23' class='img-circle' style='margin-left:10px; margin-top:-5px;' src='../assets/images/avatar.jpg' width='23'> </a>
            </div><!--/.author-->
            <div class="switch-knowledge">
                <select class='select knowledge-filter input-block-level'>
                    <option value='0' disabled selected style='display:none;'>Load Another Collection</option>
                    <option value='1'>BizTips</option>
                    <option value='2'>Business Plan For All</option>
                    <option value='3'>The Best Tips</option>
                </select>
            </div><!--/.switch-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box toc'>
                
                <div class='box-content'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <h1>Table of Contents</h1>
                        </div><!--/.span8-->

                        <div class='span4 search'>
                            <form class="form-search">
                                <div class="input-append">
                                <input type="text" placeholder='search knowledgebase' class="span10 search-query">
                                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div><!--/.span4-->
                    </div> <!--/.row-fluid-->

                    <div class='row-fluid'>
                        <dl>
                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#mission'>1. Mission<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='mission'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>1.1 Mission Statement</a></li>
                                    <li><a href='#'>1.2 Mission Statement Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#companyoverview'>2. Company Overview<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='companyoverview'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>2.1 Company Overview</a></li>
                                    <li><a href='#'>2.2 Company Overview Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#market'>3. Your Market<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='market'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>3.1 Your Market</a></li>
                                    <li><a href='#'>3.2 Your Market Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#goals'>4. Goals<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='goals'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>4.1 Goals</a></li>
                                    <li><a href='#'>4.1 Goals Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#offerings'>5. Your Offerings<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='offerings'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>5.1 Overview of Offerings</a></li>
                                    <li><a href='#'>5.1.2 Overview Examples</a></li>
                                    <li><a href='#'>5.2 Offering Profiles</a></li>
                                    <li><a href='#'>5.2.2 Offering Profile Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#customers'>6. Customers<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='customers'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>6.1 Overview of Customers</a></li>
                                    <li><a href='#'>6.1.2 Overview Examples</a></li>
                                    <li><a href='#'>6.2 Customer Profiles</a></li>
                                    <li><a href='#'>6.2.2 Customer Profile Examples</a></li>
                                </ul>
                            </dd>


                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#competition'>7. Competition<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='competition'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>7.1 Overview of Competition</a></li>
                                    <li><a href='#'>7.1.2 Overview Examples</a></li>
                                    <li><a href='#'>7.2 Competitor Profiles</a></li>
                                    <li><a href='#'>7.2.2 Competitor Profile Examples</a></li>
                                </ul>
                            </dd>


                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#marketing'>8. Marketing<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='marketing'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>8.1 Overview of Marketing</a></li>
                                    <li><a href='#'>8.1.2 Overview Examples</a></li>
                                    <li><a href='#'>8.2 Marketing Campaigns</a></li>
                                    <li><a href='#'>8.2.2 Marketing Campaign Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#operatins'>9. Operations<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='operations'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>9.1 Overview of Operations</a></li>
                                    <li><a href='#'>9.1.2 Overview Examples</a></li>
                                    <li><a href='#'>9.2 Department Profiles</a></li>
                                    <li><a href='#'>9.2.2 Department Profile Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#management'>10. Management<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='management'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>10.1 Overview of Management</a></li>
                                    <li><a href='#'>10.1.2 Overview Examples</a></li>
                                    <li><a href='#'>10.2 Management Profiles</a></li>
                                    <li><a href='#'>10.2.2 Management Profile Examples</a></li>
                                </ul>
                            </dd>

                            <dt><a class='btn btn-block' data-toggle='collapse' data-target='#funding'>11. Funding<span class='toggle-arrow'><i class='icon-angle-right'></i></span></a>
                            </dt>
                                
                            <dd class='collapse' id='funding'>
                                <ul class='chapter-contents unstyled'>
                                    <li><a href='#'>11.1 Funding</a></li>
                                    <li><a href='#'>11.2 Funding Examples</a></li>
                                    
                                </ul>
                            </dd>

                        </dl>

                    <div><!--/.row-fluid-->

                    <div class='row-fluid'>
                        <a href='knowledgebase-view.html' class='btn btn-success pull-right shift-up'>Start from the Beginning <i class='icon-arrow-right'></i></a>
                    </div><!--/.row-fluid-->

                </div>
            </div> <!--span12 box-->
        </div> <!--/.row-fluid-->

          

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->


@stop