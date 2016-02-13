@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <h3 class='pull-left'>
                    <i class='icon-eye-open'></i>
                    <span>Vision</span><i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Goals</span>
                </h3>
                <div class="pull-right utility-items">
                    <div class='btn-group utility-1'>
                        <a href='#modal-settings' role='button' data-toggle='modal' id="utility-settings" class="btn btn-white"><i class="icon-cog"></i></a>
                       
                        <a href='#modal-snapshot' role='button' data-toggle='modal' id='utility-snapshot' class="btn btn-white"><i class="icon-camera-retro"></i></a>

                        
                    </div> <!--/.btn-group utility-1-->

                    <div class='modal settings hide fade' id='modal-settings' role='dialog' tabindex='-1'>
                            <div class='modal-header'>
                                <button class='close' data-dismiss='modal' type='button'>&times;</button>
                                <h3>Custom Settings</h3>
                            </div><!--/.modal-header-->
                            <div class='modal-body'>
                               
                                <div class="box-content">
                                    <form class='form' style='margin-bottom: 0;'>
                                        <fieldset>
                                            <div class="control-group">
                                                <h4>Resources</h4>
                                                <p>Would you like Tips, Examples, and Quotes Resources open on each screen by default?<p>
                                                    <div class='switch switch-large' data-off-label='Closed <i class="icon-remove"></i>' data-on-label='<i class="icon-ok"> </i> Open'>
                                                    <input type='checkbox'>
                                                </div><!--/.switch-->
                                            </div><!--/.control-group-->

                                            <div class="control-group">
                                                <h4>Revisions</h4>
                                                <p>Would you like to view revision options in the Vision Section?<p>
                                                    <div class='switch switch-large' data-off-label='No <i class="icon-remove"></i>' data-on-label='<i class="icon-ok"> </i> Yes'>
                                                    <input type='checkbox'>
                                                </div><!--/.switch-->
                                            </div><!--/.control-group-->

                                        </fieldset>
                                    </form>
                                </div><!--/.box-content-->
                            </div><!--/.modal-body-->

                            <div class='settings modal-footer'>
                                <button class='btn btn-primary'>Save changes</button>
                                <button class='btn' data-dismiss='modal'>Close</button>
                            </div><!--/.modal-footer-->
                        </div><!--/.modal hide fade-->

                    <div class='modal snapshot hide fade' id='modal-snapshot' role='dialog' tabindex='-1'>
                        <div class='modal-header'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>Project Snapshots</h3>
                        </div><!--/.modal-header-->

                        <div class='modal-body'>
                            <div class="create-snapshot-container dropdown">
                                <button class="btn dropdown-toggle lead" style="margin-bottom:5px" data-toggle="dropdown">
                                    <i class="icon-camera-retro text-contrast"></i> Create a New Snapshot
                                    <span class="caret"></span>
                                </button>
                               <div class='box-content dropdown-menu box-double-padding'>
                                    <form class='form' style='margin-bottom: 0;'>
                                        <fieldset>
                                            <div class=''>
                                                <div class='control-group'>
                                                    <label class='control-label'>Snapshot Name</label>
                                                    <div class='controls'>
                                                        <input class='span8' id='snapshot-name' type='text'>
                                                        <p class='help-block'></p>
                                                    </div><!--/.control-->
                                                </div><!--/.control-group-->

                                                <div class="control-group">
                                                    <label class="control-label" for="inputSelect">Type of Snapshot</label>
                                                        <div class="controls">
                                                            <select id="inputSelect">
                                                            <option>Current Page</option>
                                                            <option>Entire Project</option>
                                                            <option>Vision -> Mission Content</option>
                                                            <option>Vision -> Business Plan</option>
                                                            <option>Vision -> Financial Content</option>
                                                            <option>Pitch -> Pitches</option>
                                                            <option>Vision -> Marketing Collateral</option>
                                                            </select>
                                                        </div><!--/.controls-->
                                                </div><!--/.control-group-->
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="icon-save"></i>
                                                    Create Snapshot
                                                </button>

                                            </div><!--/.span 7 offset1-->
                                        </fieldset>
                                    </form>
                                </div><!--/.box-content-->
                            </div><!--/.create-snapshot-container-->
                            <h2>Or</h2>
                            <div class="load-snapshot-container dropdown">
                                <button class="btn dropdown-toggle lead" style="margin-bottom:5px" data-toggle="dropdown">
                                    <i class="icon-download text-purple"></i> Load Existing Snapshot
                                    <span class="caret"></span>
                                </button>
                                <div class='box-content dropdown-menu box-double-padding'>
                                    <div class='tab-pane fade in active' id='recent-snapshots'>
                                        <ul class='unstyled snapshots list-hover'>
                                            <li>
                                                <a href="#" class="text-contrast">Guadalupe Ward</a>
                                                    signed up
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:56:41 +0200'>May 30, 2013 - 20:56</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" class="text-contrast">Emerson Weissnat II</a>
                                                    commented
                                                <small class='date muted'>
                                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-05-30 20:57:41 +0200'>May 30, 2013 - 20:57</span>
                                                    <i class='icon-time'></i>
                                                </small>
                                            </li>
                                        </ul>
                                        <div class='load-more'>
                                            <a href="#" class="btn btn-block" data-loading-text="&lt;i class=&#x27;icon-spinner icon-spin&#x27;&gt;&lt;/i&gt; Loading more..." id="users-more-activity"><i class='icon-circle-arrow-down'></i>
                                                Load more
                                            </a>
                                        </div><!--/.load-more-->
                                    </div><!--/.tab pane-->
                                </div><!--/.box-content-->
                            </div><!--/.load-snapshot-container-->
                        </div><!--/.modal-body-->


                        <div class='sharing modal-footer'>
                            <button class='btn' data-dismiss='modal'>Close</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->
                  
                    <div class='btn-group utility-3'>
                        <a href="#" id="top-nav-progress" class="btn btn-white btn-progress dropdown-toggle" data-delay='100' data-hover='dropdown' data-toggle='dropdown'>
                            <div class='progress'>
                                <div class='bar' style="width:60%;">60%</div>
                            </div><!--/.progress-->
                        </a>
                        <ul class='dropdown-menu' id='progress-menu'>
                            <li><div class='icon-container'> <i class='icon-eye-open'> </i>
                                </div>
                                You have made it <span class='text-success'>60%</span> through the Vision Section, with <span class='text-success'>96</span> of 1029 items completed. </li>
                            <li><div class='icon-container'> <i class='icon-trophy'> </i>
                            </div>
                                You have earned 55 of 200 badges!</li>
                        </ul>
                        <a href="#" id="top-nav-next" class="btn btn-white">Next <i class="icon-arrow-right"></i></a>
                    </div><!--/.btn-group-->
                </div> <!--/.pull-right utility-items-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='box'>
                <div class='span12 box-content'>
                    <div class='span8'>
                        <h2>Create some goals to keep your business on track</h2>
                    </div><!--/.span8-->
                    <div class='span4 get-started'>
                        <button class='btn btn-block btn-large btn-success'>Goals
                        </button>
                    </div><!--/.span4-->
                </div><!--/.box-content-->
            </div><!--/.box-->
        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop