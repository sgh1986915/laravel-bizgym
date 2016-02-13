@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-comment'></i>
                        <span>Inbox</span> <i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">{{ Input::has('reply') ? 'Reply' : 'View Message' }}</span>
                        
                        
                    </h1>
                </div> <!--/.span9-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->

    @if (!Input::has('reply'))
    <div class='row-fluid inbox message'>
        @widget('message::detail',$id,$from)
    </div><!--/.row-fluid-->
    @endif

    <div class='row-fluid compose-your-reply'>
        @widget('message::reply',$id,$from)
    </div>
</div><!--/.row-fluid #content-wrapper-->


@stop