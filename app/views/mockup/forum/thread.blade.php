@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 forum forum-post'>
        <div class="row-fluid">
            <div class="page-header">
          
                <h1 class='pull-left'>
                    <i class='icon-comment'></i>
                    <span>Forum</span>
                </h1>

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                            <a href="index.html"><i class='icon-comment'> </i> Forum
                            </a>
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Category
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Post Name
                        </li>
                        
                    </ul>
                </div>
        </div> <!--/.page-header-->
        </div><!--/.row-fluid-->

        <div class="row-fluid">
            <div class="span8">

                <div class="box post">
                    <div class="box-header muted-background">
                        <div class='title span9'>
                            Selected Post
                        </div>

                        <div class="actions span3">
                                
                            <div class="post-status">
                                <a class="btn btn-mini btn-success" href="http://dev.surrounds.me/forum/feature/tracker/25/open">Open</a>
                                <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature/tracker/25/pending">Pending</a>
                                <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature/tracker/25/closed">Closed</a>
                            </div><!--post-status-->

                        </div><!--/.box-icon-->
                    </div><!--/.box-header-->

                    <div class="box-content">
                        <div class="row-fluid">
                            <div class="span2">
                                <div class='post-author text-center'>
                                    <img src="http://placehold.it/100x100" alt='100x100' class='img-circle'>
                                    <div class='author-name'>
                                        B.A.M.F.
                                    </div><!--/.author-name-->
                                    <div class="author-details">
                                        <div class='join-date'>Joined<br>
                                        Aug. 9, 2013</div>
                                        <div class='post-count'>4 Posts</div>
                                    </div>
                                </div><!--/.post-author-->
                            </div><!--/.span2-->

                            <div class="span10">
                                <div class='row-fluid'>
                                    <div class='post-date'>Created August, 12th 9:03pm</div>
                                </div><!--/.row-fluid-->

                                <div class='post-content row-fluid'>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                </div>

                                <div class="post-actions">
                                    <span class='followers'>3 Supporters</span>
                                    <a href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/star"><button class="btn btn-info">
                                    +1
                                    </button></a>

                                    <a class="btn btn-success" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">Follow</a>

                                     <a href="#reply"><button class="btn btn-primary pull-right">
                                    <i class="icon-pencil"> </i> Reply
                                    </button></a>
                                </div><!--/.post-status-->

                            </div><!--/.span10-->
                        </div><!--/.row-fluid-->
                    </div> <!--/.box-content-->
                </div> <!--/.box post-->

                <div class='box box-nomargin'>
                    <div class='box-header' style='margin-left:0px; padding-left:0px;'>
                        <div class='title'>13 Responses</div>
                    </div><!--/.box-header-->
                    
                    <div class='reply-content'>
                        <ol class='reply-list'>
                            <li class='post-reply'>
                                <div class="single-reply row-fluid">
                                    <div class="span1 reply-author-image">
                                        <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                    </div><!--/.span10-->
                                    <div class='span11 the-reply'>
                                        <div class='row-fluid'>
                                            <span class='user-name'>User Name</span>
                                            <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                        </div><!--/.row-fluid-->

                                        <div class='row-fluid reply-body'>
                                            Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                        accusantium omnis tempora maiores ratione unde accusamus.
                                        </div><!--/.row-fluid reply-body-->
                                        
                                        <div class='row-fluid'>

                                            <div class="reply-controls">
                                                <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                            </div><!--/.reply-controls-->
                                        </div><!--/.row-fluid-->
                                    </div><!--/span10-->
                                </div><!--/.row-fluid-->


                                <ul class='children'>
                                    <li class='post-reply'>
                                        <div class="row-fluid single-reply">
                                            <div class="span1 reply-author-image">
                                                <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                            </div><!--/.span10-->
                                            <div class='span11 the-reply'>
                                                <div class='row-fluid'>
                                                    <span class='user-name'>User Name</span>
                                                    <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                                </div><!--/.row-fluid-->

                                                <div class='row-fluid reply-body'>
                                                    Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                                accusantium omnis tempora maiores ratione unde accusamus.
                                                </div><!--/.row-fluid reply-body-->
                                                
                                                <div class='row-fluid'>

                                                    <div class="reply-controls">
                                                        <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                        <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                        <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                                    </div><!--/.reply-controls-->
                                                </div><!--/.row-fluid-->
                                            </div><!--/span10-->
                                        </div><!--/.row-fluid-->
                                    </li>
                                    <li class='post-reply'>
                                        <div class="row-fluid single-reply">
                                            <div class="span1 reply-author-image">
                                                <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                            </div><!--/.span10-->
                                            <div class='span11 the-reply'>
                                                <div class='row-fluid'>
                                                    <span class='user-name'>User Name</span>
                                                    <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                                </div><!--/.row-fluid-->

                                                <div class='row-fluid reply-body'>
                                                    Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                                accusantium omnis tempora maiores ratione unde accusamus.
                                                </div><!--/.row-fluid reply-body-->
                                                
                                                <div class='row-fluid'>

                                                    <div class="reply-controls">
                                                        <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                        <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                        <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                                    </div><!--/.reply-controls-->
                                                </div><!--/.row-fluid-->
                                            </div><!--/span10-->
                                        </div><!--/.row-fluid-->
                                    </li>
                                </ul>
                            </li>
                            <li class='post-reply'>
                                <div class="single-reply row-fluid">
                                    <div class="span1 reply-author-image">
                                        <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                    </div><!--/.span10-->
                                    <div class='span11 the-reply'>
                                        <div class='row-fluid'>
                                            <span class='user-name'>User Name</span>
                                            <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                        </div><!--/.row-fluid-->

                                        <div class='row-fluid reply-body'>
                                            Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                        accusantium omnis tempora maiores ratione unde accusamus.
                                        </div><!--/.row-fluid reply-body-->
                                        
                                        <div class='row-fluid'>

                                            <div class="reply-controls">
                                                <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                            </div><!--/.reply-controls-->
                                        </div><!--/.row-fluid-->
                                    </div><!--/span10-->
                                </div><!--/.row-fluid-->


                                <ul class='children'>
                                    <li class='post-reply'>
                                        <div class="row-fluid single-reply">
                                            <div class="span1 reply-author-image">
                                                <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                            </div><!--/.span10-->
                                            <div class='span11 the-reply'>
                                                <div class='row-fluid'>
                                                    <span class='user-name'>User Name</span>
                                                    <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                                </div><!--/.row-fluid-->

                                                <div class='row-fluid reply-body'>
                                                    Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                                accusantium omnis tempora maiores ratione unde accusamus.
                                                </div><!--/.row-fluid reply-body-->
                                                
                                                <div class='row-fluid'>

                                                    <div class="reply-controls">
                                                        <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                        <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                        <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                                    </div><!--/.reply-controls-->
                                                </div><!--/.row-fluid-->
                                            </div><!--/span10-->
                                        </div><!--/.row-fluid-->
                                    </li>

                                    <li class='post-reply'>
                                        <div class="row-fluid single-reply">
                                            <div class="span1 reply-author-image">
                                                <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                            </div><!--/.span10-->
                                            <div class='span11 the-reply'>
                                                <div class='row-fluid'>
                                                    <span class='user-name'>User Name</span>
                                                    <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                                </div><!--/.row-fluid-->

                                                <div class='row-fluid reply-body'>
                                                    Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                                accusantium omnis tempora maiores ratione unde accusamus.
                                                </div><!--/.row-fluid reply-body-->
                                                
                                                <div class='row-fluid'>

                                                    <div class="reply-controls">
                                                        <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                        <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                        <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                                    </div><!--/.reply-controls-->
                                                </div><!--/.row-fluid-->
                                            </div><!--/span10-->
                                        </div><!--/.row-fluid-->
                                    </li>

                                </ul>
                            </li>

                            <li class='post-reply'>
                                        <div class="row-fluid">
                                            <div class="span1 reply-author-image">
                                                <img class="img-circle" alt="75x75" src="http://placehold.it/75x75">
                                            </div><!--/.span10-->
                                            <div class='span11 the-reply'>
                                                <div class='row-fluid'>
                                                    <span class='user-name'>User Name</span>
                                                    <span class='reply-date'>5 August, 2013 </span> <a href='#link-to-this-comment'>#</a>
                                                </div><!--/.row-fluid-->

                                                <div class='row-fluid reply-body'>
                                                    Dicta ea nihil voluptas ab repellat debitis et aperiam ut explicabo qui alias velit 
                                                accusantium omnis tempora maiores ratione unde accusamus.
                                                </div><!--/.row-fluid reply-body-->
                                                
                                                <div class='row-fluid'>

                                                    <div class="reply-controls">
                                                        <a class="btn btn-mini btn-info" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/star">+1</a>
                                                        <a class="btn btn-mini btn-danger" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/103/delete">Delete</a>
                                                        <a class="btn btn-mini btn-primary" href="http://dev.surrounds.me/forum/feature-request/topic/add-a-new-feature-for-automation-testing-of-this-application-and-it-has-to-be-added-to-the-value-thi-51fc9f6f0c440/post/reply?reply=103">Reply</a>
                                                    </div><!--/.reply-controls-->
                                                </div><!--/.row-fluid-->
                                            </div><!--/span10-->
                                        </div><!--/.row-fluid-->
                            </li>
                        </ol>
                    </div><!--/.reply-content-->
                </div><!--/.box box-nomargin-->

                <div class='box write-reply box-nomargin'>
                    <div class='box-header'>
                        <div class='title'>
                            Write a Reply
                        </div><!--/.title-->
                        <textarea id="body" class="span12" cols="50" rows="10" name="body" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 225px;"></textarea>

                    </div><!--/.box-header-->
                    <div class='box-content'>
                        
                        <select id="post_as" class="span8" name="post_as">
                            <option value="user">User Name</option>
                            <option value="brand">Company Name</option>
                            </select>
                        <input id="btn_submit" class="btn btn-large pull-right btn-success" type="submit" value="Submit Reply">
                    </div>

                </div><!--/.box- box-nomargin-->

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
                            <div class='title'><i class="icon-user" style='margin-left:2px; margin-right:2px;'> </i> Recently Active</div>
                            
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
                            <div class='title'><i class="icon-bar-chart" style='margin-left:-6px; margin-right:2px;'> </i> Community Stats</div>
                            
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