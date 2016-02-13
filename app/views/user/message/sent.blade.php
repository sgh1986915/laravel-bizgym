@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
               <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-reply'></i>
                        <span>Outbox</span>
                        
                        
                    </h1>
                </div> <!--/.span9-->
                <div class="span3 hidden-phone dash-cta">
                    
                </div> <!--/.span3 dash-cta-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    </div><!--/.span12-->
    <div class='row-fluid user-messages'>
        <div class="span12">
            @widget('message::sent', $user)
        </div><!--/.span12 box-->
    </div><!--/.row-fluid-->
</div><!--/.row-fluid #content-wrapper-->


@stop