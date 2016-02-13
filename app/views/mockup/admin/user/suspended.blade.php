@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin users' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Suspended Users</span>
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
                            Users
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Suspended Users
                        </li>

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Users who are not allowed to access your application
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'><i class='icon-globe'> </i> View All Users </a>
                <a class='btn btn-default' role='button'><i class='icon-book'> </i> View the Blacklist</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Suspended Users</div>
                        <div class='actions'><a class='btn btn-small' href='#modal-new-suspension' role='button' data-toggle='modal'><i class='icon-plus'> </i>Suspend a User</a> </div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
                            <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    
                                    <th>
                                        User Name
                                    </th>
                                    <th>
                                        Full Name
                                    </th>                                    
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Date Suspended
                                    </th>
                                    
                                    <th>
                                        Suspended By
                                    </th>

                                    <th>
                                        Reason
                                    </th>
                                    <th>
                                        Duration
                                    </th>
                                    <th>
                                        Action
                                    </th>



                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-title='User Name'>Bob230923</td>
                                        <td data-title='Full Name'>Bob Knight</td>
                                        <td data-title='Email'>bob@espn.com</td>
                                        <td data-title='Date Suspended'>9/9/12</td>
                                        <td data-title='Suspended by'>Steve Sue</td>
                                        <td data-title='Reason'>Spam</td>
                                        <td data-title='Duration'>Forever</td>
                                        <td data-title='Actions'>
                                            <a class='btn btn-mini'><i class='icon-user'> </i> User History</a>
                                            <a class='btn btn-mini' href='#modal-edit-suspension' role='button' data-toggle='modal'>
                                                <i class='icon-edit'> </i>Edit Suspension
                                            </a>


                                            
                                            
                                        </td>
                                    </tr>

                                    

                                    

                                </tbody>
                            </table>
                        </div><!--/.scrollabe-area-->
                    </div><!--/.responsive-table-->
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                    

  
    </div><!--/.span12-->


        <div class='modal hide fade' id='modal-new-suspension' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Suspend a User</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>User</label><p class='help-block'>Who do you want to suspend?</p>
                        <div class='controls'>
                            <select id="suspend_user" class="select2 input-block-level" name="suspend_user">
                                <option value='0' disabled selected style='display:none;'>Search Users</option>
                                <option value=''>User123</option>
                                <option value=''>Bob123</option>
                                <option value=''>JaySilentBob</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Duration</label><p class='help-block'>How long do you want to suspend this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Duration</option>
                                <option value=''>1 Day</option>
                                <option value=''>1 Week</option>
                                <option value=''>1 Month</option>
                                <option value=''>Forever</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Reason</label><p class='help-block'>Why are you suspending this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Reason</option>
                                <option value=''>Spam</option>
                                <option value=''>Flaming</option>
                                <option value=''>Late Payments</option>
                                <option value=''>Fake Account</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-ban-circle'> </i> Suspend User</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->


        <div class='modal hide fade' id='modal-edit-suspension' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Modify Suspension</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>User</label><p class='help-block'>Who do you want to suspend?</p>
                        <div class='controls'>
                            <select id="suspend_user" class="select2 input-block-level" name="suspend_user">
                                <option value=''>User123</option>
                                <option selected value=''>Bob230923</option>
                                <option value=''>JaySilentBob</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Duration</label><p class='help-block'>How long do you want to suspend this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Duration</option>
                                <option value=''>1 Day</option>
                                <option value=''>1 Week</option>
                                <option value=''>1 Month</option>
                                <option selected value=''>Forever</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Reason</label><p class='help-block'>Why are you suspending this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Reason</option>
                                <option selected value=''>Spam</option>
                                <option value=''>Flaming</option>
                                <option value=''>Late Payments</option>
                                <option value=''>Fake Account</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'> Cancel</button>
                <button class='btn btn-default btn-danger' data-dismiss='modal'><i class='icon-remove'> </i>Remove Suspension</button>
                <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i>Update Suspension</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->

</div><!--/.row-fluid #content-wrapper-->
    
@stop