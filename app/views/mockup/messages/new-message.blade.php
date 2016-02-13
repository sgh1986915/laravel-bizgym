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

        <div class="row-fluid">
            <div class="span12">

                <div class="box post">
                    <div class="box-header muted-background">
                        <div class='title span9'>
                            Create New Message
                        </div>

                    </div><!--/.box-header-->

                    <div class="box-content">
                        
                        <label for='recipient'>Send To:</label>
                        <input class='input span8' type='text' id='select2' placeholder='type user name'>

                        <label for='title'>Message Subject </label>
                        <input id="title" class="span8" type="text" name="title" placeholder='Enter Subject'>

                        
                
                        <textarea class="span12 wysihtml5" cols="40" id="body_" name="body[]" placeholder="Some text here..." rows="10">
                                &lt;h1&gt;Hello!&lt;/h1&gt;</textarea>


                            <div class='row-fluid'>
                                 <button id="btn_submit" class="btn btn-large btn-info" type="submit"><i class="icon-arrow-left"> </i> Return to Inbox</button>
                                <button id="btn_submit" class="btn btn-large pull-right btn-success" type="submit">Send Message <i class='icon-share-alt'> </i> </button>
                            </div><!--/.row-fluid-->
                
            
                    </div> <!--/.box-content-->
                    
                </div> <!--/.box post-->

            

            </div><!--/.span8-->

        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->


@stop