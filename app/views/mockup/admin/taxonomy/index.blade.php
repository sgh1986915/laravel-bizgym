@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin taxonomy' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Taxonomy Content</span>
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
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Manage taxonomy categories questions, and answers
            </div>
            <div class='btn-group'>
                <a class='btn btn-default' role='button' data-toggle='modal' href='#modal-new-category'><i class='icon-plus'> </i> Create a Category</a>
            </div><!--/.btn-group-->      
        </div><!--/.row-fluid section-header-->
        
        <div class='row-fluid category'>
            <div class='span12 box'>
                <div class='box-header'>
                    <div class='title'>
                       1. Customers <div class='taxonomy-action' id='category-action'> <a href='#modal-edit-category' role='button' data-toggle='modal'><i class='icon-edit'> </i> Edit Category</a> <a href='taxonomy/subcategory/new'><i class='icon-plus'> </i> Add a Sub-Category</a> </div>
                    </div><!--/.title-->
                    <div class='actions'>
                        <a href="#" class="btn box-collapse btn-mini btn-link"><i></i></a>
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class='box-content sub-category box-no-padding'>
                    <div class='box-header'>
                        <div class="row-fluid">
                        <div class='title'>1.1 Customer Overview</div> <div class='taxonomy-action'> <a href=''><i class='icon-edit'> </i> Edit Sub-Category</a><a href='taxonomy/question/new'><i class='icon-plus'> </i> Add a Question</a> </div><!--/.taxonomy-action-->
                        <!--/.title-->
                        <div class='actions'>
                            <a class="taxonomy-toggle show-question">Show Questions & Options <i class='icon-chevron-down'></i></a>
                        </div>
                        </div><!--/.row-fluid-->
                        
                    </div><!--/box-header-->
                    <div class='question'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-question-sign'> </i> What is your customer's name?
                            </div><!--/.data-title-->
                            <div class='taxonomy-action'> <a href='taxonomy/question/edit'><i class='icon-edit'> </i> Edit Question & Answers</a> </div><!--/.taxonomy-action-->
                                <a class="taxonomy-toggle show-answers">Show Answers & Options <i class='icon-chevron-down'></i></a>
                            
                        </div><!--/.box-header-->
                            <div class='answers'>
                                <table class='table table-bordered table-striped' style='margin-bottom:0!important;'>
                                    <thead>
                                    <tr>
                                        <th>Answer Label</th>
                                        <th>Answer Type</th>
                                        <th>Placeholder Value</th> 
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Answer Label'>Header</td>
                                            <td data-title='Answer Type'>Text Input</td>
                                            <td data-title='Placeholder'>Customer Description</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div><!--/.answers-->
                    </div><!--/.box-content-->

                    <div class='question'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-question-sign'> </i> Describe your Target Customers?
                            </div><!--/.data-title-->
                            <div class='taxonomy-action'> <a href='taxonomy/question/edit'><i class='icon-edit'> </i> Edit Question & Answers</a> </div><!--/.taxonomy-action-->
                                <a class="taxonomy-toggle show-answers">Show Answers & Options <i class='icon-chevron-down'></i></a>
                            
                        </div><!--/.box-header-->
                            <div class='answers'>
                                <table class='table table-bordered table-striped' style='margin-bottom:0!important;'>
                                    <thead>
                                    <tr>
                                        <th>Answer Label</th>
                                        <th>Answer Type</th>
                                        <th>Placeholder Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Answer Label'>Header</td>
                                            <td data-title='Answer Type'>Text Input</td>
                                            <td data-title='Placeholder'>Target Customers</td>
                                        </tr>
                                        <tr>
                                            <td data-title='Answer Label'>description</td>
                                            <td data-title='Answer Type'>Text Area</td>
                                            <td data-title='Placeholder'>Customer Description</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div><!--/.answers-->
                    </div><!--/.box-content-->
                </div><!--/.box-content sub-category-->

                <div class='box-content sub-category box-no-padding'>
                    <div class='box-header'>
                        <div class='title'>1.2 Customer Profiles</div> <!--/.title-->
                        <div class='taxonomy-action'> <a href=''><i class='icon-edit'> </i> Edit Sub-Category</a><a href='taxonomy/question/new' class='add-question'><i class='icon-plus'> </i> Add a Question</a> </div><!--/.taxonomy-action-->
         
                            <a class="taxonomy-toggle show-question">Show Questions & Options <i class='icon-chevron-down'></i></a>
                  
                    </div><!--/box-header-->
                    <div class='question'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-question-sign'> </i> What is your customer's name?
                            </div><!--/.title-->
                            <div class='taxonomy-action'> <a href='taxonomy/question/edit'><i class='icon-edit'> </i> Edit Question & Answers</a> </div><!--/.taxonomy-action-->
                                <a class="taxonomy-toggle show-answers">Show Answers & Options <i class='icon-chevron-down'></i></a>
                        </div><!--/.box-header-->
                            <div class='answers'>
                                <table class='table table-bordered table-striped' style='margin-bottom:0!important;'>
                                    <thead>
                                    <tr>
                                        <th>Answer Label</th>
                                        <th>Answer Type</th>
                                        <th>Placeholder Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Answer Label'>Header</td>
                                            <td data-title='Answer Type'>Text Input</td>
                                            <td data-title='Placeholder'>Customer Description</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--/.answers collapse-->
                    </div><!--/.box-content-->
                </div><!--/.box-content sub-category-->
            </div><!--/. span12 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid category'>
            <div class='span12 box'>
                <div class='box-header'>
                    <div class='title'>
                       1. Funding <div class='taxonomy-action' id='category-action'> <a href='#modal-edit-category' role='button' data-toggle='modal'><i class='icon-edit'> </i> Edit Category</a> <a href='taxonomy/subcategory/new'><i class='icon-plus'> </i> Add a Sub-Category</a></div>
                    </div><!--/.title-->
                    <div class='actions'>
                        <a href="#" class="btn box-collapse btn-mini btn-link"><i></i></a>
                    </div><!--/.actions-->
                </div><!--/.box-header-->
                <div class='box-content sub-category box-no-padding'>
                    <div class='box-header'>
                        <div class="row-fluid">
                        <div class='title'>1.1 Funding Plan</div> <div class='taxonomy-action'> <a href=''><i class='icon-edit'> </i> Edit Sub-Category</a><a href='taxonomy/question/new'><i class='icon-plus'> </i> Add a Question</a> </div><!--/.taxonomy-action-->
                        <!--/.title-->
                        <div class='actions'>
                            <a class="taxonomy-toggle show-question">Show Questions & Options <i class='icon-chevron-down'></i></a>
                        </div>
                        </div><!--/.row-fluid-->
                        
                    </div><!--/box-header-->
                    <div class='question'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-question-sign'> </i> Describe your funding plan
                            </div><!--/.data-title-->
                            <div class='taxonomy-action'> <a href='taxonomy/question/edit'><i class='icon-edit'> </i> Edit Question & Answers</a> </div><!--/.taxonomy-action-->
                                <a class="taxonomy-toggle show-answers">Show Answers <i class='icon-chevron-down'></i></a>
                            
                        </div><!--/.box-header-->
                            <div class='answers'>
                                <table class='table table-bordered table-striped' style='margin-bottom:0!important;'>
                                    <thead>
                                    <tr>
                                        <th>Answer Label</th>
                                        <th>Answer Type</th>
                                        <th>Placeholder Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Answer Label'>Header</td>
                                            <td data-title='Answer Type'>Text Input</td>
                                            <td data-title='Placeholder'>funding plan</td>
                                        </tr>
                                        <tr>
                                            <td data-title='Answer Label'>Description</td>
                                            <td data-title='Answer Type'>Text area</td>
                                            <td data-title='Placeholder'>describe funding plan</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div><!--/.answers-->
                    </div><!--/.box-content-->

                    <div class='question'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-question-sign'> </i> Describe your achievements
                            </div><!--/.data-title-->
                            <div class='taxonomy-action'> <a href='taxonomy/question/edit'><i class='icon-edit'> </i> Edit Question & Answers</a> </div><!--/.taxonomy-action-->
                                <a class="taxonomy-toggle show-answers">Show Answers <i class='icon-chevron-down'></i></a>
                            
                        </div><!--/.box-header-->
                            <div class='answers'>
                                <table class='table table-bordered table-striped' style='margin-bottom:0!important;'>
                                    <thead>
                                    <tr>
                                        <th>Answer Label</th>
                                        <th>Answer Type</th>
                                        <th>Placeholder Value</th>  
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Answer Label'>Header</td>
                                            <td data-title='Answer Type'>Text Input</td>
                                            <td data-title='Placeholder'>achievements</td>
                                        </tr>
                                        <tr>
                                            <td data-title='Answer Label'>Description</td>
                                            <td data-title='Answer Type'>Text Area</td>
                                            <td data-title='Placeholder'>Description</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div><!--/.answers-->
                    </div><!--/.box-content-->

                    <div class='question'>
                        <div class='box-header'>
                            <div class='title'>
                                <i class='icon-question-sign'> </i> What are your investor risks?
                            </div><!--/.data-title-->
                            <div class='taxonomy-action'> <a href='taxonomy/question/edit'><i class='icon-edit'> </i> Edit Question & Answers</a> </div><!--/.taxonomy-action-->
                                <a class="taxonomy-toggle show-answers">Show Answers <i class='icon-chevron-down'></i></a>
                            
                        </div><!--/.box-header-->
                            <div class='answers'>
                                <table class='table table-bordered table-striped' style='margin-bottom:0!important;'>
                                    <thead>
                                    <tr>
                                        <th>Answer Label</th>
                                        <th>Answer Type</th>
                                        <th>Placeholder Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title='Answer Label'>Header</td>
                                            <td data-title='Answer Type'>Text Input</td>
                                            <td data-title='Placeholder'>short description</td>
                                        </tr>
                                        <tr>
                                            <td data-title='Answer Label'>Description</td>
                                            <td data-title='Answer Type'>Text Area</td>
                                            <td data-title='Placeholder'>Description</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div><!--/.answers-->
                    </div><!--/.box-content-->
                </div><!--/.box-content sub-category-->

            </div><!--/. span12 box-->
        </div><!--/.row-fluid-->

    </div><!--/.span12-->

    <div class='modal hide fade' id='modal-new-category' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Add a New Category</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this category?</p>
                    <div class='controls'>
                        <input id='category-name' class='input-block-level' placeholder='Ex: Competition'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </form>
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i>Create Category</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-edit-category' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Category</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this category?</p>
                    <div class='controls'>
                        <input id='category-name' class='input-block-level' placeholder='Ex: Competition' value='Category Name'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->
            </form>
        </div><!--/.modal-body-->

        <div class='modal-footer'>
            <button class='btn btn-default user-action-btn'><i class='icon-trash'> </i> Delete Category</button>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i>Cancel</button>
            <button class='btn btn-default' data-dismiss='modal'><i class='icon-save'> </i>Save Changes</button>
        </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->
    


</div><!--/.row-fluid #content-wrapper-->
    

@stop

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure?')
    
})
@stop