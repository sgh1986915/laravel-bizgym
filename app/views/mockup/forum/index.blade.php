@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 forum'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-comment'></i>
                        <span>Forum</span>
                    </h1>
                </div> <!--/.span9-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->

        <div class="row-fluid">
            <div class="span8">

                <div class="box forum-category">
                    <div class="box-header">
                        <div class="title"><i class="icon-info"> </i> Business Advice</div><!--/.title-->
                        <div class="actions">
                            <a href="/forum/business-advice/topic/new"><i class="icon-plus"></i></a>
                            <a href="/forum/business-advice"><i class="icon-double-angle-right"></i></a>
                        </div><!--/.box-icon-->
                    </div><!--/.box-header-->

                    <div class="box-content">
                        <ul class="category-threads">
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">
                                            <span class="avatar">
                                                <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span><!--/.avatar-->
                                         </a>
                                    </div><!--/.post-author-->
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">Success Story 7</a>  
                                            </span><!--/.post-title-->
                                        </div> <!--/.post-header-->
                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                                
                                        <span class="created pull-right">Created <strong>5 days ago</strong>
                                        </span>
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                                              <!-- Question -->
                                        <span class="label label-success">Open</span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info-->
                            </li><!--/.forum-post -->
                                  
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">
                                            <span class="avatar">
                                                 <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span>
                                        </a>
                                    </div><!--/.post-author-->
                         
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">Success Story 5</a>  
                                            </span><!--/.post-title-->
                                         </div> <!--/.post-header-->

                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                            
                                        <span class="latest-reply pull-right">
                                            <strong>5 replies</strong> most recent <strong>5 days ago</strong> by Piyush                     
                                        </span><!--/.last-reply-->
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                        <span class="label label-success">Open</span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info -->
                            </li><!--/.forum-post-->
                        </ul><!--/.category-threads-->    
                    </div> <!--/.box-content-->
                </div> <!--/.box forum-category-->

                <div class="box forum-category">
                    <div class="box-header">
                        <div class="title"><i class="icon-star-empty"> </i> Share Your Success</div><!--/.title-->
                        <div class="actions">
                            <a href="/forum/share-your-success/topic/new"><i class="icon-plus"></i></a>
                            <a href="/forum/share-your-success"><i class="icon-double-angle-right"></i></a>
                        </div><!--/.box-icon-->
                    </div><!--/.box-header-->

                    <div class="box-content">
                        <ul class="category-threads">
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">
                                            <span class="avatar">
                                                <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span><!--/.avatar-->
                                         </a>
                                    </div><!--/.post-author-->
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">Success Story 7</a>  
                                            </span><!--/.post-title-->
                                        </div> <!--/.post-header-->
                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                                
                                        <span class="created pull-right">Created <strong>5 days ago</strong>
                                        </span>
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                                              <!-- Question -->
                                        <span class="label label-info"><strong>+1</strong></span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info-->
                            </li><!--/.forum-post -->
                                  
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">
                                            <span class="avatar">
                                                 <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span>
                                        </a>
                                    </div><!--/.post-author-->
                         
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">Success Story 5</a>  
                                            </span><!--/.post-title-->
                                         </div> <!--/.post-header-->

                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                            
                                        <span class="latest-reply pull-right">
                                            <strong>1 reply</strong> most recent <strong>5 days ago</strong> by Piyush                     
                                        </span><!--/.last-reply-->
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                        <span class="label label-info"><strong>+2</strong></span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info -->
                            </li><!--/.forum-post-->
                        </ul><!--/.category-threads-->    
                    </div> <!--/.box-content-->
                </div> <!--/.box forum-category-->

                <div class="box forum-category">
                    <div class="box-header">
                        <div class="title"><i class="icon-bolt"></i> Report a Bug</div><!--/.title-->
                        <div class="actions">
                            <a href="/forum/report-a-bug/topic/new"><i class="icon-plus"></i></a>
                            <a href="/forum/report-a-bug"><i class="icon-double-angle-right"></i></a>
                        </div><!--/.box-icon-->
                    </div><!--/.box-header-->

                    <div class="box-content">
                        <ul class="category-threads">
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">
                                            <span class="avatar">
                                                <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span><!--/.avatar-->
                                         </a>
                                    </div><!--/.post-author-->
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">Success Story 7</a>  
                                            </span><!--/.post-title-->
                                        </div> <!--/.post-header-->
                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                                
                                        <span class="created pull-right">Created <strong>5 days ago</strong>
                                        </span>
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                                              <!-- Question -->
                                        <span class="label label-info"><strong>+1</strong></span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info-->
                            </li><!--/.forum-post -->
                                  
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">
                                            <span class="avatar">
                                                 <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span>
                                        </a>
                                    </div><!--/.post-author-->
                         
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">Success Story 5</a>  
                                            </span><!--/.post-title-->
                                         </div> <!--/.post-header-->

                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                            
                                        <span class="latest-reply pull-right">
                                            <strong>2 replies</strong> most recent <strong>5 days ago</strong> by Piyush                     
                                        </span><!--/.last-reply-->
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                        <span class="label label-info"><strong>+2</strong></span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info -->
                            </li><!--/.forum-post-->
                        </ul><!--/.category-threads-->    
                    </div> <!--/.box-content-->
                </div> <!--/.box forum-category-->

                <div class="box forum-category">
                    <div class="box-header">
                        <div class="title"><i class="icon-wrench"> </i> Feature Request</div><!--/.title-->
                        <div class="actions">
                            <a href="/forum/business-advice/topic/new"><i class="icon-plus"></i></a>
                            <a href="/forum/business-advice"><i class="icon-double-angle-right"></i></a>
                        </div><!--/.box-icon-->
                    </div><!--/.box-header-->

                    <div class="box-content">
                        <ul class="category-threads">
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">
                                            <span class="avatar">
                                                <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span><!--/.avatar-->
                                         </a>
                                    </div><!--/.post-author-->
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-7-51fdf35312ccf">Success Story 7</a>  
                                            </span><!--/.post-title-->
                                        </div> <!--/.post-header-->
                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                                
                                        <span class="created pull-right">Created <strong>5 days ago</strong>
                                        </span>
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                                              <!-- Question -->
                                        <span class="label label-success">Open</span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info-->
                            </li><!--/.forum-post -->
                                  
                            <li class="forum-post">
                                <div class="post-info">
                                    <div class="post-author span1">
                                        <a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">
                                            <span class="avatar">
                                                 <img class='img-circle' src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=60&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png" alt="Profile">
                                            </span>
                                        </a>
                                    </div><!--/.post-author-->
                         
                                    <div class="post-reply-info span8">
                                        <div class="post-header">
                                            <span class="post-title"><a href="/forum/share-your-success/topic/success-story-5-51fde2c923d15">Success Story 5</a>  
                                            </span><!--/.post-title-->
                                         </div> <!--/.post-header-->

                                        <span class="author-name">
                                            <strong> by Prince Patel</strong>
                                        </span> <!--/.author-name-->
                            
                                        <span class="latest-reply pull-right">
                                            <strong>1 replies</strong> most recent <strong>5 days ago</strong> by Piyush                     
                                        </span><!--/.last-reply-->
                                    </div> <!--/.post-reply-info-->

                                    <div class="number-question span2 text-center">
                                        <span class="label label-success">Open</span>
                                    </div><!--/.number-question-->
                                </div><!--/.post-info -->
                            </li><!--/.forum-post-->
                        </ul><!--/.category-threads-->    
                    </div> <!--/.box-content-->
                </div> <!--/.box forum-category-->

            </div><!--/.span8-->

            <div class="span4">
                <h4>Looking for something?</h4>
                <div class="row-fluid">
                    <div class="span9"><input class="span12" type="text" name="search" placeholder="Search Forum">
                    </div><!--/.span9-->
                    <div class="span3">
                        <input class="btn forum-search btn-block btn-info" type="submit" value="Go">
                    </div><!--/.span3-->
                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    <button class="btn btn-primary btn-large btn-block" style="margin-top:1em; margin-bottom:1em;">
                        <i class="icon-pencil"> </i> Create a new topic </button>
                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    <div class='span12 box box-nomargin'>
                        <div class='box-header'>
                            <div class='title'><i class="icon-user"> </i> Recently Active</div>
                            
                        </div><!--/.box-header-->
                        <div class='box-content'>
                            <ul class="recently-active">
                                <li>
                                    <span class="avatar">
                                    <img alt="Profile" src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=120&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png">
                                    </span>
                                    <span class="user-name">
                                    <a href="/profile/96">Piyushpatel1616 Patel</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="avatar">
                                    <img alt="Profile" src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=120&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png">
                                    </span>
                                    <span class="user-name">
                                    <a href="/profile/96">Piyushpatel1616 Patel</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="avatar">
                                    <img alt="Profile" src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=120&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png">
                                    </span>
                                    <span class="user-name">
                                    <a href="/profile/96">Piyushpatel1616 Patel</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="avatar">
                                    <img alt="Profile" src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=120&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png">
                                    </span>
                                    <span class="user-name">
                                    <a href="/profile/96">Piyushpatel1616 Patel</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="avatar">
                                    <img alt="Profile" src="https://secure.gravatar.com/avatar/75940e6c72fa8989f405d97b3b631324?s=120&r=g&d=http%3A%2F%2Fdev.surrounds.me%2Fimg%2Fegghead.png">
                                    </span>
                                    <span class="user-name">
                                    <a href="/profile/96">Piyushpatel1616 Patel</a>
                                    </span>
                                </li>
                            </ul>
                        </div><!--/.box-content-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--/.row-fluid-->

                <div class="row-fluid">
                    <div class='span12 box box-nomargin' style='margin-top:1em;'>
                        <div class='box-header'>
                            <div class='title'><i class="icon-bar-chart"> </i> Community Stats</div>
                            
                        </div><!--/.box-header-->
                        <div class='box-content'>
                            <ul class="community-stats">
                                <li>
                                    <div class="stat-icon">
                                        <i class="icon-comment text-info"></i>
                                    </div>
                                    <span class="stat-number text-success">56</span>
                                    <span class="stat">Total Topics</span>  
                                </li>
                                <li>
                                    <div class="stat-icon">
                                        <i class="icon-user text-info"></i>
                                    </div>
                                    <span class="text-success stat-number">13</span>
                                    <span class="stat">Total Users</span>  
                                </li>
                            </ul>
                        </div><!--/.box-content-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--/.row-fluid-->
            </div><!--/.span4-->
        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop