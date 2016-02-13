@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 inbox'>
        <div class='span12 inbox'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-comment'></i>
                        <span>Inbox</span>
                        
                        
                    </h1>
                </div> <!--/.span9-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->
    <div class='row-fluid'>
        @widget('message::overview')
    </div><!--/.row-fluid-->
</div><!--/.row-fluid #content-wrapper-->


@stop