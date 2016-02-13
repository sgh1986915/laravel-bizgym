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
                        <span>Manage Menu Items</span>
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
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Viewing Menu Items for Admin Menu under Sidebar
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Menu</a>
            </div><!--/.btn-group-->

        </div>

        <div class='row-fluid'>

            <div class='span8 box bordered-box purple-border'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-link text-contrast'> </i> Edit Menu Items
                    </div> <!--/.title-->
                        <div class='actions'>
                           
                        </div><!--/.actions-->
                </div><!--.box-header-->
                <div class='box-content box-no-padding'>
                    <table class='table table-striped menu-item-list' style='margin-bottom:0;'>
                        <thead>
                            <tr>
                                <th>
                                    Icon
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    URL
                                </th>
                                <th>
                                    Priority
                                </th>
                                <th>
                                    Actions
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class='icon-comment-alt'></i></td>
                                <td class='item-type'>Link</td>
                                <td class='item-name'>Alerts</td>
                                <td class='item-url'>admin/menu</td>
                                <td class='item-priority'>-8</td>
                                <td class='item-action'>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-cog'> </i>Edit Menu Item
                                        </a>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-remove'> </i> Delete Item
                                        </a>
                                    
                                </td>
                            </tr>

                            <tr>
                                <td><i class='icon-group'></i></td>
                                <td class='item-type'>Link</td>
                                <td class='item-name'>Groups</td>
                                <td class='item-url'>admin/groups</td>
                                <td class='item-priority'>-10</td>
                                <td class='item-action'>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-cog'> </i>Edit Menu Item
                                        </a>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-remove'> </i> Delete Item
                                        </a>
                                    
                                </td>
                            </tr>


                            <tr>
                                <td></td>
                                <td class='item-type'>Seperator</td>
                                <td class='item-name'>Configuration</td>
                                <td class='item-url'></td>
                                <td class='item-priority'>-10</td>
                                <td class='item-action'>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-cog'> </i>Edit Menu Item
                                        </a>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-remove'> </i> Delete Item
                                        </a>
                                    
                                </td>
                            </tr>



                            <tr>
                                <td><i class='icon-envelope'></i></td>
                                <td class='item-type'>Link</td>
                                <td class='item-name'>Messages</td>
                                <td class='item-url'>admin/messages</td>
                                <td class='item-priority'>-8</td>
                                <td class='item-action'>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-cog'> </i>Edit Menu Item
                                        </a>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-remove'> </i> Delete Item
                                        </a>
                                    
                                </td>
                            </tr>


                            <tr>
                                <td><i class='icon-cog'></i></td>
                                <td class='item-type'>Link</td>
                                <td class='item-name'>Settings</td>
                                <td class='item-url'>admin/settings</td>
                                <td class='item-priority'>5</td>
                                <td class='item-action'>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-cog'> </i>Edit Menu Item
                                        </a>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-remove'> </i> Delete Item
                                        </a>
                                    
                                </td>
                            </tr>

                            <tr>
                                <td><i class='icon-cog'></i></td>
                                <td class='item-type'>Route</td>
                                <td class='item-name'>Test</td>
                                <td class='item-url'></td>
                                <td class='item-priority'>5</td>
                                <td class='item-action'>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-cog'> </i>Edit Menu Item
                                        </a>
                                        <a class='btn btn-default btn-mini' href='#'>
                                            <i class='icon-remove'> </i> Delete Item
                                        </a>
                                    
                                </td>
                            </tr>

                
                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span8 box bordered-box-->
            

            <div class='span4 box'>
                <div class='box-header'>
                    <div class='title'>
                        <i class='icon-plus text-contrast'></i> Create Menu Item
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
                                    <input class='span8' id='full-name' type='text'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <div class='control-group'>
                                <label class='control-label'>URL for Menu Item</label>
                                <div class='controls'><p class='help-block'>If link, what URL should it go to?</p>
                                <div class="controls">
                                    <input class='span8' id='urlurl' type='text'>
                                    
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
                                    Create Menu Item
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