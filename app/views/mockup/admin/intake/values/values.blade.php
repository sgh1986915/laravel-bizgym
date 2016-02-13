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
                        <span>Intake Values</span>
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

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Manage Intake Values assigned to User Responses
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Manage Value Types</a>
                <a class='btn btn-default' role='button'>Manage Consumer Groups</a>
                <a class='btn btn-default' role='button'>Intake Questions</a>
              
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Existing Values</div>
                        <div class='actions'>
                            <a class='btn btn-small' href='#modal-new-value' role='button' data-toggle='modal'><i class='icon-plus'> </i>New Value</a> 
                            
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
                                Type
                            </th>
                            <th>
                                Value Name
                            </th>

                            <th>
                                Consumer Group
                            </th>                                 
                        
                            <th>
                                Actions
                            </th>                                    
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='ID'>1</td>
                                <td data-title='Type'>Entity</td>
                                <td data-title='Value Name'>Individual</td>
                                <td data-title='Consumer Group'>Brand</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-value' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini'><i class='icon-remove'> </i> Delete</a>   
                                </td>
                            </tr>

                            <tr>
                                <td data-title='ID'>5</td>
                                <td data-title='Type'>Family</td>
                                <td data-title='Value Name'>Kids</td>
                                <td data-title='Consumer Group'>Consumer</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-value' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini'><i class='icon-remove'> </i> Delete</a>   
                                </td>
                            </tr>


                            <tr>
                                <td data-title='ID'>7</td>
                                <td data-title='Type'>Model</td>
                                <td data-title='Value Name'>E-Commerce</td>
                                <td data-title='Consumer Group'>Global</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-value' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini'><i class='icon-remove'> </i> Delete</a>   
                                </td>
                            </tr>


                            <tr>
                                <td data-title='ID'>12</td>
                                <td data-title='Type'>KPI</td>
                                <td data-title='Value Name'>Get Funded</td>
                                <td data-title='Consumer Group'>Brand</td>
                                <td data-title='Actions'>
                                    <a class='btn btn-mini' href='#modal-edit-value' role='button' data-toggle='modal'>
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


        <div class='modal hide fade' id='modal-new-value' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Create a new Value</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Type</label><p class='help-block'>What type of Value is this?</p>
                        <div class='controls'>
                            <select id="select_value" class="select input-block-level" name="select_value">
                                <option value='0' disabled selected style='display:none;'>Select Type</option>
                                <option value=''>Entity</option>
                                <option value=''>Individual</option>
                                <option value=''>Model</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Name</label><p class='help-block'>What would you like to call this value?</p>
                        <div class='controls'>
                            <input id='value_name' class='input-block-level' type='text'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Group</label><p class='help-block'>What group should this value assign users to?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Group</option>
                                <option value=''>Consumer</option>
                                <option value=''>Brand</option>
                                <option value=''>Global</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i> Create Value</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->


        <div class='modal hide fade' id='modal-edit-value' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Edit a Value</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Type</label><p class='help-block'>What type of Value is this?</p>
                        <div class='controls'>
                            <select id="select_value" class="select input-block-level" name="select_value">
                                <option value='0' disabled selected style='display:none;'>Select Type</option>
                                <option value=''>Entity</option>
                                <option selected value=''>Individual</option>
                                <option value=''>Model</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Name</label><p class='help-block'>What would you like to call this value?</p>
                        <div class='controls'>
                            <input id='value_name' class='input-block-level' type='text' value='individual'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Consumer Group</label><p class='help-block'>What Consumer Group should this value be used for?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Group</option>
                                <option value=''>Consumer</option>
                                <option selected value=''>Brand</option>
                                <option value=''>Global</option>
                            </select>
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