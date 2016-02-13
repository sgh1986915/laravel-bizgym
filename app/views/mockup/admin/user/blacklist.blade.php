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
                        <span>Blacklist</span>
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
                            Blacklist
                        </li>

                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Email Addresses and IP Addresses that have been blocked
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'><i class='icon-globe'> </i> View All Users </a>
                <a class='btn btn-default' role='button'><i class='icon-ban-circle'> </i> View Suspended Users</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Blacklist</div>
                        <div class='actions'><a class='btn btn-small' href='#modal-new-blacklist' role='button' data-toggle='modal'><i class='icon-plus'> </i>Add to Blacklist</a> </div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
                            <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Blacklisted Value
                                    </th>                                    
                                  
                                    <th>
                                        Date Blacklisted
                                    </th>
                                    

                                    <th>
                                        Reason
                                    </th>
                                    
                                    <th>
                                        Action
                                    </th>



                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-title='Type'>Email</td>
                                        <td data-title='Value'>bob@james.com</td>
                                        <td data-title='Date Blacklisted'>9/9/12 at 14:21:31</td>
                            
                                        <td data-title='Reason'>Spam</td>
                                      
                                        <td data-title='Actions'>
                                            <a class='btn btn-mini'><i class='icon-user'> </i>Access History</a>
                                            <a class='btn btn-mini' href='#modal-edit-blacklist' role='button' data-toggle='modal'>
                                                <i class='icon-edit'> </i>Edit
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td data-title='Type'>IP Address</td>
                                        <td data-title='Value'>101.10101.10.1</td>
                                        <td data-title='Date Blacklisted'>9/9/12 at 14:21:31</td>
                                      
                                        <td data-title='Reason'>Spam</td>
                                 
                                        <td data-title='Actions'>
                                            <a class='btn btn-mini'><i class='icon-user'> </i>Access History</a>
                                            <a class='btn btn-mini' href='#modal-edit-blacklist' role='button' data-toggle='modal'>
                                                <i class='icon-edit'> </i>Edit
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


        <div class='modal hide fade' id='modal-new-blacklist' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Blacklist a User</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Type</label><p class='help-block'>Do you want to Blacklist an email or IP address?</p>
                        <div class='controls'>
                            <select id="blacklist_type" class="select input-block-level" name="blacklist_type">
                                <option value='0' disabled selected style='display:none;'>Select Type</option>
                                <option value='email'>Email</option>
                                <option value='ip'>IP Address</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label classs='control-label'>Value to Blacklist</label><p class='help-block'>Enter the value of the item that you want to blacklist, whether it is an email address or IP address</p>
                        <div class='controls'>
                            <input id='blacklist-value' type='text' placeholder='Email or IP Address'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

               

                    <div class='control-group'>
                        <label class='control-label'>Reason</label><p class='help-block'>Why are you blacklisting this user?</p>
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
                 <button class='btn btn-default btn-inverse' data-dismiss='modal'><i class='icon-book'> </i>Blacklist User</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->


        <div class='modal hide fade' id='modal-edit-blacklist' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Edit Blacklist</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    

                    <div class='control-group'>
                        <label class='control-label'>Type</label><p class='help-block'>Do you want to Blacklist an email or IP address?</p>
                        <div class='controls'>
                            <select id="blacklist_type" class="select input-block-level" name="blacklist_type">
                                <option value='0' disabled selected style='display:none;'>Select Type</option>
                                <option selected value='email'>Email</option>
                                <option value='ip'>IP Address</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label classs='control-label'>Value to Blacklist</label><p class='help-block'>Enter the value of the item that you want to blacklist, whether it is an email address or IP address</p>
                        <div class='controls'>
                            <input id='blacklist-value' type='text' placeholder='Email or IP Address' value='bob@james.com'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Reason</label><p class='help-block'>Why are you blacklisting this user?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Reason</option>
                                <option value=''>Spam</option>
                                <option value=''>Flaming</option>
                                <option selected value='3'>Late Payments</option>
                                <option value=''>Fake Account</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'>Cancel</button>
                <button class='btn btn-default btn-danger' data-dismiss='modal'><i class='icon-remove'> </i> Remove from Blacklist</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-book'> </i>Update Blacklist</button>
            </div><!--/.modal-footer-->
        </div><!--/.modal hide fade-->

</div><!--/.row-fluid #content-wrapper-->
    
@stop