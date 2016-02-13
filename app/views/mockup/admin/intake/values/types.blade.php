@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin intake-values' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Intake Value Types</span>
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
                            Settings
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Intake
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Values
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Types
                        </li>

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Manage the Types of Values that you assign
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Manage Consumer Groups</a>
                <a class='btn btn-default' role='button'>Manage Values</a>
                <a class='btn btn-default' role='button'>Intake Questions</a>
              
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Existing Value Types</div>
                        <div class='actions'>
                            <a class='btn btn-small' href='#modal-new-type' role='button' data-toggle='modal'><i class='icon-plus'> </i>New Type</a> 
                            
                        </div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>                                    
                            <th>
                                ID
                            </th>

                            <th>
                               Name
                            </th>
                            <th>
                                Description
                            </th>                              
                        
                            <th>
                                Actions
                            </th>                                    
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='ID'>1</td>
                                <td data-title='Name'>Entity</td>
                                <td data-title='Description'>The type of entity that a business is</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-type' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini'><i class='icon-remove'> </i> Delete</a>   
                                </td>
                            </tr>

                            <tr>
                                <td data-title='ID'>2</td>
                                <td data-title='Name'>Industry</td>
                                <td data-title='Description'>The industry a business operates in</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-type' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini'><i class='icon-remove'> </i> Delete</a>   
                                </td>
                            </tr>

                            <tr>
                                <td data-title='ID'>5</td>
                                <td data-title='Name'>Platform</td>
                                <td data-title='Description'>The social network used</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-type' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini'><i class='icon-remove'> </i> Delete</a>   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                 
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->                    
    </div><!--/.span12-->


        <div class='modal hide fade' id='modal-new-type' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Create a new Value Type</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Name</label><p class='help-block'>What would you like to call this value type?</p>
                        <div class='controls'>
                            <input id='type_name' class='input-block-level' placeholder='Ex: Goal' type='text'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Description</label><p class='help-block'>How would you describe this value?</p>
                        <div class='controls'>
                            <textarea id='type_description' class='input-block-level' placeholder='Ex: Goal is what the company wishes to achive'></textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i> Create Value Type</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->


        <div class='modal hide fade' id='modal-edit-type' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Edit Value Type</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Name</label><p class='help-block'>What would you like to call this value type?</p>
                        <div class='controls'>
                            <input id='type_name' class='input-block-level' placeholder='Ex: Goal' type='text' value='Entity'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Description</label><p class='help-block'>How would you describe this value?</p>
                        <div class='controls'>
                            <textarea id='type_description' class='input-block-level' placeholder='Ex: Goal is what the company wishes to achive'>The type of entity that a business is</textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i> Save Changes</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->


</div><!--/.row-fluid #content-wrapper-->
    
@stop