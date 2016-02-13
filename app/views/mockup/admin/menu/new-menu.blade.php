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
                        <span>Create a New Menu</span>
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
                            Menus
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

        <div class='row-fluid'>
            <div class='span8 box'>
               
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='control-group'>
                                <label class='control-label'>Menu Name</label>
                                <div class='controls'><p class='help-block'>What should you call this menu?</p>
                                <div class="controls">
                                    <input class='span6' id='full-name' placeholder='Menu Name' type='text'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Menu Priority</label><p class='help-block'>Where should this menu be placed?</p>
                                <div class="controls">
                                    <select name="priority">
                                        <option value="-10">-10</option>
                                        <option value="-9">-9</option>
                                        <option value="-8">-8</option>
                                        <option value="-7">-7</option>
                                        <option value="-6">-6</option>
                                        <option value="-5">-5</option>
                                        <option value="-4">-4</option>
                                        <option value="-3">-3</option>
                                        <option value="-2">-2</option>
                                        <option value="-1">-1</option>
                                        <option selected="selected" value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->


                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Menu Location</label><p class='help-block'>Where will this menu be accessable on the page?</p>
                                <div class="controls">
                                    <select name="menu">
                                        <option value="footer">Footer</option>
                                        <option selected="selected" value="Header">Header</option>
                                        <option value="sidebar">Sidebar</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->


                            <div class="control-group">
                                <label class="control-label">Permissions</label>
                                <p class='help-block'>Who can view this menu?</p>
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
                                    Save
                                </div>
                            </div>
                        </div><!--/.form-actions-->
                    </form>
                </div><!--/.box-content-->
            </div><!--/.span6 box-->

            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>Keep these things in mind when you create your menu
                        <i class="icon-smile"></i></p>
                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>Group names should be associated with a type of user </li>
                            <li>Select all of the appropriate permissions before creating the group</li>  
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->
            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop