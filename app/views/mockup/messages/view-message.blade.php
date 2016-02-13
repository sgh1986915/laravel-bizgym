@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 inbox message'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-comment'></i>
                        <span>Inbox</span> <i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">View Message</span>
                        
                        
                    </h1>
                </div> <!--/.span9-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header orange-background'>
                    <div class='title'> TPS Reports</div>
                    <div class='actions'>
                        Recieved August 15th, 2013 10:22 AM
                    </div><!--/.actions-->
                </div>
                

                <div class='box-content box-no-padding'>
                    
                    
                    <div class='latest-message'>

                        <div class='sender-info'>
                            <span class='sender-img'>
                                <img src="http://placehold.it/40x40" alt='34x34' class='img-circle'>
                            </span><!--/.sender-img-->
                            <span class='sender-name'>
                            Gino Somthing </span>
                        </div><!--/.row-fluid-->

                        <div class='latest-message-content'>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.

                        </div><!--/.latest-message-content-->

                        <button id="btn_submit" class="btn pull-right btn-success" type="submit">Write Reply <i class=' icon-pencil'> </i> </button>

                    </div><!--/.row-fluid-->


                    <div class='row-fluid previous-section-header'>
                        <h5>Previous Correspondence</h5>
                    </div><!--/.row-fluid-->
                    <div class='chat chat scrollable' data-scrollable-height='200' data-scrollable-start='top'>
                        <ul class='unstyled list-hover list-striped'>
                            <li class='message'>
                                <div class='avatar'>
                                    <img class='img-circle' src='http://placehold.it/23x23'>
                                </div>
                                <div class='name-and-time'>
                                    <div class='name pull-left'>
                                        <small>
                                            <a href="#" class="text-contrast">You</a>
                                        </small>
                                    </div>
                                    <div class='time pull-right'>
                                        <small class='date pull-right muted'>
                                            <span class='timeago'>May 30, 2013 - 10:22am</span>
                                            <i class='icon-time'></i>
                                        </small>
                                    </div>
                                </div>
                                <div class='body'>
                                    <a href='message.html'>Sed dolorum doloribus et.....</a>
                                </div>
                            </li>
                            <li class='message'>
                                <div class='avatar'>
                                    <img alt='Avatar' class='img-circle' height='23' src='assets/images/avatar.jpg' width='23'>
                                </div>
                                <div class='name-and-time'>
                                    <div class='name pull-left'>
                                        <small>
                                            <a href="#" class="text-contrast">Gino</a>
                                        </small>
                                    </div>
                                    <div class='time pull-right'>
                                        <small class='date pull-right muted'>
                                            <span class='timeago'>May 30, 2013 - 10:22am</span>
                                            <i class='icon-time'></i>
                                          
                                        </small>
                                    </div>
                                </div>
                                <div class='body'>
                                    <a href='message.html'>Qui voluptas ex et ducimus beatae qui voluptate sit error.....</a>
                                </div>
                            </li>
                            <li class='message'>
                                <div class='avatar'>
                                    <img class='img-circle' src='http://placehold.it/23x23'>
                                </div>
                                <div class='name-and-time'>
                                    <div class='name pull-left'>
                                        <small>
                                            <a href="#" class="text-contrast">You</a>
                                        </small>
                                    </div>
                                    <div class='time pull-right'>
                                        <small class='date pull-right muted'>
                                            <span class='timeago'>May 30, 2013 - 10:22am</span>
                                            <i class='icon-time'></i>
                                        </small>
                                    </div>
                                </div>
                                <div class='body'>
                                    <a href='message.html'>Sed dolorum doloribus et.....</a>
                                </div>
                            </li>
                            <li class='message'>
                                <div class='avatar'>
                                    <img alt='Avatar' class='img-circle' height='23' src='assets/images/avatar.jpg' width='23'>
                                </div>
                                <div class='name-and-time'>
                                    <div class='name pull-left'>
                                        <small>
                                            <a href="#" class="text-contrast">Gino</a>
                                        </small>
                                    </div>
                                    <div class='time pull-right'>
                                        <small class='date pull-right muted'>
                                            <span class='timeago'>May 30, 2013 - 10:22am</span>
                                            <i class='icon-time'></i>
                                          
                                        </small>
                                    </div>
                                </div>
                                <div class='body'>
                                    <a href='message.html'>Qui voluptas ex et ducimus beatae qui voluptate sit error.....</a>
                                </div>
                            </li>
                           
                        </ul>
                    </div> <!--/.scrollable-->
                </div><!--/box-content-->

               
            </div><!--/.span12 box bordered-box organge-border-->
        </div><!--/.row-fluid-->


         <div class='row-fluid compose-your-reply'>
                    <div class='span12 box'>
                        <div class='box-header muted-background'>
                            <div class='title'>Write a Response</div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div>
                        <div class='box-content'>
                            <textarea class="span12 wysihtml5" cols="40" id="body_" name="body[]" placeholder="Some text here..." rows="10">
                                &lt;h1&gt;Hello!&lt;/h1&gt;</textarea>


                            <div class='row-fluid'>
                                 <button id="btn_submit" class="btn btn-large btn-info" type="submit"><i class="icon-arrow-left"> </i> Return to Inbox</button>
                                <button id="btn_submit" class="btn btn-large pull-right btn-success" type="submit">Send Message <i class='icon-share-alt'> </i> </button>
                            </div><!--/.row-fluid-->



                        </div><!--/.box-content-->


                    </div><!--/.span12 box-->
                </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->

    
@stop