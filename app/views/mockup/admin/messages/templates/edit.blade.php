@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin new-message' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Create New Message Template</span>
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
                            Templates
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Christmas Card
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Edit
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span8 box'>
               
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>


                            <div class='control-group'>
                                <label class='control-label'>Template Name</label>
                                <div class='controls'>
                                    <input class='span6' id='name' value='Christmas Card' type='text'>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Template Body</label>
                                <div class="controls">
                                    <textarea id='templatebody' class='span12' placeholder='Text for your message' rows='32'>Template HTML in here</textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                        </fieldset>
                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Go Back to Templates
                                </div>

                                <div class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Save Changes to Template
                                </div>
                            </div>
                        </div><!--/.form-actions-->
                    </form>
                </div><!--/.box-content-->
            </div><!--/.span6 box-->

            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>Some tips for creating message templates
                        <i class="icon-smile"></i></p>
                    <div class='row-fluid shift-down'>
                        <ul>
                            <li>When creating a template, tokens are surrounded by %'s</li>
                            <li>So if you wanted to replace the brand title use %brand_title%</li>
                            <li>Consult the cheatsheet for possible replacement values.</li>
                            <li><a href="http://kb.mailchimp.com/article/how-to-code-html-emails">Email HTML Tips.</a> -- Mailchimp.</li>
                        </ul>
                    </div><!--/.row-fluid shift-down-->

                </div><!--/.alert-->

                <div class='row-fluid'>
                    <a class='btn btn-block' href='#modal-message-cheatsheet' role='button' data-toggle='modal'>View Dictionary Cheatsheet</a>
                </div> <!--/.row-fluid-->

                <div class='modal cheatsheet hide fade' id='modal-message-cheatsheet' role='dialog' tabindex='-1'>
                    <div class='modal-header red-background'>
                        <button class='close' data-dismiss='modal' type='button'>&times;</button>
                        <h3>Dictionary Cheatsheet</h3>
                    </div><!--/.modal-header-->
                    <div class='modal-body'>
                       
                        <h4>Default Items</h4>
                        <ul class='list-unstyled dictionary-list'>
                            <li><span class='item-name'>Site Name</span><span class='definition'>BizGym</span></li>
                            <li><span class='item-name'>Site Email</span><span class='definition'>support@bizgym.com</span></li>
                        </ul>
            
                    </div><!--/.modal-body-->

                    <div class='modal-footer'>
                        <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Close</button>
                    </div><!--/.modal-footer-->
                </div><!--/.modal hide fade-->




            </div><!--/.span4 box-->
        </div><!--/.row-fluid-->



       



    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop