@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin intake' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Intake Questions</span>
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
                            Settings
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Intake
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               These are the questions that users must answer after joining your Application
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' href='#modal-new-category' role='button' data-toggle='modal'><i class='icon-plus'> </i>Create New Category</a>
                <a class='btn btn-default' role='button'>Manage Intake values</a>
                <a class='btn btn-default' role='button'>Go Back to Settings</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid category'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'>About You</div>
                <div class='actions'>
                    <a class='btn btn-small'><i class='icon-plus'> </i>New Question</a>
                    <a class='btn btn-small' data-toggle='modal' role='button' href='#modal-edit-category'><i class='icon-edit'> </i> Edit Category</a>
                    <a class='btn btn-small' href='#'><i class='icon-remove'> </i> Delete Category</a>          
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
                            Priority
                        </th>

                        <th>
                            Question
                        </th>
                        

                        <th>
                            Actions
                        </th>      
                    </tr>
                    </thead>
                    <tbody>
                       
                        <tr class='question'>
                            <td data-title='Question ID'>1</td>
                            <td data-title='Priority'>-10</td>
                            <td data-title='Question'>What are your biggest challenges or obstacles?</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini'>
                                    <i class='icon-edit'> </i> Edit Question
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Question
                                </a>
                            </td>
                        </tr>


                        <tr class='question'>
                            <td data-title='Question ID'>2</td>
                            <td data-title='Priority'>-9</td>
                            <td data-title='Question'>What is your role?</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini'>
                                    <i class='icon-edit'> </i> Edit Question
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Question
                                </a>
                            </td>
                        </tr>

                        <tr class='question'>
                            <td data-title='Question ID'>5</td>
                            <td data-title='Priority'>-10</td>
                            <td data-title='Question'>Do you have a physical location you operate from? </td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' data-toggle='modal' role='button' href='#modal-edit-category'>
                                    <i class='icon-edit'> </i> Edit Question
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Question
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid category'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'>Business Background</div>
                <div class='actions'>
                    <a class='btn btn-small'><i class='icon-plus'> </i>New Question</a>
                    <a class='btn btn-small' data-toggle='modal' role='button' href='#modal-edit-category'><i class='icon-edit'> </i> Edit Category</a>
                    <a class='btn btn-small' href='#'><i class='icon-remove'> </i> Delete Category</a>          
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
                            Priority
                        </th>

                        <th>
                            Question
                        </th>
                        

                        <th>
                            Actions
                        </th>      
                    </tr>
                    </thead>
                    <tbody>
                       
                        <tr class='question'>
                            <td data-title='Question ID'>1</td>
                            <td data-title='Priority'>-10</td>
                            <td data-title='Question'>How many years of experience do you have in business?</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini'>
                                    <i class='icon-edit'> </i> Edit Question
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Question
                                </a>
                            </td>
                        </tr>


                        <tr class='question'>
                            <td data-title='Question ID'>2</td>
                            <td data-title='Priority'>-9</td>
                            <td data-title='Question'>Do you have an MBA?</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini'>
                                    <i class='icon-edit'> </i> Edit Question
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Question
                                </a>
                            </td>
                        </tr>

                        <tr class='question'>
                            <td data-title='Question ID'>5</td>
                            <td data-title='Priority'>-10</td>
                            <td data-title='Question'>What's your greatest accomplishment?</td>
                            <td data-title='Actions'>
                                <a class='btn btn-default btn-mini' data-toggle='modal' role='button' href='#modal-edit-category'>
                                    <i class='icon-edit'> </i> Edit Question
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete Question
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

 
  
    </div><!--/.span12-->


<div class='modal new-category hide fade' id='modal-new-category' role='dialog' tabindex='-1'>
    <div class='modal-header red-background'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>New Intake Category</h3>
    </div><!--/.modal-header-->
    <div class='modal-body'>
        <form>
            <div class='control-group'>
                <label class='control-label'>Category Name</label><p class='help-block'>What do you want to call this new category of questions?</p>
                <div class='controls'>
                    <input class='span8' id='item-name' placeholder='Ex: Social Accounts' type='text'>
                </div>
            </div>

            <div class='control-group'>
                <label class='control-label'>Category Priority</label><p class='help-block'>Where will this category be displayed in the order of intake categories?</p>
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

        

        </form>
        
    </div><!--/.modal-body-->

    <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
         <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i> Create Category</button>
    </div><!--/.modal-footer-->
</div><!--/.modal hide fade-->


<div class='modal edit-category hide fade' id='modal-edit-category' role='dialog' tabindex='-1'>
    <div class='modal-header red-background'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>Edit Intake Category</h3>
    </div><!--/.modal-header-->
    <div class='modal-body'>
        <form>
            <div class='control-group'>
                <label class='control-label'>Category Name</label><p class='help-block'>What do you want to call this new category of questions?</p>
                <div class='controls'>
                    <input class='span8' id='category-name' value='About You' type='text'>
                </div>
            </div>

            <div class='control-group'>
                <label class='control-label'>Category Priority</label><p class='help-block'>Where will this category be displayed in the order of intake categories?</p>
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


        </form>
        
    </div><!--/.modal-body-->

    <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
         <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i> Save Changes</button>
    </div><!--/.modal-footer-->
</div><!--/.modal hide fade-->


</div><!--/.row-fluid #content-wrapper-->
    
@stop