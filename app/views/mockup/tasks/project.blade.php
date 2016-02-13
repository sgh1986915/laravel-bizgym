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
                    <select class='input-large select2'>
                        <option>Switch Project</option>
                        <option>Project</option>
                    </select>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    

        <div class="row-fluid section-header">
            <div class='title'>
                Lists for Cleaning Project
            </div><!--/.title-->

            <span class='privacy'><a href='#modal-edit-privacy' data-toggle='modal' role='button'><i class='icon-unlock'> </i> Visible to Company</a>
            </span>

            <div class='pull-right'>
          
                <div class="input-append">
                    <input class='card-text' id="appendedInputButton" type="text" placeholder='List Name'>
                    <button class="btn" type="button"><i class='icon-pencil'> </i> New List</button>
                </div>
            
            </div><!--/.pull-right-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class="span4 box">
                <div class="box-header green-background">
                    <div class="title">
                        <a class='list-title done-title' data-pk='1'>Do </a> 
                    </div><!--/.title-->
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
                        <li class='dd-item dd-nochildren' data-id='1'>
                            <div class='dd-handle'>
                                Google something
                            <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                            </div><!--/.dd-handle-->
                        </li>
                        <li class='dd-item dd-nochildren' data-id='2'>
                            <div class='dd-handle'>
                                Clean the Bench
                              <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                            </div>
                        </li>
                        <li class='dd-item dd-nochildren' data-id='3'>
                            <div class='dd-handle'>
                                Build the Igloo
                                <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                            </div>
                        </li>
                    </ol>
                    </div><!--/.dd-->
                </div><!--/.box-content-->
            </div><!--/.span4 box-->

            <div class="span4 box">
                <div class="box-header green-background">
                    <div class="title">
                        <a class='list-title done-title' data-pk='1'>Doing </a> 
                    </div><!--/.title-->
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
                            <li class='dd-item dd-nochildren' data-id='4'>
                                
                                <div class='dd-handle'>
                                    Dig a Pool
                                    <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                                </div>
                             
                            </li>
                            <li class='dd-item dd-nochildren' data-id='5'>
                               
                                <div class='dd-handle'>
                                    Find Walter White
                                    <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                                </div>
                                
                            </li>
                            <li class='dd-item dd-nochildren' data-id='6'>
                              
                                <div class='dd-handle'>
                                    Invent Chopsticks
                                    <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                                </div>
                           
                            </li>
                        </ol>
                    </div><!--/.dd-->
                </div><!--/.box-content-->
            </div><!--/.span4 box-->

            <div class="span4 box">
                <div class="box-header green-background">
                    <div class="title">
                        <a class='list-title done-title' data-pk='1'>Done </a> 
                    </div><!--/.title-->
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
                            <li class='dd-item dd-nochildren' data-id='7'>
                              
                                <div class='dd-handle'>
                                    Clean the Car
                                    <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                                </div>
                                
                            </li>
                            <li class='dd-item dd-nochildren' data-id='8'>
                       
                                <div class='dd-handle'>
                                    Jiggle the Handle
                                    <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                                </div>
                          
                            </li>
                            <li class='dd-item dd-nochildren' data-id='9'>
                     
                                <div class='dd-handle'>
                                    Cook Dinner
                                    <div class='item-action'><a class='dd-nodrag' href='project/item'><i class='icon-cog'> </i> Tasks & Options</a></div><!--/.small pull-right-->
                                </div>
                         
                            </li>
                        </ol>
                    </div><!--/.dd-->
                </div><!--/.box-content-->
            </div><!--/.span4 box-->

        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span8'>
                <div class='box'>

                <div class='box-header'>
                    <div class='title'>Project Activity</div>
                </div>
                <ul class='unstyled project-activity'>
                    <li>
                        <div class='box'>
                            <div class='box-content'>
                                <i class='icon-plus-sign'> </i> <strong>User Bob</strong> added <strong>Clean the Car</strong> to Done. <span class='muted'>9/30/13 at 5:30 PM</span>
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

            <div class='span4'>
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-header'>
                            <div class='title'>
                                Project Members
                            </div><!--/.title-->

                            <div class='actions'><a class='btn btn-small' href='#modal-new-member' data-toggle='modal' role='button'><i class='icon-user'> </i>Add a Member</a></div>
                        </div><!--/.box-header-->
                        <div class='box-content box-padding'>
                            <ul class='unstyled inline project-members'>
                                <li><img src="http://flickholdr.com/50/50/avatar"></li> 
                                <li><img src="http://flickholdr.com/50/50/face"></li> 
                            </ul>

                        </div><!--/.box-content-->
                    </div><!--/.span12 box-->
                </div>
            </div><!--/span4-->

        </div>

            <div class='modal hide fade' id='modal-edit-privacy' role='dialog' tabindex='-1'>
                <div class='modal-header red-background'>
                    <button class='close' data-dismiss='modal' type='button'>&times;</button>
                    <h3>Change Visibility</h3>
                </div><!--/.modal-header-->
                <div class='modal-body'>
                    <form class='span8'>
                        <div class='lead'>
                            Who can view this project?
                        </div>
                        
                        <div class='control-group'>
    
                            <div class='controls'>
                                <label class='checkbox'>
                                    <input id='me' type='checkbox' value='option2'>
                                        Just Me
                                </label>

                                <label class='checkbox'>
                                    <input id='company' type='checkbox' value='option2'>
                                        The Entire Company
                                </label>


                                <label class='checkbox'>
                                    <input data-target='#pick-users' data-toggle='collapse' id='change-users' type='checkbox' value='option3'>
                                        Certain users in my Company
                                </label>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->



                        <div class='collapse' id='pick-users'>

                            <div class='control-group'>
                                <label class='control-label'>Specify which users to add</label><p class='help-block'></p>
                                <div class='controls'>
                                    <div class='input-block-level company-users' id='visible-users'></div>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                        </div><!--/.collapse-->

                        


                    </form>
                    
                </div><!--/.modal-body-->

                <div class='modal-footer'>
                    <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                     <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i> Save Changes</button>
                </div><!--/.modal-footer-->
            </div><!--/.modal hide fade-->


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
