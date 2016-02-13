@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid team' id='content-wrapper'>
  
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class='pull-left'>
                    <h1>
                        <i class='icon-group text-contrast'></i>
                        <span>Task Management</span>
                    </h1>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    

        <div class="row-fluid section-header">
            <div class='title'>
                Lists for Cleaning Project
            </div><!--/.title-->

            <div class='pull-right'>
                <a class='btn btn-large'><i class='icon-pencil'> </i> New List</a> 
                <select class='input-medium'>
                    <option>Switch Project</option>
                    <option>Project</option>
                </select>
            </div><!--/.pull-right-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class="span4 box">
                <div class="box-header red-background">
                    <div class="title">
                        Do
                    </div><!--/.title-->
                    <div class="actions">
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class="box-content">
                    <ul class='unstyled'>
                        <li class='task'><a href='clean'>Clean the House</a></li>
                    </ul>
                </div><!--/.box-content-->
            </div><!--/.span4 box-->


            <div class="span4 box">
                <div class="box-header red-background">
                    <div class="title">
                        Doing
                    </div><!--/.title-->
                    <div class="actions">
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class="box-content">
                    <ul class='unstyled'>
                        <li class='task'><a href='clean'>Clean the House</a></li>
                    </ul>
                </div><!--/.box-content-->
            </div><!--/.span4 box-->


            <div class="span4 box">
                <div class="box-header red-background">
                    <div class="title">
                        Done <i class='icon-check-circle pull-right'></i> 
                    </div><!--/.title-->
                    <div class="actions">
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class="box-content">
                    <ul class='unstyled'>
                        <li class='task'><a href='clean'>Clean the House</a></li>
                    </ul>
                </div><!--/.box-content-->
            </div><!--/.span4 box-->


    </div><!--/.span12-->     
</div><!--/.row-fluid #content-wrapper-->

@stop