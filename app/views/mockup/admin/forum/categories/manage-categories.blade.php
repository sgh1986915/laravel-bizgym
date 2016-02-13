@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin forum' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Forum Categories</span>
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
                            Forum
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Categories
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         <div class='row-fluid section-header'>
            <div class='title'>
               These are the different categories that posts may exist in
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'>Go Back to Forum</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-envelope'> </i>Existing Categories</div>
                <div class='actions'>
                    <a class='btn btn-small' href='#modal-new-item' role='button' data-toggle='modal'><i class='icon-plus'> </i>New Category</a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table messages-list table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            Category Name
                        </th>
                        <th>
                            Icon
                        </th>
                        <th>
                            Description
                        </th>

                        <th>
                            Topics
                        </th>

                        <th>
                            Last Updated
                        </th>

                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td data-title='Name'><a href='category'>Social Media Advice</a></td>
                            <td data-title='Icon'><i class='icon-comment'></i></td>
                            <td data-title='Description'>Gain Social Media advice</td>
                            <td data-title='Topics'>32</td>
                            <td data-title="Last Updated">1 Month Ago</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' data-toggle='modal' role='button' href='#modal-edit-item'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-lock'> </i> Permissions
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title='Name'><a href='category'>Feature Request</a></td>
                            <td data-title='Icon'><i class='icon-trophy'></i></td>
                            <td data-title='Description'>Testing content</td>
                            <td data-title='Topics'>29</td>
                            <td data-title="Last Updated">2 Months Ago</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' data-toggle='modal' role='button' href='#modal-edit-item'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-lock'> </i> Permissions
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

                    <div class='modal edit-item hide fade' id='modal-edit-item' role='dialog' tabindex='-1'>
                        <div class='modal-header red-background'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>Edit Forum Category</h3>
                        </div><!--/.modal-header-->
                        <div class='modal-body'>
                            <form>
                                <div class='control-group'>
                                    <label class='control-label'>Category Title</label>
                                    <div class='controls'>
                                        <input class='span8' id='item-name' value='Social Media Advice' type='text'>
                                    </div>
                                </div>

                                <div class='control-group'>
                                    <label class='control-label'>Location Priority</label><p class='help-block'>Where will this category be displayed on the forum home page?</p>
                                    <div class='controls'>
                                        <select id="priority" class="" name="priority">
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
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Forum Type</label><p class='help-block'>What type of forum is this?</p>
                                    <div class='controls'>
                                        <select id="type" class="" name="type">
                                            <option value="-10">Default</option>
                                            <option value="-9">Tracker</option>
                                            <option selected="selected" value="0">Vote</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Category Icon URL</label><p class='help-block'>Input the Font Awesome Icon text for which icon should represent this category.</p>
                                    <div class='controls'>
                                        <input class='span8' id='category-icon' value='icon-comment' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <label class='control-label'>New Topic Action</label><p class='help-block'>What are you directing users to do when they create a new topic?</p>
                                    <div class='controls'>
                                        <input class='span8' id='topic-action' value='Create a New Topic' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Category Description</label><p class='help-block'>Let people know what this category is all about</p>
                                    <div class="controls">
                                        <textarea id='inputTextArea1' class='span12' rows='3'>Gain Social Media Advice</textarea>
                                    </div><!--/.controls-->
                                </div> <!--/.control-group-->


                            </form>
                            
                        </div><!--/.modal-body-->

                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i> Save Changes</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->





                    <div class='modal new-item hide fade' id='modal-new-item' role='dialog' tabindex='-1'>
                        <div class='modal-header red-background'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>New Forum Category</h3>
                        </div><!--/.modal-header-->
                        <div class='modal-body'>
                            <form>
                                <div class='control-group'>
                                    <label class='control-label'>Category Title</label>
                                    <div class='controls'>
                                        <input class='span8' id='item-name' placeholder='Ex: Business Tips' type='text'>
                                    </div>
                                </div>

                                <div class='control-group'>
                                    <label class='control-label'>Location Priority</label><p class='help-block'>Where will this category be displayed on the forum home page?</p>
                                    <div class='controls'>
                                        <select id="priority" class="" name="priority">
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
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Forum Type</label><p class='help-block'>What type of forum is this?</p>
                                    <div class='controls'>
                                        <select id="type" class="" name="type">
                                            <option value="-10">Default</option>
                                            <option value="-9">Tracker</option>
                                            <option selected="selected" value="0">Vote</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <label class='control-label'>Category Icon URL</label><p class='help-block'>Input the Font Awesome Icon text for which icon should represent this category.</p>
                                    <div class='controls'>
                                        <input class='span8' id='category-icon' placeholder='Ex: icon-bug' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <label class='control-label'>New Topic Action</label><p class='help-block'>What are you directing users to do when they create a new topic?</p>
                                    <div class='controls'>
                                        <input class='span8' id='topic-action' placeholder='Ex: Report a Bug' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->


                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Category Description</label><p class='help-block'>Let people know what this category is all about</p>
                                    <div class="controls">
                                        <textarea id='inputTextArea1' class='span12' placeholder='Text for your message' rows='3'></textarea>
                                    </div><!--/.controls-->
                                </div> <!--/.control-group-->


                            </form>
                            
                        </div><!--/.modal-body-->

                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i> Create Category</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->


                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop