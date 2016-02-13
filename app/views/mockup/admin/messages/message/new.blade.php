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
                        <span>Create New Application Message</span>
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
                            New
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Create a new message to send your users after a specific event
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Messages</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid'>
            <div class='span8 box'>
               
                <div class='box-content'>
                    <form class='form form-horizontal'>
                        <fieldset>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Message Type</label>
                                <div class='controls'>
                                    <select id='type'>
                                        <option>System</option>
                                        <option>Admin</option>
                                    </select>

                                </div><!--/.controls-->
                            </div> <!--/.control-group-->


     

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Recipient Group</label>
                                <div class='controls'>
                                    <select id='group'>
                                        <option>Users</option>
                                        <option>Subscribers</option>
                                        <option>Company</option>
                                    </select>

                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                         

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Template</label>
                                <div class='controls'>
                                    <select name='template'>
                                        <option>Users</option>
                                        <option>Subscribers</option>
                                        <option>Company</option>
                                    </select>

                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                     

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Dictionary</label>
                                <div class="controls">
                                    <select name="dictionary">
                                        <option value="0">Default</option>
                                        <option selected="selected" value="1">Reseller</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                         

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Frequency</label>
                                <div class="controls">
                                    <select name="frequency">
                                        <option value="0">Immediately</option>
                                        <option selected="selected" value="1">Daily</option>
                                        <option value="2">Hourly</option>
                                        <option value="2">Weekly</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='normal'></hr>


                            <div class='control-group'>
                                <label class='control-label'>Message Subject</label>
                                <div class='controls'>
                                    <input class='span6' id='full-name' placeholder='Subject' type='text'>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Message Body</label>
                                <div class="controls">
                                    <textarea id='inputTextArea1' class='span12' placeholder='Text for your message' rows='8'></textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                        </fieldset>
                        <div class='form-actions' style='margin-bottom: 0;'>
                            <div class='text-right'>
                                <div class='btn btn-default btn-large'>
                                    <i class='icon-arrow-left'></i>
                                    Go Back to Messages
                                </div>

                                <div class='btn btn-primary btn-large'>
                                    <i class='icon-save'></i>
                                    Save This Message
                                </div>
                            </div>
                        </div><!--/.form-actions-->
                    </form>
                </div><!--/.box-content-->
            </div><!--/.span6 box-->

            <div class='span4 box'>
                <div class='alert alert-info'>
                    <a class="close" href="#" data-dismiss="alert">×</a>
                    <p>Some tips for creating messages
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