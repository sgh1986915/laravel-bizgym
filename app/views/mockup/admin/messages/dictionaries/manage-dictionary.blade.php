@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin messages' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Dictionary</span>
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
                            Dictionaries
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Default Dictionary
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         <div class='row-fluid section-header'>
            <div class='title'>
               Currently Viewing Default Dictionary
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' data-toggle='modal' role='button' href='#modal-edit-dictionary-name'><i class='icon-edit'> </i> Edit Name</a>
                <a class='btn btn-default' role='button'>Go Back to Dictionaries</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-envelope'> </i>Existing Items</div>
                <div class='actions'>
                    <a class='btn btn-small' href='#modal-new-item' role='button' data-toggle='modal'><i class='icon-plus'> </i>New Item</a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table messages-list table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Placeholder
                        </th>

                        <th>
                            Value
                        </th>

                        <th>
                            Date
                        </th>

                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td class='title'>Site_Name</td>
                            <td class='value'>http://bizgym.com</td>
                            <td class='date'>June 20, 2013</td>
                            
                            <td class='actions'>
                            
                               
                                <a class='btn btn-default btn-mini' data-toggle='modal' role='button' href='#modal-edit-item'>
                                    <i class='icon-edit'> </i> Edit Item
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Item
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class='id'>2</td>
                            <td class='title'>Site_Title</td>
                            <td class='value'>BizGym</td>
                            <td class='date'>June 18, 2013</td>
                            
                            <td class='actions'>
                            
                               
                                <a class='btn btn-default btn-mini' data-toggle='modal' role='button' href='#modal-edit-item'>
                                    <i class='icon-edit'> </i> Edit Item
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Item
                                </a>
                            </td>
                        </tr>

                        
                        
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->


                    <div class='modal edit-dictionary-name hide fade' id='modal-edit-dictionary-name' role='dialog' tabindex='-1'>
                        <div class='modal-header red-background'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>Edit Dictionary Name</h3>
                        </div><!--/.modal-header-->
                        <div class='modal-body'>
                            <form>
                                <div class='control-group'>
                                    <label class='control-label'>Dictionary Name</label>
                                    <div class='controls'>
                                        <input class='span8' id='item-name' value='Default Dictionary' type='text'>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div><!--/.modal-body-->

                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                            <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Save Changes</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->


                    <div class='modal new-item hide fade' id='modal-new-item' role='dialog' tabindex='-1'>
                        <div class='modal-header red-background'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>New Dictionary Item</h3>
                        </div><!--/.modal-header-->
                        <div class='modal-body'>
                            <form>
                                <div class='control-group'>
                                    <label class='control-label'>Placeholder Name</label><p class='help-block'>This is what you will use to call the placeholder content</p>
                                    <div class='controls'>
                                        <input class='span8' id='item-name' placeholder='Ex: Company Dictionary' type='text'>
                                        
                                    </div>
                                </div>

                                <div class='control-group'>
                                    <label class='control-label'>Placeholder Value</label><p class='help-block'>This is what the placeholder will call</p>
                                    <div class='controls'>
                                        <input class='span8' id='item-value' placeholder='Enter value' type='text'>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div><!--/.modal-body-->

                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i> Create Item</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->


                    <div class='modal edit-item hide fade' id='modal-edit-item' role='dialog' tabindex='-1'>
                        <div class='modal-header red-background'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>Edit Dictionary Item</h3>
                        </div><!--/.modal-header-->
                        <div class='modal-body'>
                            <form>
                                <div class='control-group'>
                                    <label class='control-label'>Placeholder Name</label><p class='help-block'>This is what you will use to call the placeholder content</p>
                                    <div class='controls'>
                                        <input class='span8' id='item-name' value='Site_Name' type='text'>
                                        
                                    </div>
                                </div>

                                <div class='control-group'>
                                    <label class='control-label'>Placeholder Value</label><p class='help-block'>This is what the placeholder will call</p>
                                    <div class='controls'>
                                        <input class='span8' id='item-value' value='http://BizGym.com' type='text'>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div><!--/.modal-body-->

                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                            <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Save Changes</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop