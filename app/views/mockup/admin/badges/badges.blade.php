@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin badges' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Badges</span>
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
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Manage the Badges that users receive for accomplishments
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Manage Badge Types </a><a class='btn btn-default' role='button'>Return to Admin </a>
            </div><!--/.btn-group-->
        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Existing Badges</div>
                        <div class='actions'><a class='btn btn-small' href='#modal-new-badge' role='button' data-toggle='modal'><i class='icon-plus'> </i>Add a Badge</a> </div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
                            <table class='data-table table badge-table table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Type
                                    </th>                                    
                                    <th>
                                        Badge Text
                                    </th>
                                    
                                    <th>
                                        Active Date
                                    </th>
                                    <th>
                                        Expirtation Date
                                    </th>

                                    <th>
                                        # Awarded
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-title='Image'><img src="http://placehold.it/60x60"></td>
                                        <td data-title='Name'>Early Bird</td>
                                        <td data-title='Type'>Achievement</td>
                                        <td data-title='Text'>Hey, you are one of our first users!</td>
                                        <td data-title='Active Date'>June 3, 2013</td>
                                        <td data-title='Expiration Date'>Never</td>
                                        <td data-title='# of Times Awarded'>10</td>
                                        <td data-title='Actions'>
                                            <a class='btn btn-mini'>Summary</a>
                                            <a class='btn btn-mini' href='#modal-edit-badge' role='button' data-toggle='modal'>
                                                <i class='icon-edit'> </i>Edit
                                            </a>
                                            <a class='btn btn-mini'>
                                                <i class='icon-remove'> </i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td data-title='Image'><img src="http://placehold.it/60x60"></td>
                                        <td data-title='Name'>First Download</td>
                                        <td data-title='Type'>Achievement</td>
                                        <td data-title='Text'>Congrats on downloading your first product!</td>
                                        <td data-title='Active Date'>June 3, 2013</td>
                                        <td data-title='Expiration Date'><span class='label label-important'>Expired: 9/9/13</span></td>
                                        <td data-title='# of Times Awarded'>184</td>
                                        <td data-title='Actions'>
                                            <a class='btn btn-mini'>Summary</a>
                                            <a class='btn btn-mini' href='#modal-edit-badge' role='button' data-toggle='modal'>
                                                <i class='icon-edit'> </i>Edit
                                            </a>
                                            <a class='btn btn-mini'>
                                                <i class='icon-remove'> </i>
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

    <div class='modal hide fade' id='modal-new-badge' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Add a Badge</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8'>
                    
                    <div class='control-group'>
                        <label class='control-label'>Title</label><p class='help-block'>What do you want to call this badge??</p>
                        <div class='controls'>
                            <input id='badge_title' class='input-block' placeholder='Ex: New Users'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Type</label><p class='help-block'>What type of action is this badge for?</p>
                        <div class='controls'>
                            <select id="duration" class="select input-block-level" name="duration">
                                <option value='0' disabled selected style='display:none;'>Select Type</option>
                                <option value=''>Achievement</option>
                                <option value=''>Special Occasion</option>
                                <option value=''>Brand Specific</option>
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Text</label><p class='help-block'>Enter some text to describe your badge when it is received by the user</p>
                        <div class='controls'>
                            <textarea id='badge_text' placeholder='Enter some badge text' rows='3' class='input-block-level'></textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                     <div class='control-group'>
                        <label class='control-label'>Image</label><p class='help-block'>The most important part, your actual badge.</p>
                        <div class='controls'>
                            <input id='badge-image' title='Search for a file to add' type='file'>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Active Date</label><p class='help-block'>When should this badge be active in the system?</p>
                        <div class='controls'>
                            <div class='datepicker input-append' id='datepicker'>
                                <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' type='text'>
                                <span class='add-on'>
                                  <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                </span>
                            </div><!--/.date-picker-->
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Expiration Date</label><p class='help-block'>When should this badge expire? Leave blank if the badge should not expire.</p>
                        <div class='controls'>
                            <div class='datepicker input-append' id='datepicker'>
                                <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' type='text'>
                                <span class='add-on'>
                                  <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                </span>
                            </div><!--/.date-picker-->
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i> Save Badge</button>
            </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->


    <div class='modal hide fade' id='modal-edit-badge' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Badge</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8'>
                
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this badge??</p>
                    <div class='controls'>
                        <input id='badge_title' class='input-block' placeholder='Ex: New Users' value='Early Bird'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Type</label><p class='help-block'>What type of action is this badge for?</p>
                    <div class='controls'>
                        <select id="duration" class="select input-block-level" name="duration">
                            <option value='0' disabled selected style='display:none;'>Select Type</option>
                            <option selected value=''>Achievement</option>
                            <option value=''>Special Occasion</option>
                            <option value=''>Brand Specific</option>
                        </select>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Text</label><p class='help-block'>Enter some text to describe your badge when it is received by the user</p>
                    <div class='controls'>
                        <textarea id='badge_text' placeholder='Enter some badge text' rows='3' class='input-block-level'>Hey, you are one of our first users!</textarea>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                 <div class='control-group'>
                    <label class='control-label'>Image</label><p class='help-block'>The most important part, your actual badge.</p>

                    <div class='row-fluid' style='padding:1em;'>
                        <img src="http://placehold.it/250x250">
                    </div><!--/.row-fluid-->

                    <div class='controls'>
                        <input id='badge-image' title='Search for a file to add' type='file'>
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Active Date</label><p class='help-block'>When should this badge be active in the system?</p>
                    <div class='controls'>
                        <div class='datepicker input-append' id='datepicker'>
                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' value='2013/06/03' type='text'>
                            <span class='add-on'>
                              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                            </span>
                        </div><!--/.date-picker-->
                    </div><!--/.controls-->
                </div><!--/.control-group-->


                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Expiration Date</label><p class='help-block'>When should this badge expire? Leave blank if the badge should not expire.</p>
                    <div class='controls'>
                        <div class='datepicker input-append' id='datepicker'>
                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select date' type='text'>
                            <span class='add-on'>
                              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                            </span>
                        </div><!--/.date-picker-->
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