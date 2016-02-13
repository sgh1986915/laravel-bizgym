@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style='margin-bottom:0px;'>
                <h3 class='pull-left'>
                    <i class='icon-dashboard'></i>
                    <span>Administrative Dashboard</span>
                </h3>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='group-header'>
            <div class='row-fluid'>
                <div class='span6 offset3'>
                    <div class='text-center'>
                        <h2>Welcome, Steve</h2>
                        <small class='muted'>
                            Browse through the items below to see what is going on in your application. 
                        </small>
                    </div><!--/.text-center-->
                </div><!--/.span6 offset 3-->
            </div><!--/.row-fluid-->
        </div><!--/.group-header-->

        <div class='row-fluid' style='margin-bottom:2em;' >
            
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-primary'>3</h3>
                <small>Users</small>
                <div class='text-primary icon-user align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-info'>981</h3>
                <small>Companies</small>
                <div class='text-info icon-flag align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title title text-error'>0</h3>
                <small>Authors</small>
                <div class='muted icon-pencil title text-error align-right'></div>
            </div>

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-success'>0</h3>
                <small>Subscribers</small>
                <div class='text-success icon-money align-right'></div>
            </div>
        </div><!--/.row-fluid-->

        

        <div class="row-fluid" style='margin-bottom:2em;'> 

            <div class='span6'>
                <div class='row-fluid'>
                    <div class='span12 box box-nomargin'>
                        <div class="box-header">
                            <div class="title">
                                <i class="icon-money"></i>
                                Application Revenue
                            </div> <!--/.title-->
                            <div class="actions">
                                <a class="btn box-remove btn-mini btn-link" href="#">
                                    <i class="icon-remove"></i>
                                </a>
                                <a class="btn box-collapse btn-mini btn-link" href="#">
                                    <i></i>
                                </a>
                            </div><!--/.actions-->
                        </div><!--/.box-header-->
                        <div class='box-content'>
                            <div id='stats-chart1'>
                            </div><!--stats-chart-2-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--./row-fluid-->
            </div><!--.span4-->


            <div class='span6'>
                <div class='row-fluid'>
                    <div class='span12 box box-nomargin'>
                        <div class="box-header">
                            <div class="title">
                                <i class="icon-globe"></i>
                                Application Usage
                            </div> <!--/.title-->
                            <div class="actions">
                                <a class="btn box-remove btn-mini btn-link" href="#">
                                    <i class="icon-remove"></i>
                                </a>
                                <a class="btn box-collapse btn-mini btn-link" href="#">
                                    <i></i>
                                </a>
                            </div><!--/.actions-->
                        </div><!--/.box-header-->
                        <div class='box-content'>
                            <div id='stats-chart2'>
                            </div><!--stats-chart-2-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--./row-fluid-->
            </div><!--.span4-->

           
        </div><!--/.row-fluid-->


        <div class='row-fluid'>

            <div class='span6'>
                <div class='row-fluid recent-activity'>
                    <div class='span12 box box-nomargin'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-refresh'></i>
                                Recent activity
                            </div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div><!--/box-header-->
                        <div class='box-content box-no-padding'>
                            <ul class='unstyled users list-hover list-striped'>
                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="">Guadalupe Ward</a>
                                        <span class='text-primary'>signed up</span>
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:56:41 +0200'>May 30, 2013 - 20:56</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                <li>
                                    <div class='avatar pull-left'>
                                        <div class='icon-user'></div>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="">Emerson Weissnat II</a>
                                        <span class='text-success'>purchased a plan</span>
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:57:41 +0200'>May 30, 2013 - 20:57</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                <li>
                                    <div class='avatar pull-left'>
                                        <div class='icon-user'></div>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="">Elody O&#x27;Keefe</a>
                                        <span class='text-warning'>downloaded an App</span>
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:58:41 +0200'>May 30, 2013 - 20:58</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="">Joana Zboncak</a>
                                        <span class='text-info'>started a company</span>
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:59:41 +0200'>May 30, 2013 - 20:59</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="">Zander Turner</a>
                                        <span class='text-primary'>signed up</span>
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:00:41 +0200'>May 30, 2013 - 21:00</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="">Miss Price Reynolds</a>
                                        <span class='text-success'> purchased a plan</span>
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:01:41 +0200'>May 30, 2013 - 21:01</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                            </ul>
                            <div class='load-more'>
                                <a href="#" class="btn btn-block" data-loading-text="&lt;i class=&#x27;icon-spinner icon-spin&#x27;&gt;&lt;/i&gt; Loading more..." id="users-more-activity"><i class='icon-circle-arrow-down'></i>
                                    Load more
                                </a>
                            </div> <!--/.load-more-->
                        </div><!--/.box-content box-no-padding-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--/.row-fluid recent-activity-->
            </div><!--/.span6-->

            <div class='span6'>
                <div class='row-fluid recent-activity'>
                    <div class='span12 box box-nomargin'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-user'></i>
                                Active Users
                            </div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div><!--/box-header-->
                        <div class='box-content box-no-padding'>
                            
                            <ul class='unstyled users list-hover list-striped'>
                                
                                <li>
                                    <div class='avatar pull-left'>
                                        <div class='icon-user'></div>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="text-contrast">Elody O&#x27;Keefe</a>
                                        signed in
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:58:41 +0200'>May 30, 2013 - 20:58</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                
                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="text-contrast">Zander Turner</a>
                                        signed in
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:00:41 +0200'>May 30, 2013 - 21:00</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>

                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="text-contrast">Zander Turner</a>
                                        signed in
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:00:41 +0200'>May 30, 2013 - 21:00</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>

                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="text-contrast">Zander Turner</a>
                                        signed in
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:00:41 +0200'>May 30, 2013 - 21:00</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>

                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="text-contrast">Zander Turner</a>
                                        signed in
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:00:41 +0200'>May 30, 2013 - 21:00</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>

                                <li>
                                    <div class='avatar pull-left'>
                                        <img alt='Avatar' height='23' src='../assets/images/avatar.jpg' width='23'>
                                    </div>
                                    <div class='action pull-left'>
                                        <a href="#" class="text-contrast">Zander Turner</a>
                                        signed in
                                    </div>
                                    <small class='date pull-right muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:00:41 +0200'>May 30, 2013 - 21:00</span>
                                        <i class='icon-time'></i>
                                    </small>
                                </li>
                                
                            </ul>
                            <div class='load-more'>
                                <a href="#" class="btn btn-block" data-loading-text="&lt;i class=&#x27;icon-spinner icon-spin&#x27;&gt;&lt;/i&gt; Loading more..." id="users-more-activity"><i class='icon-circle-arrow-down'></i>
                                    Load more
                                </a>
                            </div><!--/.load-more-->
                        
                        </div><!--/.box-content box-no-padding-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--/.row-fluid recent-activity-->
            </div><!--/.span6-->
         
        </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop