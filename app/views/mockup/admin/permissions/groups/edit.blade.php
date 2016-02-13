@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Edit Group</span>
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
                            Permissions
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Groups
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Company Executives
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Edit
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Editing Company Executive Permissions
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Groups</a>
                <a class='btn btn-default' role='button'>Go to Permissions</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid'>
            <div class='span8 box'>
               
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='row-fluid'>
                                <div class='span8'>
                                    <div class='control-group'>
                                        <label class='control-label'>Group Name</label>
                                        <div class='controls'>
                                        
                                            <input class='span9' id='question-name' value='Company Executives' type='text'>
                                            
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class='control-group'>
                                        <label class='control-label'>Group Type</label><p class='help-block'>Is this a system-wide group, or a group with a company?</p>
                                        <div class='controls'>
                                            <select id="group-type" class="" name="priority">
                                                <option value="0">System</option>
                                                <option selected="selected" value="1">Company</option>
                                            </select>
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Group Permissions</label><p class='help-block'>What should this group be able to do?</p>
                                        <div class="controls">
                                            <label class='checkbox'><input type='checkbox' value=''>Access Admin</label>
                                            <label class='checkbox'><input type='checkbox' value='' checked>Create a Brand</label>
                                            <label class='checkbox'><input type='checkbox' value=''checked>Delete a Brand</label>
                                            <label class='checkbox'><input type='checkbox' value=''checked>Download Marketplace items</label>
                                        </div><!--/.controls-->
                                    </div> <!--/.control-group-->

                                </div><!--/.span8--> 

                            </div><!--/.row-fluid-->

                            </fieldset>
                            <div class='form-actions' style='margin-bottom: 0;'>
                                <div class='text-right'>
                                    <div class='btn btn-default btn-large'>
                                        <i class='icon-arrow-left'></i>
                                        Go Back to Groups
                                    </div>

                                    <div class='btn btn-primary btn-large'>
                                        <i class='icon-save'></i>
                                        Save This Group
                                    </div>
                                </div>
                            </div><!--/.form-actions-->
                        </form>
                </div><!--/.box-content-->
            </div><!--/.span8 box-->

            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>Helpful tips</p>

                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>Group names should be associated with a type of user</li>
                            <li>Select all of the appropriate permissions before creating the group</li>
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->

        </div><!--/.row-fluid-->
    

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop