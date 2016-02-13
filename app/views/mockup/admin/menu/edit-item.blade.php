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
                        <span>Edit Menu Item</span>
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
                            Menu
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
                            Menu
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Menu Items
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Profile
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Viewing Profile Menu Item for Admin Menu under Sidebar
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Menu Items</a>
            </div><!--/.btn-group-->

        </div>

        <div class='row-fluid'>

            <div class='span8 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-link text-contrast'> </i> Menu Item Details
                    </div><!--/.title-->
                </div><!--/.box-header-->
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Type of Item</label><p class='help-block'>Is it a link, separator, or route?</p>
                                <div class="controls">
                                    <select name="item-type">
                                        <option selected="selected" value="-2">Link</option>
                                        <option value="-1">Route</option>
                                        <option value="0">Separator</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->


                            <div class='control-group'>
                                <label class='control-label'>Menu Item Name</label>
                                <div class='controls'><p class='help-block'>What should you call this menu item?</p>
                                <div class="controls">
                                    <input class='span8' id='full-name' value="Profile" type='text'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <div class='control-group'>
                                <label class='control-label'>URL for Menu Item</label>
                                <div class='controls'><p class='help-block'>If link, what URL should it go to?</p>
                                <div class="controls">
                                    <input class='span8' id='url' value="/profile"  type='text'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Menu Item Priority</label><p class='help-block'>Where should this menu item be placed?</p>
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

                        </fieldset>
                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-primary'>
                                    Update Menu Item
                                </div>
                                <div class='btn btn-default'>
                                    Cancel
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