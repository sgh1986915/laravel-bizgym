@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')



<div class='row-fluid' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <h3 class='pull-left'>
                    <i class='icon-comment-alt'></i>
                    <span>Invite a Friend</span>
                </h3>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid invite-friend'>

            <div class='span8'>
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-content box-double-padding'>
                        
                            <h2>Who would you like to join you on BizGym?</h2>

                            <div class='row-fluid'>
                                <p style='font-size:1.5em; line-height:1.6em; font-weight:200;'>Hey, don't keep all of the fun to yourself. Invite your friends to join you on BizGym. Feel free to send them a generic message via email, or a social network. </p>
                            </div>
                            
                            <div class='row-fluid shift-down'>
                                <a class='btn btn-primary invite' data-target='#invitation' data-toggle='collapse'>
                                    <span class='invite-left'><i class='icon-envelope'> </i></span> <span class='invite-right'>Invite through an Email </span>
                                </a>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid collapse' id='invitation'>

                                <div id='invite'>
                                    <form accept-charset="UTF-8" action="#" class="form" method="post" style="margin-bottom: 0;"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>

                                        <div class='control-group'>
                                            <label class='control-label' for='inputText'>Name</label>
                                            <div class='controls'>
                                                <input id='inputName' type='text' placeholder='Bob Smith'>
                                            </div><!--/.controls-->
                                        </div><!--/.control-group-->

                                        <div class='control-group'>
                                            <label class='control-label' for='inputText'>Email</label>
                                            <div class='controls'>
                                                <input id='inputEmail' type='text' placeholder='bob@bob.com'>
                                            </div>
                                        </div><!--/.control-group-->

                                        <div class='control-group'>
                                            
                                            <h4>Would you like your friend to join your Company?</h4>
                                            <div class='controls'>
                                                <label class='checkbox'>
                                                    <input data-target='#join-company' data-toggle='collapse' id='join-company-check' type='checkbox' value='option1'>
                                                       Yes, join a company
                                                </label>

                                                <label class='checkbox'>
                                                    <input type='checkbox' value='false'>
                                                        No, thanks
                                                </label>

                                            </div><!--/.controls-->
                                        </div><!--/.control-group-->

                                        <div class='collapse' id='join-company'>

                                            <div class='control-group shift-down'>
                                                
                                                <label class='control-label' for='inputText'>Which company would you like your friend to join?</label>
                                                <div class='controls'>
                                                     <select name='company' id='DropDownCompany'>
                                                        <option>Company A</option>
                                                        <option>Company B</option>
                                                        <option>Company C</option>
                                                        <option>Company D</option>
                                                    </select>
                                                </div>
                                            </div><!--/.control-group-->

                                            <div class='control-group shift-down'>
                                                
                                                <label class='control-label' for='inputText'>Which role should they have?</label>
                                                <div class='controls'>
                                                     <select name='company' id='DropDownCompany'>
                                                        <option>Manager</option>
                                                        <option>Employee</option>
                                                        <option>Consultant</option>
                                                    </select>
                                                </div>
                                            </div><!--/.control-group-->

                                            <hr class='normal'>

                                        </div><!--/.collapse #join-company-->




                                        <div class='control-group shift-down'>
                                            
                                            <label class='control-label' for='inputText'>Add a personal message for your friend</label>
                                            <div class='controls'>
                                                 <textarea id="inputTextArea1" class='span8' rows="5" placeholder="Your message"></textarea>
                                            </div>
                                        </div><!--/.control-group-->

                                        <div class='row-fluid'>
                                            <div class='span12'>
                                                <div class='btn-group'>
                                                    <a class='btn btn-large btn-success' id='save-settings'><i class='icon-envelope'></i> Send Invite</a>
                                                </div><!--/.btn-group-->
                                            </div><!--/.span12-->
                                        </div><!--/.row-fluid-->

                                    </form>

                                </div><!--/#invite-->
                            </div><!--/row-fluid-invite-->

                            <div class='row-fluid shift-down'>
                                <a class='btn invite btn-primary'>
                                    <span class='invite-left'><i class='icon-facebook'> </i></span><span class='invite-right'> Invite your Facebook Friends</span>
                                </a>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid shift-down'>
                                <a class='btn invite btn-primary'>
                                    <span class='invite-left'><i class='icon-twitter'> </i> </span><span class='invite-right'>Invite your Twitter Friends</span>
                                </a>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid shift-down shift-up'>
                                <a class='btn invite btn-primary'>
                                    <span class='invite-left'><i class='icon-google-plus-sign '> </i> </span><span class='invite-right'> Invite your Gmail Contacts</span>
                                </a>
                            </div><!--/.row-fluid-->
                     
                        </div><!--/.box-contnet-->
                    </div><!--/.span12 box-->
                </div><!--/.row-fluid-->
            </div><!--./span8-->

            <div class='span4'>
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
                            <li class='has-popover' data-content='Invited to join X Company' data-title='james@james.com' data-placement='left'><i class='icon-envelope'> </i> <span class='person'>James Frank</span><span class='pull-right'><span class='date'><i class='icon-time'> </i> 2 Hours Ago</span><span class='resend'><a href='#'>Resend</a></span></span></li>
                            <li class='has-popover' data-content='Invited to sign up' data-title='bill@bob.com' data-placement='left'><i class='icon-envelope'> </i> <span class='person'>Bill Bob</span><span class='pull-right'><span class='date'><i class='icon-time'> </i> 5 Hours Ago</span><span class='resend'><a href='#'>Resend</a></span></span></li>
                            <li class='has-popover' data-content='Invited to join X Company' data-title='dayum@hello.com' data-placement='left'><i class='icon-envelope'> </i> <span class='person'>Vanessa Carne</span><span class='pull-right'><span class='date'><i class='icon-time'> </i> 3 Days Ago</span><span class='resend'><a href='#'>Resend</a></span></span></li>
                           </ul>
                        </div><!--/.box-content-->
                    </div> <!--/.span12 box-->
                </div><!--/.row-fluid-->
            </div><!--/.span4-->


        </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid create #contnet-wrapper-->
    

@stop