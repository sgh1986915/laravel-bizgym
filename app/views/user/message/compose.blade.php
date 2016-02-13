@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 forum forum-post'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-comment'></i>
                        <span>Inbox</span>
                        <i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Create New Message</span>
                        
                    </h1>
                </div> <!--/.span9-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->
        
    </div><!--/.span12-->
    <div class='row-fluid user-messages'>
        @widget('message::compose')
    </div><!--/.row-fluid-->
</div><!--/.row-fluid #content-wrapper-->


@stop