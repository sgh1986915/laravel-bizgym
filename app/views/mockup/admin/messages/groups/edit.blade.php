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
                        <span>Edit Message Group</span>
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
                            Messages
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
                            Test Group
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


        <div class='row-fluid'>
            <div class='span8 box'>
               
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='control-group'>
                                <label class='control-label'>Group Name</label>
                                <div class="controls">
                                    <input class='span6' id='group-name' value='Test Group' type='text'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->


                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Group Description</label><p class='help-block'>Describe this group so that you know the purpose of it</p>
                                <div class='controls'>
                                    <textarea id='inputTextArea1' class='span12'rows='3'> Lorem Ipsum at it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='hr-normal'>

            


                            <div class="control-group">
                                <label class="control-label">Select User Types</label>
                                <p class='help-block'>Who will make up this group?</p>
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_1" value="1"> Administrator<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_2" value="1"> Agency<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_3" value="1"> Subscriber<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_7" value="1"> User<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_10" value="1"> Employee<br />
                                        </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_11" value="1"> Advocate<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_12" value="1"> Author<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_13" value="1"> Manager<br />
                                    </label>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->
                        </fieldset>
                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Go Back
                                </div>

                                <div class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Save Changes
                                </div>
                            </div>
                        </div><!--/.form-actions-->
                    </form>
                </div><!--/.box-content-->
            </div><!--/.span6 box-->


        </div><!--/.row-fluid-->



       



    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop