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
                        <span>Create a Rule</span>
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
                            Rules
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            New
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Create a new rule to assign to your groups
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Rules</a>
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
                                        <label class='control-label'>Rule Name</label><p class='help-block'>Give your rule an easy to understand name.</p>
                   
                                        <div class='controls'>
                                            <input class='span9' id='rule-name' placeholder='Ex: Edit a Brand' type='text'>
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class='control-group'>
                                        <label class='control-label'>Rule Slug</label><p class='help-block'>This is what the system will use to call your rule.</p>
                                        <div class='controls'>
                                        
                                            <input class='span9' id='rule-name' placeholder='edit_brand' type='text'>
                                            
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class='control-group'>
                                        <label class='control-label'>Rule Description</label><p class='help-block'>what does this rule do?</p>
                   
                                        <div class='controls'>
                                            <textarea id='inputTextArea1' class='span9' placeholder='Describe your rule' rows='3'></textarea>
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Apply To Groups</label><p class='help-block'>Apply this rule to existing groups</p>
                                        <div class="controls">
                                            <label class='checkbox'><input type='checkbox' value=''>Administrator</label>
                                            <label class='checkbox'><input type='checkbox' value=''>Employee</label>
                                            <label class='checkbox'><input type='checkbox' value=''>Manager</label>
                                            <label class='checkbox'><input type='checkbox' value=''>User</label>
                                        </div><!--/.controls-->
                                    </div> <!--/.control-group-->

                                </div><!--/.span8--> 

                            </div><!--/.row-fluid-->

                            </fieldset>
                            <div class='form-actions' style='margin-bottom: 0;'>
                                <div class='text-right'>
                                    <div class='btn btn-default btn-large'>
                                        <i class='icon-arrow-left'></i>
                                        Go Back to Rules
                                    </div>

                                    <div class='btn btn-primary btn-large'>
                                        <i class='icon-save'></i>
                                        Save This Rule
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
                            <li>Be specific when creating rules</li>
                            <li>Give a good description so that you know what this rule does.</li>
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->

        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop