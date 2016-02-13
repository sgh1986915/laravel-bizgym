@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid team' id='content-wrapper'>
  
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class='pull-left'>
                    <h1>
                        <i class='icon-group text-contrast'></i>
                        <span>Your Team</span>
                    </h1>
                </div><!--/.pull-left-->

                <div class='pull-right'>
                    <ul class='breadcrumb'>
                        <li>
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->
    

        <div class="row-fluid section-header">
            <div class='title'>
                {Company Name} Team Members
            </div><!--/.title-->
        </div><!--/.row-fluid-->



        <div class='row-fluid'>
            <div class='span8'>
                <div class='gallery'>
                    <div class='row-fluid gallery-controls'>

                        <div class='search-users pull-left'>
                                <form>
                                    <div class='input-prepend'>
                                        <span class='add-on'><i class='icon-search'></i> </span><input type="text" class="search-query" placeholder="Search Users">
                                    </div>
                                </form>
                        </div>
                    

                        <div class='pull-right gallery-options'>
                            <div class='per-page'>
                                <label>
                                    <select id='number-users' class='input-small'>
                                        <option value='10'>10</option>
                                        <option value='20'>20</option>
                                    </select>
                                    Users Per Page
                                </label>
                            </div>
                            <div class='user-filter'>
                                <label>
                                    Filter By
                                    <select class='input-medium'>
                                        <option value='role'>Role</option>
                                        <option value='last_login'>Last Login</option>
                                        <option value='most_active'>Most Active</option>
                                        <option value='join_date'>Join Date</option>
                                    </select>
                                </label>
                            </div><!--/.per-page-->

                        </div><!--/pull-right-->
                    </div><!--/.row-fluid-->
                    <ul class='unstyled inline'>
                        <li>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-executive'>Executive</div>
                                </div>
                                <img alt="200x200" src="../../assets/images/member1.jpg" />
                                <div class='member-info'>
                                    <div class='user-name'>Jason Biggs</div>
                                    <div class='position'>CEO</div>
                                </div><!--/.user-info-->

                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href=''><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                      
                        </li>
                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-executive'>Executive</div>
                                </div>
                                <img alt="200x200" src="../../assets/images/member1.jpg" />
                                <div class='member-info'>
                                    <div class='user-name'>Ving Raymes</div>
                                    <div class='position'>Vice President</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>
                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-executive'>Executive</div>
                                </div>
                                <img alt="200x200" src="../../assets/images/member1.jpg" />
                                <div class='member-info'>
                                    <div class='user-name'>Tara Reid</div>
                                    <div class='position'>CFO</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>

                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-consultant'>Consultant</div>
                                </div>
                                <img alt="200x200" src="../../assets/images/member1.jpg" />
                                <div class='member-info'>
                                    <div class='user-name'>Drew Breeze</div>
                                    <div class='position'>Media Relations</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>

                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-employee'>Employee</div>
                                </div>
                                <img alt="200x200" src="../../assets/images/member1.jpg" />
                                <div class='member-info'>
                                    <div class='user-name'>Kim Kardashian</div>
                                    <div class='position'>Housekeeping</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>


                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-employee'>Employee</div>
                                </div>
                                <img alt="200x200" width='200' height='200' src="../../assets/images/placeholder.png" />
                                <div class='member-info'>
                                    <div class='user-name'>Billy Madison</div>
                                    <div class='position'>Penguin Searching</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>

                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-employee'>Employee</div>
                                </div>
                                <img alt="200x200" width='200' height='200' src="../../assets/images/placeholder.png" />
                                <div class='member-info'>
                                    <div class='user-name'>Billy Madison</div>
                                    <div class='position'>Penguin Searching</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>

                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-employee'>Employee</div>
                                </div>
                                <img alt="200x200" width='200' height='200' src="../../assets/images/placeholder.png" />
                                <div class='member-info'>
                                    <div class='user-name'>Billy Madison</div>
                                    <div class='position'>Penguin Searching</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>

                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-employee'>Employee</div>
                                </div>
                                <img alt="200x200" width='200' height='200' src="../../assets/images/placeholder.png" />
                                <div class='member-info'>
                                    <div class='user-name'>Billy Madison</div>
                                    <div class='position'>Penguin Searching</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>

                        <li>
                            <a class='gallery-object' href='user-stream'>
                            <div class='picture'>
                                <div class='tags'>
                                    <div class='label label-employee'>Employee</div>
                                </div>
                                <img alt="200x200" width='200' height='200' src="../../assets/images/placeholder.png" />
                                <div class='member-info'>
                                    <div class='user-name'>Billy Madison</div>
                                    <div class='position'>Penguin Searching</div>
                                </div><!--/.user-info-->
                                <div class='action'>
                                    <ul class='unstyled member-action'>
                                        <li>
                                            <a href='#'><i class='icon-user'> </i> View Profile</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-envelope'> </i> Message User</a>
                                        </li>
                                        <li>
                                            <a href='#'><i class='icon-key'> </i> Change Role</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/.picture-->
                            </a>
                        </li>
                    </ul><!--/ end-user-list-->
                </div><!--/.gallery-->


                <ul class='pager'>
                    <li class='previous disabled'>
                        <a href='#'>
                            <i class='icon-chevron-left'></i>
                            Previous Page
                        </a>
                    </li>
                    <li class='next'>
                        <a href='#'>
                            Next Page
                            <i class='icon-chevron-right'></i>
                        </a>
                    </li>
                </ul>

                <div class='pagination'>
                        <ul>
                            <li class='active'>
                                <a href='#'>«</a>
                            </li>
                            <li>
                                <a href='#'>1</a>
                            </li>
                            <li>
                                <a href='#'>2</a>
                            </li>
                            <li>
                                <a href='#'>3</a>
                            </li>
                            <li>
                                <a href='#'>4</a>
                            </li>
                            <li>
                                <a href='#'>5</a>
                            </li>
                            <li>
                                <a href='#'>»</a>
                            </li>
                        </ul>
                </div> <!--/.pagination-->


            </div><!--/.span8-->

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
                    <div class="span12 box invite-widget">
                        <div class="box-content box-padding">
                            <div class='lead'>
                                 <i class='icon-envelope-alt text-success'> </i> Send an Invitation
                            </div>

                            <form class='form validate-form' novalidate='novalidate'>
                            <fieldset>
                            <div class='control-group'>
                                <label class='control-label'>Name</label><p class='help-block'></p>
                                <div class='controls'>
                                    <input class='input-block-level' id='invite-name' data-rule-required='true' placeholder='John Smith' type='text'>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->
                            <div class='control-group'>
                                <label class='control-label'>Email</label><p class='help-block'></p>
                                <div class='controls'>
                                    <input class='input-block-level' id='invite-email' data-rule-required='true' data-rule-email='true' placeholder='john@example.com' type='text'>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->
                            <div class='control-group'>
                                <label class='control-label'>User Role</label><p class='help-block'></p>
                                <div class='controls'>
                                    <select id='invite-role' class='input-block-level'>
                                        <option value='0'>Executive</option>
                                        <option value='1'>Consultant</option>
                                        <option value='2'>Employee</option>
                                    </select>
                                </div><!--/.controls-->
                            </div><!--/.control-group-->
                            </fieldset>
                            <div class='row-fluid'>
                            <a class='btn btn-primary span6'><i class='icon-envelope'> </i >Send Invite</i></a>
                            </div>
                            </form>

                        </div><!--/.box-content-->
                    </div> <!--/.span12 box-->
                </div><!--/.row-fluid-->
                            
                            <div class='row-fluid'>
                    <div class="span12 box">
                        <div class="box-content box-padding">

                                <div class='lead small'>Need to send a lot of invites? No problem. </div>
                                    <a class='btn btn-default' href='/mockup/company/bulk-invite'><i class='icon-envelope'> </i> Invite People In Bulk</a>
                                </div>

                            </div>
                        </div>
                                            
                        

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

    </div><!--/.span12-->     
</div><!--/.row-fluid #content-wrapper-->

@stop