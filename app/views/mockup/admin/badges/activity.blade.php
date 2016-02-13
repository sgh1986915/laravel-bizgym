@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin alerts' id='content-wrapper'>
    <div class='span12 badges'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Badge Activity</span>
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
                            Badges
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Early Bird
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                See the details of your badge and find out how it's doing.
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button' href='#modal-assign-badge' data-toggle='modal'><i class='icon-user'> </i>Assign to a User</a>
                <a class='btn btn-default'><i class='icon-edit'> </i> Edit this Badge</a>
                <a class='btn btn-default' role='button'>Go Back to Badges</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        <div class='row-fluid alert-details'>
            <div class='span12 box'>
               
                <div class='box-content'>
                        
                    <div class='row-fluid'>
                        <div class='span9'>
                            <div class='row-fluid'>
                                <div class='title'>Early Bird Badge</div>

                                <div class='badge-status'>
                                    <div class='status badge-count label-info'>192 Recipients</div> <!--/.div-->

                                    <div class='status active'><i class='icon-ok'> </i> Active</div> <!--/.div-->
                                    <!--<div class='status inactive'><i class='icon-ban-circle'> </i> Inactive</div>  --><!--/.div-->
                                
                                </div><!--/.badge-status-->
                            </div><!--/.row-fluid-->

                            <div class='row-fluid'>
                                <div class='alert-text'>
                                    <div class='lead'>Badge Text</div>
                                    <p>Hey, you're one of our first users!
                                </div>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid'>
                                <i class='icon-trophy meta-label'> </i>Badge Type: <strong>Achievement</strong>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid shift-down'>
                                <i class='icon-calendar meta-label'> </i>Badge set to expire <span class='alert-date'>December 28, 2013</span>
                            </div><!--/.row-fluid-->
                            

                            <div class='row-fluid shift-down'>
                               <i class='icon-pencil meta-label'> </i>Created <span class='alert-date'>Friday May 7, 2013 at 7:35 pm</span>

                             
                            </div><!---/.row-fluid-->
                        </div><!--/.span9-->

                        <div class='span3'>
                            <div class='alert-image'>
                                <img src='http://placehold.it/150x150'>
                            </div><!--/.alert-image-->
                        </div> <!--/.span3-->

                    </div><!--/.row-fluid-->

                </div><!--/.box-content-->
            </div><!--/.span12 box-->

        </div><!--/.row-fluid-->


        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-trophy'> </i>Badge Recipients</div>
                <div class='actions'>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table data-table alerts-statistics table-bordered table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Date
                        </th>

                        <th>
                            Name
                        </th>
                        <th>
                            Memo
                        </th>
                        <th>
                            Action
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-title='Recipient #'>1</td>
                            <td data-title='Date of Award'>5/7/2013 at 10:28 pm</td>
                            <td data-title='Name'>Jimmy Johnson</td>
                            <td data-title='Memo'><span class='muted'>None</span></td>
                            <td data-title='Action'><a href='#' class='btn btn-mini user-action-btn'><i class='icon-remove'> </i> Remove Award</a></td>
                        </tr>

                        <tr>
                            <td data-title='Recipient #'>2</td>
                            <td data-title='Date of Award'>5/7/2013 at 10:15 pm</td>
                            <td data-title='Name'>Jewels Vienna</td>
                            <td data-title='Memo'><span class='muted'>None</span></td>
                            <td data-title='Action'><a href='#' class='btn btn-mini user-action-btn'><i class='icon-remove'> </i> Remove Award</a></td>
                        </tr>

                        <tr>
                            <td data-title='Recipient #'>3</td>
                            <td data-title='Date of Award'>5/7/2013 at 10:28 pm</td>
                            <td data-title='Name'>Bobby Knight</td>
                            <td data-title='Memo'>Congrats user!</td>
                            <td data-title='Action'><a href='#' class='btn btn-mini user-action-btn'><i class='icon-remove'> </i> Remove Award</a></td>
                        </tr>

                    </tbody>
                </table> 
            </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->


<div class='modal hide fade' id='modal-assign-badge' role='dialog' tabindex='-1'>
    <div class='modal-header red-background'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>Assign Badge to User</h3>
    </div><!--/.modal-header-->
    <div class='modal-body'>
        <form class='span8 validate-form' novalidate='novalidate'>
            
            <div class='control-group'>
                <label class='control-label'>Pick a User</label><p class='help-block'>Who do you want to assign this badge to?</p>
                <div class='controls'>
                    <input type="text" class="input-block-level" id="typeahead" data-rule-required='true' data-provide="typeahead" data-items="4" data-source='["Abe Lincoln", "Bob Jones", "Cara Carne", "Dean Waltz", "Emily Bowles"]'>
                </div><!--/.controls-->
            </div><!--/.control-group-->

            <div class='control-group'>
                <label class='control-label'>Date and time to reward</label><p class='help-block'>Select the date and time in which you would like to assign this badge.</p>
                <div class='controls'>
                    <div class='datetimepicker input-append' id='datetimepicker'>
                        <input class='input-medium' data-format='MM/dd/yyyy HH:mm:ss PP' data-rule-required='true' id='badge_time' placeholder='Select Date and Time' type='text'>
                        <span class='add-on'>
                          <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                        </span>
                    </div><!--/.date-time-picker-->
                </div><!--/.controls-->
            </div><!--/.control-group-->


                <div class='control-group'>
                    <label class='control-label'>Notes</label><p class='help-block'>Add a note to go with this badge reward</p>
                        <div class='controls'>
                        <textarea class='input-block-level' rows='3' placeholder='Enter your note' id='badge_memo'></textarea>
                    </div><!--/.controls-->
                </div> <!--/.control group-->


            
        
        </form>
        
    </div><!--/.modal-body-->

    <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
         <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-ok-sign'> </i> Assign Badge</button>
    </div><!--/.modal-footer-->
</div><!--/.modal hide fade-->
       



    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    

@stop

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure you want to remove this reward from the user?')
    
})
@stop