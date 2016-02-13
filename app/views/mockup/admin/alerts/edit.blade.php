@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin menu-item' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Edit Alert</span>
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
                            Alerts
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Test Alert
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
                                <label class='control-label'>Alert Title</label>
                                <div class='controls'><p class='help-block'>What should you call this alert?</p>
                                
                                    <input class='span6' id='full-name' value="Test Alert" type='text'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Alert Text</label><p class='help-block'>What should this alert say?</p>
                                <div class='controls'>
                                    <textarea id='inputTextArea1' class='span9'rows='3'>This alert says all sorts of things. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='hr-normal'>


                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Alert Expiration Date</label><p class='help-block'>When do you want this alert to expire?</p>
                                <div class='controls'>
                                    <div class='datetimepicker input-append' id='datetimepicker'>
                                            <input class='input-medium' data-format='MM/dd/yyyy HH:mm:ss PP' value="09/23/2013 03:23:11" type='text'>
                                            <span class='add-on'>
                                                <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                    </div> <!--/.datetimepicker-->
                                </div><!--/.controls-->
                                <div class='controls'>
                                    <label class="checkbox inline">
                                        <input id="inlineCheckbox2" type="checkbox" value="option2">
                                        Alert does not have a set expiration date
                                    </label>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                             <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Alert Image</label><p class='help-block'>What image would you like to upload for your alert?</p>
                                <div class='controls'>
                                    <div class='row-fluid' style='margin:1em 0em;'>
                                        <img src='http://placehold.it/150x150'>
                                    </div><!--/.row-fluid-->


                                    <div class='row-fluid'>
                                        <span class="btn btn-default fileinput-button shift-up">
                                            <i class="icon-picture icon-white"></i>
                                            <span>Upload New Image</span>
                                            <input type="file" name="files[]" multiple="" data-bfi-disabled="">
                                        </span>

                                    </div> <!--/.row-fluid-->

                                </div><!--/.controls-->


                                <div class='controls'>
                                    <div class='row-fluid '>
                                        <label class="checkbox inline">
                                            <input id="inlineCheckbox2" type="checkbox" value="option2">
                                        Alert does not need an image
                                        </label>
                                    </div><!--/.row-fluid-->
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label">Who recevies this alert?</label>
                                <p class='help-block'>Speficfy which users can receive this alert</p>
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="group_1" value="1"> Administrator<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_2" value="1"> Agency<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="group_3" value="1"> Subscriber<br />
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="group_7" value="1"> User<br />
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

                             <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Alert Status</label><p class='help-block'>Do you want this alert to be active now? Or keep it inactive for now?</p>
                                <div class="controls">
                                    <select name="menu">
                                        <option value="footer">Active</option>
                                        <option selected="selected" value="Header">Inactive</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                        </fieldset>
                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Go Back to Alerts
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

            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>Some tips for creating alerts
                        <i class="icon-smile"></i></p>
                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>Specify an image to enhance the meaning of your alert </li>
                            <li>Save your alert for a later time by setting it as inactive</li>  
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->

       



    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop