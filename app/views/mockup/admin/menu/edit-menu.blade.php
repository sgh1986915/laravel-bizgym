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
                        <span>Edit Menu</span>
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
                            Sidebar
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Brand
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Viewing Brand Menu under Sidebar
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Menus</a>
            </div><!--/.btn-group-->

        </div>

        <div class='row-fluid'>
            <div class='span6 box'>
                <div class='box-header'>
                    <div class='title'>
                         <i class='icon-cog text-contrast'></i> Menu Options
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='control-group'>
                                <label class='control-label'>Menu Name</label>
                                <div class='controls'><p class='help-block'>What should you call this menu?</p>
                                <div class="controls">
                                    <input class='span6' id='full-name' value='Brand' type='text'>
                                    
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
                                        <input checked="checked" type="checkbox" name="group_1" value="1"> Administrator<br />
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
                                <div class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Save
                                </div>
                            </div>
                        </div><!--/.form-actions-->
                    </form>
                </div><!--/.box-content-->
            </div><!--/.span6 box-->

            <div class='span6 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-search text-contrast'></i> Menu Filters
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                           <div class='control-group'>
                                <label class='control-label'>Apply Filters</label>
                                <div class='controls'>
                                    <p class='help-block'>Include or exclude this menu on certain pages.</p>
                                
                                    <div class='input-prepend input-append'>
                                        <input id='appendedPrependedDropdownButton' type='text' placeholder='Example: vision/operations'>
                                        <div class='btn-group'>
                                            <button class='btn dropdown-toggle' data-toggle='dropdown'>
                                                Filter Type
                                                <span class='caret'></span>
                                            </button>
                                            <ul class='dropdown-menu'>
                                                <li>
                                                    <a href='#'>Include</a>
                                                </li>
                                                <li>
                                                    <a href='#'>Exclude</a>
                                                </li>
                                               
                                            </ul>
                                        </div><!--/.btn-group-->
                                    </div><!--/.input-->
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->
                        </fieldset>
                        
                            <div class='text-left'>
                                <div class='btn btn-primary'>
                                    <i class='icon-plus'></i>
                                    Add Filter
                                </div>
                            </div>
                    </form>

                <div class='hr'></div>

                <div class="box">
                    <div class="box-header" style='padding-left:0px; font-size:1.2em;'>
                       
                           Existing Filters
                       
                    </div>
                    <div class="box-content">
                        <ul class='unstyled menu-filters list-striped' style='margin-bottom:0px;'>
                            <li>
                                <span class="label label-warning">Exclude</span>
                                <strong>dashboard/brand</strong>
                                <span class="pull-right">
                                <input class="btn btn-danger btn-mini" type="submit" value="X"></span>
                            </li>

                            <li>
                                <span class="label label-success">Include</span>
                                <strong>Admin</strong>
                                <span class="pull-right">
                                <input class="btn btn-mini btn-danger" type="submit" value="X"></span>
                            </li>
                        </ul>
                    </div><!--/.box-content-->
                </div><!--/.box-->

                                    
                </div><!--/.box-content-->
            </div><!--/.span6 box-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop