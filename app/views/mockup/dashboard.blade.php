@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class="span9">
                    <h3 class='pull-left'>
                        <i class='icon-dashboard'></i>
                        <span>Dashboard</span>
                    </h3>
                </div> <!--/.span9 -->
                <div class="span3 hidden-phone dash-cta">
                    <div class='btn-group'>
                        <button class="btn btn-success btn-default" id="jumpstart-business" name="button">
                            <h4>Jumpstart Your Business</h4>
                            </h5>Visit the BizGym Marketplace</h5>
                        </button>
                    </div> <!--/.btn-group-->
                </div> <!--/.span3 dash-cta-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    </div><!--/.span12-->
    <div class='row-fluid main-dashboard'>
        <div class="span12 cover-photo box">
            <!-- 
                If using flexible image technique, we will un-comment this. For now, we will rely on cropping cover photos
                <img src='assets/images/cover-photo.jpg' class="user-cover-photo"> 
            -->
            <div class='cover-photo-overlay'>
                <div class='cover-container'>
            
                    <div class='row-fluid user-content'>
                        <div class='user-info'>
                            <div class='row-fluid'>
                                <div class='user-avatar'>
                                    <img src='assets/images/tara-reid.jpg'>
                                </div>
                                <div class='user-meta'>
                                    <span class='user-name'>Tara Reid</span>
                                    <span class="subscriber-status">Pro Subscriber</span>
                                </div><!--/.span9 user-meta-->
                            </div><!--/.row-fluid-->
                        </div><!--/.user-info-->
                        <div class="user-stats">
                            <div class="row-fluid stat-numbers">
                                <div class="span6 text-center">
                                    <div class='circle-container'>
                                        <span class='the-count'>72%</span>
                                    </div><!--/.circle-container-->
                                    <div class='the-stat'>
                                        Complete
                                    </div><!--/.the-stat-->
                                </div><!--/.span6-->
                                <div class="span6 text-center">
                                    <div class='circle-container'>
                                        <span class='the-badge'><i class='icon-trophy'></i></span>
                                    </div><!--/.circle-container-->
                                    <div class='the-stat'>
                                        20 Badges
                                    </div><!--/.the-stat-->
                                </div><!--/.span6-->
                            </div><!--/.row-fluid-->
                        </div><!--/.user-stats-->
                    </div><!--/.row-fluid-->

                    <div class='row-fluid'>
                        <div class="user-company text-center">
                            <!-- <span class='company-name'>Your Company</span> -->
                            <div class='main-logo'>
                                <img src='assets/images/asp-logo-250.png'>
                            </div><!--/.main-logo-->

                            <div class='row-fluid'>
                                <div class='other-logos'>
                                    <ul class='logos-list'>
                                        <li>
                                            <img src='assets/images/pdub-logo.png'>
                                        </li>

                                        <li>
                                            <img src='assets/images/whd-logo.png'>
                                        </li>
                                        
                                    </ul>
                                </div><!--/.other-logos-->
                            </div><!--/.row-fluid-->
                        </div><!--/.user-company-->
                    </div><!--/.row-fluid-->

                    
                </div><!--/.cover-container-->
            </div><!--/.cover-photo-overlay-->
        </div><!--/.span 12 cover-photo box-->

        <div class='row-fluid'>
            <div class='span12 box' style='margin-bottom: 2em'>
                <div class='box-content dash-financials'>
                    <div class="cash-box">
                        <div class="span3 box-content box-statistic">
                            <h3 class="title text-error">$9,230</h3>
                            <small>5 Year Profit Goal</small>
                            
                        </div>

                        <div class="span3 box-content box-statistic">
                            <h3 class="title text-error">0</h3>
                            <small>Months to Break Even</small>
                            
                        </div>

                        <div class="span3 box-content box-statistic">
                            <h3 class="title text-error">$2,000</h3>
                            <small>Burn Rate</small>
                            
                        </div>

                        <div class="span3 box-content box-statistic">
                            <h3 class="title text-error">$25,000</h3>
                            <small>Current Cash</small>
                            
                        </div>
                    </div><!--/.cash-box-->
                </div><!--/.box-content dash-financials-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->

        <div class="row-fluid" style='margin-bottom:2em;'> 

            <div class='span4'>
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
                            <ul class='nav nav-tabs nav-tabs-simple'>
                                <li class='active'>
                                    <a href="#users" class="green-border" data-toggle="tab"><i class='icon-user text-green'></i>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="#comments" class="purple-border" data-toggle="tab"><i class='icon-comments text-purple'></i>
                                        Comments
                                    </a>
                                </li>
                                
                            </ul><!--/.nav nav-tabs nav-tabs-simple-->
                            <div class='tab-content'>
                                <div class='tab-pane fade in active' id='users'>
                                    <ul class='unstyled users list-hover list-striped'>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                            </div>
                                            <div class='action pull-left'>
                                                <a href="#" class="text-contrast">Guadalupe Ward</a>
                                                signed up
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
                                                <a href="#" class="text-contrast">Emerson Weissnat II</a>
                                                commented
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
                                                <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                            </div>
                                            <div class='action pull-left'>
                                                <a href="#" class="text-contrast">Joana Zboncak</a>
                                                uploaded photo
                                            </div>
                                            <small class='date pull-right muted'>
                                                <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:59:41 +0200'>May 30, 2013 - 20:59</span>
                                                <i class='icon-time'></i>
                                            </small>
                                        </li>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
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
                                                <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                            </div>
                                            <div class='action pull-left'>
                                                <a href="#" class="text-contrast">Miss Price Reynolds</a>
                                                commented
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
                                    </div>
                                </div><!--/.tab-pane-->
                                <div class='tab-pane fade' id='comments'>
                                    <ul class='unstyled comments list-hover list-striped'>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <div class='icon-user'></div>
                                            </div>
                                            <div class='body'>
                                                <div class='name'><a href="#" class="text-contrast">Dorris Schmidt</a></div>
                                                <div class='actions'>
                                                    <a href="#" class="btn btn-link ok has-tooltip" title="Approve"><i class='icon-thumbs-up'></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link remove has-tooltip" title="Remove"><i class='icon-thumbs-down'></i>
                                                    </a>
                                                </div>
                                                <div class='text'>Aut saepe maxime repellendus eveniet dicta esse similique quod et atque qui eos provident.</div>
                                            </div>
                                            <div class='text-right'>
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 21:55:41 +0200'>May 30, 2013 - 21:55</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                            </div>
                                            <div class='body'>
                                                <div class='name'><a href="#" class="text-contrast">Isabell Price</a></div>
                                                <div class='actions'>
                                                    <a href="#" class="btn btn-link ok has-tooltip" title="Approve"><i class='icon-thumbs-up'></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link remove has-tooltip" title="Remove"><i class='icon-thumbs-down'></i>
                                                    </a>
                                                </div>
                                                <div class='text'>Eos numquam ea veniam voluptate ullam quo explicabo et iusto ducimus voluptatibus aut consectetur.</div>
                                            </div>
                                            <div class='text-right'>
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 22:55:41 +0200'>May 30, 2013 - 22:55</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                            </div>
                                            <div class='body'>
                                                <div class='name'><a href="#" class="text-contrast">Johnny Stracke</a></div>
                                                <div class='actions'>
                                                    <a href="#" class="btn btn-link ok has-tooltip" title="Approve"><i class='icon-thumbs-up'></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link remove has-tooltip" title="Remove"><i class='icon-thumbs-down'></i>
                                                    </a>
                                                </div>
                                                <div class='text'>Consequatur id iusto minus cumque perspiciatis ipsam laboriosam aut magnam dolor sunt placeat culpa.</div>
                                            </div>
                                            <div class='text-right'>
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 23:55:41 +0200'>May 30, 2013 - 23:55</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <div class='icon-user'></div>
                                            </div>
                                            <div class='body'>
                                                <div class='name'><a href="#" class="text-contrast">Keanu Auer</a></div>
                                                <div class='actions'>
                                                    <a href="#" class="btn btn-link ok has-tooltip" title="Approve"><i class='icon-thumbs-up'></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link remove has-tooltip" title="Remove"><i class='icon-thumbs-down'></i>
                                                    </a>
                                                </div>
                                                <div class='text'>Et voluptates adipisci rem eveniet sint nisi in sequi animi.</div>
                                            </div>
                                            <div class='text-right'>
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-31 00:55:41 +0200'>May 31, 2013 - 00:55</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <div class='icon-user'></div>
                                            </div>
                                            <div class='body'>
                                                <div class='name'><a href="#" class="text-contrast">Dr. Mervin D&#x27;Amore</a></div>
                                                <div class='actions'>
                                                    <a href="#" class="btn btn-link ok has-tooltip" title="Approve"><i class='icon-thumbs-up'></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link remove has-tooltip" title="Remove"><i class='icon-thumbs-down'></i>
                                                    </a>
                                                </div>
                                                <div class='text'>Iste odio est aut ut voluptas nostrum ullam sapiente perferendis ea est.</div>
                                            </div>
                                            <div class='text-right'>
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-31 01:55:41 +0200'>May 31, 2013 - 01:55</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class='avatar pull-left'>
                                                <div class='icon-user'></div>
                                            </div>
                                            <div class='body'>
                                                <div class='name'><a href="#" class="text-contrast">Mrs. Viola Towne</a></div>
                                                <div class='actions'>
                                                    <a href="#" class="btn btn-link ok has-tooltip" title="Approve"><i class='icon-thumbs-up'></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link remove has-tooltip" title="Remove"><i class='icon-thumbs-down'></i>
                                                    </a>
                                                </div>
                                                <div class='text'>Fugiat est earum voluptas ipsum accusamus id quam vero molestiae praesentium magnam repellat aut.</div>
                                            </div>
                                            <div class='text-right'>
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-31 02:55:41 +0200'>May 31, 2013 - 02:55</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class='load-more'>
                                        <a href="#" class="btn btn-block" data-loading-text="&lt;i class=&#x27;icon-spinner icon-spin&#x27;&gt;&lt;/i&gt; Loading more..." id="comments-more-activity"><i class='icon-circle-arrow-down'></i>
                                            Load more
                                        </a>
                                    </div><!--/.load-more-->
                                </div><!--/.tab-pane-->
                            </div><!--/.tab-content-->
                        </div><!--/.box-content box-no-padding-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--/.row-fluid recent-activity-->
            </div><!--/.span4-->

            <div class='span4'>
                <div class='row-fluid todo-list'>
                    <div class='span12 box box-nomargin'>
                        <div class="box-header">
                            <div class="title">
                                <i class="icon-check"></i>
                                Your Tasks
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
                        <div class='box-content box-no-padding'>
                            <div class='sortable-container'>
                                <form accept-charset="UTF-8" action="#" class="new-todo" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>
                                    <input class='span12' id='todo_name' name='todo[name]' placeholder='Type your new todo here...' type='text'>
                                    <button class='btn btn-success' type='submit'>
                                        <i class='icon-plus'></i>
                                    </button>
                                </form>
                                <div class='date text-contrast'>Today</div>
                                <ul class='unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>
                                    <li class='done item'>
                                        <label class='check pull-left todo'>
                                            <input type='checkbox'>
                                            Coordinate with operations on proposal
                                        </label>
                                        <div class='actions pull-right'>
                                            <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                                <i class='icon-pencil'></i>
                                            </a>
                                            <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                                <i class='icon-remove'></i>
                                            </a>
                                            <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                                <i class='icon-bookmark-empty'></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class='done item'>
                                        <label class='check pull-left todo'>
                                            <input checked='checked' type='checkbox'>
                                            Email client summary
                                        </label>
                                        <div class='actions pull-right'>
                                            <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                                <i class='icon-pencil'></i>
                                            </a>
                                            <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                                <i class='icon-remove'></i>
                                            </a>
                                            <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                                <i class='icon-bookmark-empty'></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class='date text-contrast'>Due Wed, Sep 19, 2013</div>
                                    <ul class='unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>
                                        <li class='item'>
                                            <label class='check pull-left todo'>
                                                <input type='checkbox'>
                                                Finish Projections Spreadsheet
                                            </label>
                                            <div class='actions pull-right'>
                                                <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                                    <i class='icon-pencil'></i>
                                                </a>
                                                <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                                <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                                    <i class='icon-bookmark-empty'></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class='important item'>
                                            <label class='check pull-left todo'>
                                                <input type='checkbox'>
                                                TPS Reports Due
                                            </label>
                                            <div class='actions pull-right'>
                                                <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                                    <i class='icon-pencil'></i>
                                                </a>
                                                <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                                <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                                    <i class='icon-bookmark-empty'></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class='item'>
                                            <label class='check pull-left todo'>
                                                <input type='checkbox'>
                                                Arrange meeting for Partners
                                            </label>
                                            <div class='actions pull-right'>
                                                <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                                    <i class='icon-pencil'></i>
                                                </a>
                                                <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                                <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                                    <i class='icon-bookmark-empty'></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class='date text-contrast'>Due Fri, Sep 21, 2013</div>
                                    <ul class='unstyled sortable last-ul' data-sortable-axis='y' data-sortable-connect='.sortable'>
                                        <li class='item'>
                                            <label class='check pull-left todo'>
                                                <input type='checkbox'>
                                                Print Business Cards
                                            </label>
                                            <div class='actions pull-right'>
                                                <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                                    <i class='icon-pencil'></i>
                                                </a>
                                                <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                                <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                                    <i class='icon-bookmark-empty'></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class='center-block'>
                                        <button class="btn btn-default">Go to Task Manager <i class="icon-arrow-right"></i>
                                        </button>
                                    </div>
                            </div><!--/.sortable-container-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--./row-fluid todo-list-->
            </div><!--.span4-->

            <div class='span4'>
                <div class='row-fluid dash-todo'>
                    <div class="span12 box box-nomargin">
                        <div class="box-header">
                            <div class="title">
                                <i class="icon-road"></i>
                               Milestones
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
                        <div class="box-content">
                            <h4>Hit 30k in one quarter</h4>
                                <div class="progress progress-success">
                                    
                                    <div class="bar" style="width:90%;">90%</div>
                                </div>
                            <h4>Move 300,000 units this year</h4>
                                <div class="progress progress-danger">
                                     
                                    <div class="bar" style="width:20%;">20%</div>
                                </div>

                                <div class="todo-footer">
                                    <button class="btn btn-default">
                                    View all Milestones
                                    <i class="icon-arrow-right"></i>
                                    </button>
                                </div> <!--/.todo-footer-->
                        </div><!--/.box-content-->
                    </div> <!--/.span12 box box-nomargin-->
                </div><!--.row-fluid dash-todo-->
            </div><!--/.span4-->
        </div><!--/.row-fluid-->


        <div class='row-fluid sales-projections'>
            <div class='span12 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-bar-chart'></i>
                        Sales Projections
                    </div>
                    <div class='actions'>

                        <div class="control-group">
                            <label class="control-label" for="inputSelect">Select Timeframe</label>
                            <div class="controls">
                                <select id="inputSelect">
                                <option>1 Month</option>
                                <option>3 Months</option>
                                <option>6 Months</option>
                                <option>1 Year</option>
                                <option>2 Years</option>
                                </select>
                            </div>
                        </div>


                        <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                        </a>
                        <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                        </a>
                    </div>
                </div><!--/.box-header-->
                <div class='box-content'>
                    <div id='stats-chart1'></div>
                </div><!--/.box-content-->
            </div><!--.span12 box-->
        </div><!--/.row-fluid-->
    </div><!--/.row-fluid main-dashboard-->
</div><!--/.row-fluid #content-wrapper-->


@stop
 