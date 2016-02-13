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
                        <span>Manage Badge Types</span>
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
                            Badge Types
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Manage the different types of Badges that users can receive
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Manage Badges </a><a class='btn btn-default' role='button'>Return to Admin </a>
            </div><!--/.btn-group-->
        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid' style='margin-bottom:2em;'>

            <div class='span12 box bordered-box purple-border' style=''>
                <div class='box-header muted-background'>
                        <div class='title'>Existing Badge Types</div>
                        <div class='actions'><a class='btn btn-small' href='#modal-new-type' role='button' data-toggle='modal'><i class='icon-plus'> </i>Add a Type</a> </div>
                    </div><!--/.box-header-->
                <div class='box-content box-no-padding'>
                    
                    <table class='data-table table badge-table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>

                            <th>
                                Name
                            </th>
                            <th>
                                Description
                            </th>                                    
                            <th>
                                # of Badges
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
                                <td data-title='Name'>Achievement</td>
                                <td data-title='Description'>This is for general user actions</td>
                                <td data-title='Number of Badges'>134</td>
                                <td data-title='# of Bages Awarded'>10</td>
                                <td data-title='Actions'>
    
                                    <a class='btn btn-mini' href='#modal-edit-type' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini user-action-btn'>
                                        <i class='icon-trash'> </i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'>Special Occation</td>
                                <td data-title='Description'>This is for Birthdays and stuff</td>
                                <td data-title='Number of Badges'>134</td>
                                <td data-title='# of Bages Awarded'>15</td>
                                <td data-title='Actions'>
    
                                    <a class='btn btn-mini' href='#modal-edit-type' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini user-action-btn'>
                                        <i class='icon-trash'> </i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Name'>Brand Specific</td>
                                <td data-title='Description'>This is brand related</td>
                                <td data-title='Number of Badges'>2</td>
                                <td data-title='# of Bages Awarded'>15</td>
                                <td data-title='Actions'>
    
                                    <a class='btn btn-mini' href='#modal-edit-type' role='button' data-toggle='modal'>
                                        <i class='icon-edit'> </i>Edit
                                    </a>
                                    <a class='btn btn-mini user-action-btn'>
                                        <i class='icon-trash'> </i>
                                    </a>
                                </td>
                            </tr>

                     

                        </tbody>
                    </table>
                </div><!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
            
        </div><!--/.row-fluid-->                      
    </div><!--/.span12-->

    <div class='modal hide fade' id='modal-new-type' role='dialog' tabindex='-1'>
            <div class='modal-header red-background'>
                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                <h3>Add a Badge Type</h3>
            </div><!--/.modal-header-->
            <div class='modal-body'>
                <form class='span8 validate-form' novalidate='novalidate'>
                    
                    <div class='control-group'>
                        <label class='control-label'>Title</label><p class='help-block'>What do you want to call this badge type?</p>
                        <div class='controls'>
                            <input id='badge_type_title' class='input-block' data-rule-required='true' placeholder='Ex: New Users'></input>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <hr class='normal'>

                    <div class='control-group'>
                        <label class='control-label'>Text</label><p class='help-block'>Enter some text to describe your badge type</p>
                        <div class='controls'>
                            <textarea id='badge_type-text' placeholder='Enter some badge text' rows='3' class='input-block-level'></textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                </form>
                
            </div><!--/.modal-body-->

            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                 <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-save'> </i> Create Badge Type</button>
            </div><!--/.modal-footer-->
    </div><!--/.modal hide fade-->

    <div class='modal hide fade' id='modal-edit-type' role='dialog' tabindex='-1'>
        <div class='modal-header red-background'>
            <button class='close' data-dismiss='modal' type='button'>&times;</button>
            <h3>Edit Badge Type</h3>
        </div><!--/.modal-header-->
        <div class='modal-body'>
            <form class='span8 validate-form' novalidate='novalidate'>
                
                <div class='control-group'>
                    <label class='control-label'>Title</label><p class='help-block'>What do you want to call this badge type?</p>
                    <div class='controls'>
                        <input id='badge_type_title' class='input-block' data-rule-required='true' placeholder='Ex: New Users' value='Achievement'></input>
                    </div><!--/.controls-->
                </div><!--/.control-group-->


                <hr class='normal'>

                <div class='control-group'>
                    <label class='control-label'>Text</label><p class='help-block'>Enter some text to describe your badge type</p>
                    <div class='controls'>
                        <textarea id='badge_type-text' placeholder='Enter some badge text' rows='3' class='input-block-level'>This is for general user actions</textarea>
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

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure? This will also delete all badges within this badge type.')
    
})
@stop