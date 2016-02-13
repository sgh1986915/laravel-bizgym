@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin forum-dash' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style='margin-bottom:0px;'>
                <h3 class='pull-left'>
                    <i class='icon-dashboard'></i>
                    <span>Forum Administration</span>
                </h3>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->


        <div class='row-fluid section-header' style='margin-bottom:1em; margin-top:1em;'>
            <div class='title'>
                What's going on in the Forum?
            </div><!--/.title-->

            <div class='btn-group'>
                <a href='/categories/' class='btn btn-default'>Manage Categories</a>
                    <a hreg='../../forum' class='btn btn-defualt'>Go to Forum</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid' style='margin-bottom:2em;' >
            
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-primary'>3</h3>
                <small>Topics</small>
                <div class='text-primary icon-list align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title text-info'>981</h3>
                <small>Questions</small>
                <div class='text-info icon-question-sign align-right'></div>
            </div>
            <div class='span3 box-content box-statistic'>
                <h3 class='title title text-error'>0</h3>
                <small>Comments</small>
                <div class='muted icon-quote-right title text-error align-right'></div>
            </div>

            <div class='span3 box-content box-statistic'>
                <h3 class='title text-success'>5</h3>
                <small>Unique Users</small>
                <div class='text-success icon-user align-right'></div>
            </div>
        </div><!--/.row-fluid-->

        

        <div class="row-fluid" style='margin-bottom:2em;'> 

            <div class='span4'>
                <div class='row-fluid'>
                    <div class='span12 box box-nomargin'>
                        <div class="box-header">
                            <div class="title">
                                <i class="icon-bar-chart"></i>
                                Posts by Topic
                            </div> <!--/.title-->
                            
                        </div><!--/.box-header-->
                        <div class='box-content'>
                            <div id='stats-chart5'>
                            </div><!--stats-chart-2-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--./row-fluid-->
            </div><!--.span4-->


            <div class='span4'>
                <div class='row-fluid recent-activity'>
                    <div class='span12 box box-nomargin'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-bolt'></i>
                                Weekly Statistics
                            </div>
                            
                        </div><!--/box-header-->
                        <div class='box-content box-no-padding'>
                            
                            <ul class='unstyled forum-stats list-hover list-striped'>
                                
                                <li>
                                    <div class='row-fluid'>
                                        <span class='number'>3</span>
                                        <span class='stat'>New Questions</span>
                                        <span class="rate label label-success">
                                            31% <i class="icon-arrow-up"> </i>
                                        </span>
                                    </div><!--/.row-fluid-->
                                </li>

                                <li>
                                    <div class='row-fluid'>
                                        <span class='number'>2</span>
                                        <span class='stat'>New Comments</span>
                                        <span class="rate label label-important">
                                            31% <i class="icon-arrow-down"> </i>
                                        </span>
                                    </div><!--/.row-fluid-->
                                </li>    


                                <li>
                                    <div class='row-fluid'>
                                        <span class='number'>3</span>
                                        <span class='stat'>New Users</span>
                                        <span class="rate label label-success">
                                            10% <i class="icon-arrow-up"> </i>
                                        </span>
                                    </div><!--/.row-fluid-->
                                </li>    

                                <li>
                                    <div class='row-fluid'>
                                        <span class='number'>5</span>
                                        <span class='stat'>Flagged Comments</span>
                                        <span class="rate label label-success">
                                            10% <i class="icon-arrow-up"> </i>
                                        </span>
                                    </div><!--/.row-fluid-->
                                </li>  


                                <li>
                                    <div class='row-fluid'>
                                        <span class='number'>2</span>
                                        <span class='stat'>New Topics</span>
                                        <span class="rate label label-important">
                                            21% <i class="icon-arrow-down"> </i>
                                        </span>
                                    </div><!--/.row-fluid-->
                                </li> 


                            </ul>
                    
                        </div><!--/.box-content box-no-padding-->
                    </div><!--/.span12 box box-nomargin-->
                </div><!--/.row-fluid-->
            </div><!--/.span4-->


            <div class='span4'>
                <div class='row-fluid recent-activity'>
                    <div class='span12 box box-nomargin'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-user'></i>
                                Top Users
                            </div>
                           
                        </div><!--/box-header-->
                        <div class='box-content box-no-padding'>
                            
                            <ul class='unstyled forum-users list-hover list-striped'>
                                
                                <li>
                                    <div class='row-fluid'>
                                        <div class='span3 avatar pull-left'>
                                            <img src="http://placehold.it/50x50" class='img-circle'>
                                        </div><!--/.avatar-->
                                        <div class='span9 user-info'>
                                            <div class='row-fluid'>
                                                <span class='user-name'><a href='user/profile/' class='text-contrast'>JimBo199</a></span> <span class='user-status label label-important'>Moderator</span>
                                            </div><!--/.row-fluid-->
                                            <div class='row-fluid'>
                                                <span class='item-name'>Last post </span><span class='last-post'>5 Minutes ago</span> <span class='total-posts'>555 Total</span>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.user-info-->
                                    </div><!--/.row-fluid-->
                                </li>

                                <li>
                                    <div class='row-fluid'>
                                        <div class='span3 avatar pull-left'>
                                            <img src="http://placehold.it/50x50" class='img-circle'>
                                        </div><!--/.avatar-->
                                        <div class='span9 user-info'>
                                            <div class='row-fluid'>
                                                <span class='user-name'><a href='user/profile/' class='text-contrast'>BobbyKnight22</a></span> <span class='user-status label label-success'>User</span>
                                            </div><!--/.row-fluid-->
                                            <div class='row-fluid'>
                                                <span class='item-name'>Last post </span><span class='last-post'>5 Minutes ago</span> <span class='total-posts'>421 Total</span>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.user-info-->
                                    </div><!--/.row-fluid-->
                                </li>


                                <li>
                                    <div class='row-fluid'>
                                        <div class='span3 avatar pull-left'>
                                            <img src="http://placehold.it/50x50" class='img-circle'>
                                        </div><!--/.avatar-->
                                        <div class='span9 user-info'>
                                            <div class='row-fluid'>
                                                <span class='user-name'><a href='user/profile/' class='text-contrast'>Chris.Rock</a></span> <span class='user-status label label-important'>Moderator</span>
                                            </div><!--/.row-fluid-->
                                            <div class='row-fluid'>
                                                <span class='item-name'>Last post </span><span class='last-post'>9 Minutes ago</span> <span class='total-posts'>30 Total</span>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.user-info-->
                                    </div><!--/.row-fluid-->
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


        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span6 box bordered-box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-question-sign'> </i> Recent Questions </div>
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table recent-posts table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Post
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>New Post 23</a></td>
                            <td data-title='Author'><a href="user-profile">Jim Bob</a></td>
                            <td data-title='Date'>16 hours ago</td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing</a></td>
                            <td data-title='Author'><a href='user-profile'>Sue Greer</a></td>
                            <td data-title='Date'>15 hours ago</td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Another Test Post</a></td>
                            <td data-title='Author'><a href='user-profile'>James Bob</a></td>
                            <td data-title='Date'>14 hours ago</td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>George Curious</a></td>
                            <td data-title='Date'>12 hours ago</td>
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>Tina Fey</a></td>
                            <td data-title='Date'>11 hours ago</td>
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>Jill Cunningham</a></td>
                            <td data-title='Date'>8 hours ago</td>
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>Blank User</a></td>
                            <td data-title='Date'>6 hours ago</td>
                        </tr>
                        
                        </tbody>
                    </table>
                    
                </div> <!--/.box-content-->
            </div> <!--/.span6 box-->

            <div class='span6 box bordered-box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-ok-sign'> </i> Recent Answers </div>
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table recent-posts table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Post
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>New Post 23</a></td>
                            <td data-title='Author'><a href="user-profile">Jim Bob</a></td>
                            <td data-title='Date'>16 hours ago</td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing</a></td>
                            <td data-title='Author'><a href='user-profile'>Sue Greer</a></td>
                            <td data-title='Date'>15 hours ago</td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Another Test Post</a></td>
                            <td data-title='Author'><a href='user-profile'>James Bob</a></td>
                            <td data-title='Date'>14 hours ago</td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>George Curious</a></td>
                            <td data-title='Date'>12 hours ago</td>
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>Tina Fey</a></td>
                            <td data-title='Date'>11 hours ago</td>
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>Jill Cunningham</a></td>
                            <td data-title='Date'>8 hours ago</td>
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>Blank User</a></td>
                            <td data-title='Date'>6 hours ago</td>
                        </tr>
                        
                      
                        
                        </tbody>
                    </table>
                </div> <!--/.box-content-->
            </div> <!--/.span6 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid'>

            <div class='span6 box bordered-box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-flag'> </i> Flagged Questions </div>
                    
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Post
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Manage
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>New Post 23</a></td>
                            <td data-title='Author'><a href="user-profile">Jim Bob</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing</a></td>
                            <td data-title='Author'><a href='user-profile'>Sue Greer</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Another Test Post</a></td>
                            <td data-title='Author'><a href='user-profile'>James Bob</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>George Curious</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>
                        
                      
                        
                        </tbody>
                    </table>
                    <a class='btn btn-block'>View All Flagged Questions</a>
                </div> <!--/.box-content-->
            </div> <!--/.span6 box-->

            <div class='span6 box bordered-box' style='margin-bottom:0;'>
                <div class='box-header'>
                    <div class='title'><i class='icon-flag'> </i> Flagged Answers </div>
                </div>
                <div class='box-content box-no-padding'>
                    <table class='table table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                Post
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Manage
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>New Post 23</a></td>
                            <td data-title='Author'><a href='user-profile'>Jim Bob</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing</a></td>
                            <td data-title='Author'><a href='user-profile'>Sue Greer</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Another Test Post</a></td>
                            <td data-title='Author'><a href='user-profile'>James Bob</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Post'><a class='text-contrast' href='post-url'>Testing Again</a></td>
                            <td data-title='Author'><a href='user-profile'>George Curious</a></td>
                            <td data-title="Manage">
                                <a class='btn btn-mini' href='#'>
                                    Clear Flag
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Delete Post 
                                </a>
                                <a class='btn btn-mini' href='#'>
                                    Blacklist
                                </a>
                            </td>
                        </tr>
                        
                      
                        
                        </tbody>
                    </table>
                    <a class='btn btn-block'>View All Flagged Answers</a>
                </div> <!--/.box-content-->
            </div> <!--/.span6 box-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop