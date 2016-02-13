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
                        <span>Create a Question</span>
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
                            Taxonomy
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Category
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Sub-Category
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            New Question
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Create a question and answers for {sub-category}
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Taxonomy</a>
            </div><!--/.btn-group-->
        </div><!--/.row-fluid section-header-->


        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <form class='form'>
                    <div class='row-fluid'>
                        <div class='span8'>
                            <fieldset>
                            <div class='control-group'>
                                <label class='control-label'>Question Name</label><p class='help-block'>Enter the text for this question</p>
                                <div class='controls'>
                                    <input class='span9' id='sub-category-name' placeholder='Ex: Competition Overview' type='text'>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Tips Content</label><p class='help-block'>Enter your instructional content for this question</p>
                                <div class="controls">
                                    <textarea class="span12 wysihtml5" cols="40" id="tips_content" placeholder="Some text here..." rows="10"></textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Examples</label><p class='help-block'>Enter your example content for this question</p>
                                <div class="controls">
                                    <textarea class="span12 wysihtml5" cols="40" id="examples_content" placeholder="Some text here..." rows="10"></textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Quotes</label><p class='help-block'>Enter useful quotes for this question</p>
                                <div class="controls">
                                    <textarea class="span12 wysihtml5" cols="40" id="quotes_content" placeholder="Some text here..." rows="10"></textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Allow revisions for this question?</label><p class='help-block'>Can people create multiple versions of this in collaboration?</p>
                                <div class="controls">
                                    <select class='span6' id='questions-revisions'>
                                        <option value='0'>No</option>
                                        <option value='1'>Yes</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Allow Authors to access and modify for marketplace?</label><p class='help-block'>Can authors use this field and override your default values in their own knowledepacks?</p>
                                <div class="controls">
                                    <select class='span6' id='allow-author-creation'>
                                        <option value='0'>No</option>
                                        <option value='1'>Yes</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Allow multiple responses to this question?</label><p class='help-block'>For example if you ask what an item's key features are, and you allow user to 'add another'. </p>
                                <div class="controls">
                                    <select class='span6' id='question-response-multiple'>
                                        <option value='0'>No</option>
                                        <option value='1'>Yes</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                        </fieldset>
                        </div><!--/.span8--> 
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span12 box'>
                <div class='box-content'>
                    <div class='row-fluid'>
                        <div class='span12'>
                            <div class="lead">
                                <i class="icon-pencil text-info"></i>
                                Answers for this Question
                            </div><!--/.lead-->
                                <a class="btn btn-primary shift-up" href='#new-answer' role="button" data-toggle='modal'><i class='icon-plus'> </i>Create Answer</a>
                            
                            <fieldset>
                            <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    <th>Answer Label</th>
                                    <th>Answer Type</th>
                                    <th>Placeholder value</th>                              
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-title='Label'>Header</td>
                                        <td data-title='Type'>Text Input</td>
                                        <td data-title='Type'>Description</td>
                                        <td data-title='Action'>
                                            <a class='btn btn-default btn-mini' href='#edit-answer' data-toggle='modal' role='button'><i class='icon-edit'> </i>Edit</a>
                                            <a class='btn btn-default btn-mini user-action-btn' href=''><i class='icon-trash'> </i>Remove</a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </fieldset>
                        </div><!--/.span12-->
                    </div><!--/.row-fluid-->
                </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->
       
        <div class='form-actions' style='margin-bottom: 0;'>
            <div class='text-right'>
                <div class='btn btn-default btn-large'>
                    <i class='icon-arrow-left'></i>
                    Go Back to Taxonomy
                </div> <!--/.btn-default-->

                <div class='btn btn-primary btn-large'>
                    <i class='icon-save'></i>
                    Save This Question
                </div> <!--/.btn group-->
            </div><!--/.text-right-->
        </div> <!--/.form-actions-->
        
        </form>


        <div class='modal hide fade' id='new-answer' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Create an Answer</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>

                    <div class='control-group'>
                        <label class='control-label'>Answer Label</label><p class='help-block'>Create a label for this answer, or a name to remember it by</p>
                        <div class='controls'>
                            <input id='answer_label' placeholder='Headline' class='input-block-level' type='text'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Answer Type</label><p class='help-block'>What type of answer is this, or what type of response does the user give?</p>
                        <div class='controls'>
                            <select id="answer-type" class="select input-block-level" name="answer-type">
                                <option value='0' disabled selected style='display:none;'>Type</option>
                                <option value='1'>Text Input</option>
                                <option value='2'>Text Area</option>
                                <option value='3'>Date Picker</option>
                                <option value='4'>Select</option>
                                <option value='5'>Checkbox</option>
                                <option value='6'>Radio</option>
                                <option value='7'>Unit of Measurement</option>
                                <option value='8'>Media Upload</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Answer Placeholder</label><p class='help-block'>Create a placeholder for your input</p>
                        <div class='controls'>
                            <input id='answer_placeholder' class='input-block-level' type='text'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i>Create Answer</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->

        <div class='modal hide fade' id='edit-answer' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Edit Answer</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>

                    <div class='control-group'>
                        <label class='control-label'>Answer Label</label><p class='help-block'>Create a label for this answer, or a name to remember it by</p>
                        <div class='controls'>
                            <input id='answer_label' placeholder='Headline' class='input-block-level' type='text' value='Header'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Answer Type</label><p class='help-block'>What type of answer is this, or what type of response does the user give?</p>
                        <div class='controls'>
                            <select id="answer-type" class="select input-block-level" name="answer-type">
                                <option value='0' disabled selected style='display:none;'>Type</option>
                                <option selected value='1'>Text Input</option>
                                <option value='2'>Text Area</option>
                                <option value='3'>Date Picker</option>
                                <option value='4'>Select</option>
                                <option value='5'>Checkbox</option>
                                <option value='6'>Radio</option>
                                <option value='7'>Unit of Measurement</option>
                                <option value='8'>Media Upload</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Answer Placeholder</label><p class='help-block'>Create a placeholder for your input</p>
                        <div class='controls'>
                            <input id='answer_placeholder' placeholder='Type your response' class='input-block-level' type='text' value='Enter your response'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

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

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        confirmed = confirm('Are you sure?')
    
})
@stop