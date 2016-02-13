@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid team' id='content-wrapper'>
  
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class='pull-left'>
                    <h1>
                        <i class='icon-envelope-alt text-contrast'></i>
                        <span>Bulk Invite</span>
                    </h1>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                            <i class='icon-briefcase'> </i> {Company Name}
                        </li>
                        
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Bulk Invite
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    


        <div class='row-fluid'>
            <div class='span8 box'>
                <div class='box-content'>
                    <div class='row-fluid'>
                        <form class='span8'>
                            <div class='lead small'>Grow your company and invite as many people as your subscription will allow you to. <i class='icon-rocket text-contrast'></i> </div>
                            <fieldset>
                            <div class='control-group'>
                                <strong>Email Addresses</strong><p class='help-block'>Enter the email addresses of the people who you would like to invite. One email address per line, and no punctuation.</p>
                                <div class='controls'>
                                    <textarea rows='15' class='input-block-level' id='invite_emails' placeholder='Enter email addresses, "john@smith.com"'></textarea>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <hr class='normal'>

                            <div class='control-group'>
                                <strong>User Role</strong><p class='help-block'>What user role do you want to assign these people to? If you need to assign different user roles, you will need to perform separate bulk invites.</p>
                                <div class='controls'>
                                    <select id='invite-role' class='input-block-level'>
                                        <option value='0'>Executive</option>
                                        <option value='1'>Consultant</option>
                                        <option value='2'>Employee</option>
                                    </select>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->
                        </fieldset>

                        <div class="form-actions">
                            <div class='btn-group pull-right'>
                                <a class='btn btn-large btn-default'><i class='icon-arrow-left'> </i> Go Back to Team</a>
                                <a class='btn btn-large btn-primary'><i class='icon-share-alt'> </i> Send Invites</a>
                            </div><!--/.btn-group-->
                        </div><!--/.form-actions-->

                        </form>

                    </div><!--/.row-fluid-->

                </div><!--/box-content-->


            </div><!--/.span8 box-->

            <div class='span4'>

                <div class='row-fluid shift-up'>
                    <div class="span12">
                        <div class="box-content box-statistic">
                            <h3 class="title text-success">133/200</h3>
                            <small>Seats Used</small>
                            <div class="text-success icon-user align-right"></div>
                        </div> <!--/.box-content-->
                    </div><!--/.span12-->
                </div><!--/.row-fluid-->

                            
                <div class='row-fluid'>
                    <div class="span12 box">
                        <div class="box-content">
                            <div class='lead small'>Need more user seats?  </div>
                                <a class='btn btn-success' href='team/subscription'><i class='icon-credit-card'> </i> Upgrade your Subscription</a>
                            
                        </div><!--/.box-content-->
                    </div> <!--/.span12 box-->
                </div><!--/.row-fluid-->
                                            
                        

                <div class='row-fluid'>
                    <div class="span12 box">
                        <div class="box-header">
                            <div class="title">
                               <i class='icon-share-alt'> </i> Pending Invitations
                            </div><!--/.title-->
                            <div class="actions">
                                
                            </div><!--/.actions-->
                        </div><!--/.box-header-->
                        <div class="box-content">
                           <ul class='invites-sent unstyled list-striped list-hover'>
                            <li class='has-popover' data-content='Invited as an Employee' data-title='james@james.com' data-placement='left'><i class='icon-envelope'> </i> <span class='person'>James Frank</span><span class='pull-right'><span class='date'><i class='icon-time'> </i> 2 Hours Ago</span><span class='resend'><a href='#'>Resend</a></span></span></li>
                            <li class='has-popover' data-content='Invited as an Executive' data-title='bill@bob.com' data-placement='left'><i class='icon-envelope'> </i> <span class='person'>Bill Bob</span><span class='pull-right'><span class='date'><i class='icon-time'> </i> 5 Hours Ago</span><span class='resend'><a href='#'>Resend</a></span></span></li>
                            <li class='has-popover' data-content='Invited as a Consultant' data-title='dayum@hello.com' data-placement='left'><i class='icon-envelope'> </i> <span class='person'>Vanessa Carne</span><span class='pull-right'><span class='date'><i class='icon-time'> </i> 3 Days Ago</span><span class='resend'><a href='#'>Resend</a></span></span></li>
                           </ul>
                        </div><!--/.box-content-->
                    </div> <!--/.span12 box-->
                </div><!--/.row-fluid-->
            </div><!--/.span4-->
        </div><!--/.row-fluid-->



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


    </div><!--/.span12-->     
</div><!--/.row-fluid #content-wrapper-->


@stop