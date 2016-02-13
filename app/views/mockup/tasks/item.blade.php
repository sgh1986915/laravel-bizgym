@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid tasks' id='content-wrapper'>
  
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
                    <a class='btn btn-default'>Return to Project</a>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid'>

            <div class='span8'>
                <div class='row-fluid'>  
                    <div class="span12 box">
                        <div class="box-header green-background">
                            <div class="title">
                                <a class='list-title done-title' data-pk='1'>Buld The Igloo </a> 
                            </div><!--/.title-->
                            <span class='list-name'>In Do List</span>
                            <div class="actions">
                                <a class='new-card'><i class='icon-plus-sign'></i> </a>
                            </div><!--/.actions-->
                        </div><!--/.box-header-->
                        <div class="box-content">
                            <div class='card-input'>
                                <div class="input-append">
                                    <input id="appendedInputButtons" type="text" placeholder='New Task Item'>
                                    <button class="btn" type="button"><i class='icon-pencil'> </i></button>
                                </div>
                            </div><!--/.card-input-->

                            <div class='dd project-tasks'>
                            <ol class='dd-list'>
                                <li class='dd-item complete dd-nochildren' data-id='1'>
                                    <div class='dd-handle'>
                                        Google something
                                    
                                    </div><!--/.dd-handle-->
                                </li>
                                <li class='dd-item dd-nochildren' data-id='2'>
                                    <div class='dd-handle'>
                                        Clean the Bench
                                     
                                    </div>
                                </li>
                                <li class='dd-item dd-nochildren' data-id='3'>
                                    <div class='dd-handle'>
                                        Build the Igloo
                                        <div class='card-action'><a class='dd-nodrag'><i class='icon-expand-alt'> </i> Show Details</a></div><!--/.small pull-right-->
                                        <div class='collapse card-details'>
                                            <div class='row-fluid'>
                                                <ul class='unstyled project-details'>
                                                    <li><span class='detail-title'>Assigned To:</span><img src="http://bizgym.dev/media/user/profile/1?size=mini" class='img-circle'></li>
                                                    <li><span class='detail-title'>Status:</span><span class='label label-large label-success'>In Progress</span></li>
                                                    <li><span class='detail-title'>Due Date:</span>December 20, 2013</li>
                                                    <li><span class='detail-title'>Tags:</span>
                                                        <ul class='unstyled inline tags'>
                                                            <li><i class='icon-tag muted'> </i> Building</li>
                                                            <li><i class='icon-tag muted'> </i> Operations</li>
                                                            <li><i class='icon-tag muted'> </i> Growth</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.collapase-->
                                    </div>

                                    
                                </li>
                            </ol>
                            </div><!--/.dd-->
                        </div><!--/.box-content-->
                    </div><!--/.span12 box-->
                </div><!--/.row-fluid-->

                <div class='row-fluid'>
                    <div class='span12'>
                        <div class='box'>

                        <div class='box-header'>
                            <div class='title'>Task Card Activity</div>
                        </div>
                        <ul class='unstyled project-activity'>
                            <li>
                                <div class='box'>
                                    <div class='box-content'>
                                        <i class='icon-plus-sign'> </i> <strong>User Bob</strong> complated <strong>Clean the Car</strong><span class='muted'> 9/30/13 at 5:30 PM</span>
                                    </div><!--/.box-content-->
                                </div><!--/.box-->
                            </li>

                            <li>
                                <div class='box'>
                                    <div class='box-content'>
                                        <i class='icon-plus-sign'> </i> <strong>Jimmy Kimmel</strong> moved <strong>Dig a Pool</strong> from Do to Doing. <span class='muted'>9/30/13 at 5:30 PM</span>
                                    </div><!--/.box-content-->
                                </div><!--/.box-->
                            </li>
                        
                            <li>
                                <div class='box'>
                                    <div class='box-content'>
                                        <i class='icon-magic'> </i> <strong>User Bob</strong> created this project.  <span class='muted'>9/1/13 at 5:30 PM</span>
                                    </div><!--/.box-content-->
                                </div><!--/.box-->
                            </li>

                        </ul>
                    </div><!--/.box-->
                    </div><!--.span8-->
                </div><!--/.row-fluid-->

            </div><!--/.span8-->

            <div class='span4'>
                <div class='row-fluid'>
                    <div class="progress progress-primary">
                        <div class="bar" style="width: 33%">33%</div>
                    </div>
                </div><!--/.row-fluid-->
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-content'>
                            <div class='lead'>
                                Task Card Details
                            </div><!--/.lead-->

                            <div class='row-fluid'>

                                <ul class='unstyled project-details'>
                                    <li><span class='detail-title'>Status</span><span class='label label-large label-success'>In Progress</span></li>
                                    <li><span class='detail-title'>Due Date</span>December 20, 2013</li>
                                    <li><span class='detail-title'>Tags</span>
                                        <ul class='unstyled inline tags'>
                                            <li><i class='icon-tag muted'> </i> Building</li>
                                            <li><i class='icon-tag muted'> </i> Operations</li>
                                            <li><i class='icon-tag muted'> </i> Growth</li>
                                        </ul>
                                    </li>
                                    <li><span class='detail-title'>Options</span><a class='btn btn-mini'>Follow <i class='icon-plus-sign'> </i> </a></li>

                                </ul>

                            </div><!--/.row-fluid-->
                            
                            

                        </div><!--/.box-content-->
                    </div><!--/.span12 box-->
                </div><!--/.row-fluid-->
            </div><!--/span4-->

        </div><!--/.row-fluid-->

        


            <div class='modal hide fade' id='modal-new-member' role='dialog' tabindex='-1'>
                <div class='modal-header red-background'>
                    <button class='close' data-dismiss='modal' type='button'>&times;</button>
                    <h3>Add a Member to this project</h3>
                </div><!--/.modal-header-->
                <div class='modal-body'>
                    <form class='span8'>
                        <div class='lead'>
                            Select users to add to this project space. All project members will receive alerts related to this project.
                        </div>

                        <div class='control-group'>
                            <label class='control-label'>Specify which users</label><p class='help-block'></p>
                            <div class='controls'>
                                <div class='input-block-level company-users' id='project-member'></div>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                    
                    </form>
                    
                </div><!--/.modal-body-->

                <div class='modal-footer'>
                    <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                     <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Add Member</button>
                </div><!--/.modal-footer-->
            </div><!--/.modal hide fade-->


    </div><!--/.span12-->     
</div><!--/.row-fluid #content-wrapper-->

@stop

@section('inline_scripts')
@parent

    $(".company-users").select2({
    tags: ["Abe Lincoln", "Another User", "C User"],
    tokenSeparators: [",", " "],
    placeholder: "Type names of people to share with "
    });




@stop
