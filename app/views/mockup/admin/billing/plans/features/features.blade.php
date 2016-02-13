@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin plans' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Features</span>
                    </h3>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                            <a href="index.html"><i class='icon-dashboard'> </i> Admin
                            </a>
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Billing
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Plans
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Features
                        </li>

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Available Features for your Plans
            </div>
            <div class='btn-group'>
                <a class='btn btn-default btn-primary' role='button' data-toggle='modal' href='#modal-new-group'><i class='icon-plus'> </i> Create a Feature Group</a>
                <a class='btn btn-default' role='button'>Return to Plans</a>
            </div><!--/.btn-group-->      
        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid feature-group'>
            <div class='span12 box'>
                <div class='box-header muted-background'>
                    <div class='title'>
                        Feature Group Name
                    </div><!--/.title-->
                    <div class='actions'>
                        <a class='btn btn-small' href='#modal-new-feature' data-toggle='modal' role='button'><i class='icon-plus-sign'> </i> New Feature</a>
                        <a class='btn btn-small' href='#modal-edit-group' data-toggle='modal' role='button'><i class='icon-edit'> </i> Edit Group</a>
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class='box-content'>      
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Options</th>
                            <th>Mapped Variable</th>
                            <th>Action</th>  
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Icon'><i class='icon-trophy'></td>
                                <td data-title='Title'>Expert Business Advice</td>
                                <td data-title='Description'>Access our knowledgebase</td>
                                <td data-title='Options'><span class='muted'>None</span></td>
                                <td data-title='Mapped Variable'><span class='muted'>None</span></td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-feature'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'> </i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title='Icon'><i class='icon-plane'></td>
                                <td data-title='Title'>Business Reporting</td>
                                <td data-title='Description'>Access our knowledgebase</td>
                                <td data-title='Options'>Daily, Weekly, Monthly</td>
                                <td data-title='Mapped Variable'>business_advice</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-feature'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'> </i> Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/. span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid feature-group'>
            <div class='span12 box'>
                <div class='box-header muted-background'>
                    <div class='title'>
                        Another Group Name
                    </div><!--/.title-->
                    <div class='actions'>
                        <a class='btn btn-small' href='#modal-new-feature' data-toggle='modal' role='button'><i class='icon-plus-sign'> </i> New Feature</a>
                        <a class='btn btn-small' href='#modal-edit-group' data-toggle='modal' role='button'><i class='icon-edit'> </i> Edit Group</a>
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class='box-content'>      
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Options</th>
                            <th>Mapped Variable</th>
                            <th>Action</th>  
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Icon'><i class='icon-user'></td>
                                <td data-title='Title'>Multiple Employees</td>
                                <td data-title='Description'>Grant access to your employees</td>
                                <td data-title='Options'>10, 20, 30</td>
                                <td data-title='Mapped Variable'>employee_number</td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-feature'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'> </i> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title='Icon'><i class='icon-key'></td>
                                <td data-title='Title'>Key to Success</td>
                                <td data-title='Description'>We teach you some cool stuff</td>
                                <td data-title='Options'><span class='muted'>None</span></td>
                                <td data-title='Mapped Variable'><span class='muted'>None</span></td>
                                <td data-title='Action'>
                                    <a class='btn btn-mini' role='button' data-toggle='modal' href='#modal-edit-feature'><i class='icon-edit'> </i> Edit</a>
                                    <a class='btn btn-mini user-action-btn'><i class='icon-trash'> </i> Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/. span12 box-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->

    <div class='modal hide fade' id='modal-new-group' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Add a Feature Group</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this feature group?</p>
                    <div class='controls'>
                        <input id='feature_group' class='input-block-level' placeholder='Ex: Business Planning'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </form>
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i>Create Feature Group</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-edit-group' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Feature Group</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this feature group?</p>
                    <div class='controls'>
                        <input id='feature_group' class='input-block-level' placeholder='Ex: Business Planning' value='Group Name'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </form>
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal'>Cancel</button>
            <button class='btn btn-default user-action-btn'><i class='icon-trash'> </i>Delete Group</button>
            <button class='btn btn-default btn-primary'><i class='icon-save'> </i>Save Changes</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-new-feature' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Add a Feature</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this feature?</p>
                    <div class='controls'>
                        <input id='feature_title' class='input-block-level' placeholder='Ex: Business Planning'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>
                 <div class='control-group'>
                    <label class='control-label'>Icon</label><p class='help-block'>Enter the Font Awesome icon tag for this feature</p>
                    <div class='controls'>
                        <input it='feature_icon' class='input-block-level' placeholder='Ex: icon-trophy'> </input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Description</label><p class='help-block'>Describe the capabilities of this feature</p>
                    <div class='controls'>
                        <textarea class='input-block-level' id='feature_description' rows='3' placeholder='This feature can do really awesome things'></textarea>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Feature Group</label><p class='help-block'>What group does this feature belong to?</p>
                    <div class='controls'>
                        <select id="feature_group" class="select input-block-level" name="feature_group">
                            <option value='0' disabled selected style='display:none;'>Select Group</option>
                            <option value=''>Feature Group Name</option>
                            <option value=''>Another Group Name</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Mapped Variable Name</label><p class='help-block'>If applicable, what slug should the system use to attach this feature to a variable?</p>
                    <div class='controls'>
                        <input id='mapped_variable' placeholder='Ex: variable_name' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Feature Options</label><p class='help-block'>If applicable, what are the different options for this feature? Separate options with commas.</p>
                    <div class='controls'>
                        <input id='feature_options' placeholder='Ex: Daily, Weekly, Monthly' class='input-block-level' type='text'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

            </form>
            
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i>Create Feature</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-edit-feature' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Feature</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this feature?</p>
                    <div class='controls'>
                        <input id='feature_title' class='input-block-level' placeholder='Ex: Business Planning' value='Multiple Employees'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>
                 <div class='control-group'>
                    <label class='control-label'>Icon</label><p class='help-block'>Enter the Font Awesome icon tag for this feature</p>
                    <div class='controls'>
                        <input it='feature_icon' class='input-block-level' placeholder='Ex: icon-trophy' value='icon-user'> </input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Description</label><p class='help-block'>Describe the capabilities of this feature</p>
                    <div class='controls'>
                        <textarea class='input-block-level' id='feature_description' rows='3' placeholder='This feature can do really awesome things'>Allow Multiple employees to access the system</textarea>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Feature Group</label><p class='help-block'>What group does this feature belong to?</p>
                    <div class='controls'>
                        <select id="feature_group" class="select input-block-level" name="feature_group">
                            <option value='0' disabled selected style='display:none;'>Select Group</option>
                            <option value=''>Feature Group Name</option>
                            <option selected value=''>Another Group Name</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Mapped Variable Name</label><p class='help-block'>If applicable, what slug should the system use to attach this feature to a variable?</p>
                    <div class='controls'>
                        <input id='mapped_variable' placeholder='Ex: variable_name' class='input-block-level' type='text' value='employee_number'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Feature Options</label><p class='help-block'>If applicable, what are the different options for this feature? Separate options with commas.</p>
                    <div class='controls'>
                        <input id='feature_options' placeholder='Ex: Daily, Weekly, Monthly' class='input-block-level' type='text' value='Daily, Weekly, Monthly'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

            </form>
            
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Save Changes</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

</div><!--/.row-fluid #content-wrapper-->


    
@stop

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure?')
    
})
@stop