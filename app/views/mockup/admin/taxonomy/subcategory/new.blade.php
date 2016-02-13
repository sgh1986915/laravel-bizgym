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
                        <span>Create a Sub-Category</span>
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
                            New Sub-Category
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Create a new sub-category for {Category Name}
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Taxonomy</a>
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
                                    <label class='control-label'>Sub-Category Name</label><p class='help-block'>Give your sub-category an easy to understand name.</p>
               
                                    <div class='controls'>
                                        <input class='span9' id='sub-category-name' placeholder='Ex: Competition Overview' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <hr class='hr-normal'>

                                <div class='control-group'>
                                    <label class='control-label'>Introduction Statement</label><p class='help-block'>What do you want the introduction statement to say for this sub-category? This will be shown to users the first time they arrive at the taxonomy category.</p>
               
                                    <div class='controls'>
                                        <textarea id='introduction_statement' class='span9' placeholder='Describe your sub-category' rows='3'></textarea>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                 <hr class='hr-normal'>

                                <div class='control-group'>
                                    <label class='control-label'>Intro Button Text</label><p class='help-block'>What call to action statement should your button have?</p>
               
                                    <div class='controls'>
                                        <input class='span9' id='sub-category-name' placeholder='Ex: Customer Overview' type='text'>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <hr class='hr-normal'>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Tips Content</label><p class='help-block'>Enter your instructional content for this sub-category</p>
                                    <div class="controls">
                                        <textarea class="span12 wysihtml5" cols="40" id="tips_content" placeholder="Some text here..." rows="10"></textarea>
                                    </div><!--/.controls-->
                                </div> <!--/.control-group-->

                                <hr class='hr-normal'>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Examples</label><p class='help-block'>Enter your example content for this sub-category</p>
                                    <div class="controls">
                                        <textarea class="span12 wysihtml5" cols="40" id="examples_content" placeholder="Some text here..." rows="10"></textarea>
                                    </div><!--/.controls-->
                                </div> <!--/.control-group-->

                                <hr class='hr-normal'>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Quotes</label><p class='help-block'>Enter useful quotes for this sub-category</p>
                                    <div class="controls">
                                        <textarea class="span12 wysihtml5" cols="40" id="quotes_content" placeholder="Some text here..." rows="10"></textarea>
                                    </div><!--/.controls-->
                                </div> <!--/.control-group-->

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Allow multiples of this sub-category?</label><p class='help-block'>For example, if the sub-category is "Customer Profile", can the user create multiple customer profiles? </p>
                                    <div class="controls">
                                        <select class='span6' id='sub-category-multiple'>
                                            <option value='0'>No</option>
                                            <option value='1'>Yes</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div> <!--/.control-group-->

                            </div><!--/.span8--> 
                        </div><!--/.row-fluid-->

                        </fieldset>
                            <div class='form-actions' style='margin-bottom: 0;'>
                                <div class='text-right'>
                                    <div class='btn btn-default btn-large'>
                                        <i class='icon-arrow-left'></i>
                                        Go Back to Taxonomy
                                    </div>

                                    <div class='btn btn-primary btn-large' id='save-sub-category'>
                                        <i class='icon-save'></i>
                                        Create Sub-Category
                                    </div>
                                </div>
                            </div><!--/.form-actions-->
                        </form>
                </div><!--/.box-content-->
            </div><!--/.span8 box-->

        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
<script type='text/javascript'>

    $("#save-sub-category").click(function() {
        
        bootbox.dialog({
          message: "Do you want to create questions now?",
          title: "What is next",
          buttons: {
            success: {
              label: "Yes",
              className: "btn-success"
            },
            danger: {
              label: "No thanks",
              className: "btn-danger"
            }
          }
        });

    }); // close out script


</script>

@stop