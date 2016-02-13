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

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Reply to Comment
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
                        Reply to Comment
                    </div>

                </div><!--/.box-header-->

                <div class="box-content">
                    <div class='row-fluid'>

                        <div class='post-comment'> 
                            <div class='comment-info'>
                                <img src="http://placehold.it/30x30" class='img-circle'> <span class='comment-author'><strong>User 23233</strong></span></p>
                            </div><!--/.comment-info-->
                            <div class='comment-text'>
                                <blockquote>
                                <p>"aklsjdfladfjs"</p>
                                </blockquote>
                            </div><!--/.comment-text-->
                        </div><!--/.post-comment-->
                    </div><!--/.row-fluid-->
                    <hr class='normal'>

                    <label for='post_as'>Reply as: </label>
                    <select id="post_as" class="span8" name="post_as">

                        <option value="user">User Name</option>
                        <option value="brand">Company Name</option>
                    </select>
            
                    <textarea id="body" class="span12" cols="50" rows="10" name="body" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 225px;" placeholder='Enter your Post content'></textarea>

                    <div class="row-fluid add-tags">
                        <label for="tags"><i class='icon-tag muted'> </i> Add a Tag to your reply</label>
                        <div class='input-block-level' id='select2-tags'></div>
                    </div>

                    <hr class='normal'>

                    <div class='row-fluid'>
                         <button id="btn_submit" class="btn btn-large btn-info" type="submit"><i class="icon-arrow-left"> </i> Go Back</button>
                        <button id="btn_submit" class="btn btn-large pull-right btn-success" type="submit">Publish Reply <i class='icon-share-alt'> </i> </button>
                    </div><!--/.row-fluid-->
        
                </div> <!--/.box-content-->
                
            </div> <!--/.box post-->

        

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