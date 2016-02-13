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
                        <span>Create a New Question</span>
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
                            Intake
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Questions
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
                Create a new question for your intake process
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Questions</a>
                <a class='btn btn-default' role='button'>Go to Intake Values</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid'>
            <div class='span12 box'>
               
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='row-fluid'>
                                <div class='span8'>
                                    <div class='control-group'>
                                        <label class='control-label main-label'>The Question</label>
                                        <div class='controls'><p class='help-block'>What do you want to ask your user?</p>
                                        
                                            <input class='span9' id='question-name' placeholder='Ex: What is your Company Name?' type='text'>
                                            
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Question Description</label><p class='help-block'>Helpful text to further instruct the user how to formulate their response.</p>
                                        <div class='controls'>
                                            <textarea id='question-text' class='span9' placeholder='Question Helper Text' rows='3'></textarea>
                                        </div><!--/.controls-->
                                    </div> <!--/.control-group-->

                                    <hr class='hr-normal'>

                                    <div class='control-group'>
                                        <label class='control-label'>Question Priority</label><p class='help-block'>Where will this question be displayed in its category of questions?</p>
                                        <div class='controls'>
                                            <select id="question-priority" class="" name="priority">
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

                                    <hr class='hr-normal'>


                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Answer Type</label><p class='help-block'>Do you want this alert to be active now? Or keep it inactive for now?</p>
                                        <div class="controls">
                                            <select name="answer-type">
                                                <option value="checkbox">Checkbox</option>
                                                <option selected="selected" value="radio">Radio</option>
                                            </select>
                                        </div><!--/.controls-->
                                    </div> <!--/.control-group-->
                                </div><!--./span8-->

                            </div><!--/.row-fluid-->

                </div><!--/.box-content-->
            </div><!--/.span8 box-->
        </div><!--/.row-fluid-->
        

        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <div class="control-group">
                                <label class="control-label main-label" for="dependency">Dependencies</label><p class='help-block'>Only show this question based on a certain definition that has been assigned to this user based on other responses.</p>
                                <div class="controls">
                                    <div class='row-fluid'>
                                        <select class='select2 span5' name='dependency'>
                                            <optgroup label='Entity'>
                                                <option value='entity-individual'>Individual</option>
                                                <option value='entity-business'>Business</option>
                                                <option value='entity-cause'>Cause</option>
                                            </optgroup>
                                            <optgroup label='Gender'>
                                                <option value='Male'>Male</option>
                                                <option value='Female'>Female</option>
                                            </optgroup>
                                        </select>
                                    </div><!--/.row-fluid-->
                                    <button class="btn btn-primary shift-down" type="button">Add Dependency</button>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->
                        </div><!--/.span8-->
                    </div><!--/.row-fluid-->
                    <div class='row-fluid dependencies'>
                        <div class='span9 box'>
                            <div class='box-header'>
                                <div class='title'>
                                    Dependencies for this Question
                                </div><!--title-->
                            </div><!--/.box-header-->

                            <!-- Show the box content once dependencies are added -->

                            <div class='box-content'>
                                <table class='table table-striped' style='margin-bottom:0;'>
                                    <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Dependency Type
                                        </th>
                                        <th>
                                            Dependency Definition
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='ID'>1</td>
                                            <td data-title='Type'>Entity</td>
                                            <td data-title='Definition'>Individual</td>
                                            <td data-title='Action'><a class='btn btn-mini'>Remove</a></td>

                                        </tr>
                    
                                    </tbody>
                                </table>
                            </div><!--/.box-content-->
                        </div><!--/.span9-->
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <div class='control-group'>
                                <label class='control-label main-label'>Add an Answer</label>
                                <div class='controls'><p class='help-block'>Name a possible response to your question</p>
                                    <input class='span9' id='question-name' placeholder='Ex: Blue' type='text'>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <hr class='normal'>

                            <div class='control-group'>
                                <label class='control-label'>Answer Priority</label><p class='help-block'>Where will this answer be displayed in relation to the other answers?</p>
                                <div class='controls'>
                                    <select id="question-priority" class="" name="priority">
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


                        </div><!--/.span8-->
                        </div class='row-fluid'>
                            <button class="btn btn-primary btn-large" type="button">Save Answer</button>
                        </div><!--/.row-fluid-->
                    </div><!--/.row-fluid-->


                        <!-- Show Answers as they are added -->

                    <div class='row-fluid answers'>
                        <div class='span12 box'>
                            <div class='box-header'>
                                <div class='title'>
                                    Answers for this Question
                                </div><!--title-->
                            </div><!--/.box-header-->
                            <div class='box-content'>
                                <table class='table table-striped' style='margin-bottom:0;'>
                                    <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Priority
                                        </th>
                                        <th>
                                            Response
                                        </th>
                                        <th>
                                            Value(s)
                                        </th>

                                        <th>
                                            Action
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='ID'>1</td>
                                            <td data-title='Priority'>-1</td>
                                            <td data-title='Text'>Owner & CEO</td>
                                            <td data-title='Value'><span class='label'>Entity -> Business<a href='#'> <i class='icon-remove'></i></a></span></td>
                                            <td data-title='Actons'>
                                                <a class='btn btn-mini' href='#edit-answer' role='button' data-toggle='modal'>Edit</a>
                                                <a class='btn btn-mini' href='#add-tag' role='button' data-toggle='modal'>Add a Value</a> 
                                                <a class='btn btn-mini'>Remove</a>
                                            </td>
                                        </tr>
                    
                                    </tbody>
                                </table>
                            </div><!--/.box-content-->
                        </div><!--/.span9-->
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->


                    </fieldset>
                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Cancel
                                </div>

                                <div class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Create Question
                                </div>
                            </div>
                        </div><!--/.form-actions-->
                    </form>
           


    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->



<div class='modal edit-item hide fade' id='edit-answer' role='dialog' tabindex='-1'>
    <div class='modal-header red-background'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>Edit Answer</h3>
    </div><!--/.modal-header-->
    <div class='modal-body'>
        <form>
           
            <div class='control-group'>
                <label class='control-label'>Answer Response</label>
                <div class='controls'>
                    <input class='span3' id='answer-text' value='Owner-CEO' type='text'>
                    <hr class='hr-normal'>
                </div>
            </div>
                                          

            <div class='control-group'>
                <label class='control-label'>Answer Priority</label>
                <p class='help-block'>Where will this answer be displayed in relation to the other answers?</p>
                <div class='controls'>
                    <select id="question-priority" class="" name="priority">
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

<div class='modal add-value hide fade' id='add-tag' role='dialog' tabindex='-1'>
    <div class='modal-header red-background'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>Add a Value</h3>
    </div><!--/.modal-header-->
    <div class='modal-body'>
        <form>
           
            <div class="control-group">
                <p class='help-block'>Add a value to this answer to use it to categorize users based on responses. These tags are configured in your defintions.</p>
                <div class="controls">
                    <div class='row-fluid'>
                        <select class='select2 span5' name='tag'>
                            <optgroup label='Entity'>
                                <option value='entity-individual'>Individual</option>
                                <option value='entity-business'>Business</option>
                                <option value='entity-cause'>Cause</option>
                            </optgroup>
                            <optgroup label='Gender'>
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                            </optgroup>
                        </select>
                    </div><!--/.row-fluid-->
                </div><!--/.controls-->
            </div><!--/.control-group-->


        </form>
        
    </div><!--/.modal-body-->

    <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
         <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-add-new'> </i> Save Tag</button>
    </div><!--/.modal-footer-->
</div><!--/.modal hide fade-->
    

@stop