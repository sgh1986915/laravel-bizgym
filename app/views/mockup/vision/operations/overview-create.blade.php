@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')



<div class='row-fluid create' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <h3 class='pull-left'>
                    <i class='icon-eye-open'></i>
                    <span>Vision</span><i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Operations</span>
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
            <div class='span12 box' style='margin-bottom: 0'>
                <div class='box-header purple-background'>
                    <div class='title'>Operations Overview</div>

                    <div class='resource-action'>
                        <a data-toggle='collapse' id='resource-toggle' data-target='#resources'>Resources <i class='icon-expand-alt'></i></a>
                    </div><!--/.actions-->


                </div><!--/box-header-->

                <div class='box-content'>

                    <div class='tabbable collapse' id='resources'>
                        <div class='box-toolbox box-toolbox-top resource-bar'>
                            <ul class='nav nav-tabs resources-list'>
                                <li class='active'><a data-toggle='tab' href='#teacher'><i class='icon-lightbulb'></i>Teacher</a></li>
                                <li class=''><a data-toggle='tab' href='#examples'><i class='icon-beaker'></i>Examples</a></li>
                                <li class=''><a data-toggle='tab' href='#quotes'><i class='icon-quote-right'></i>Quotes</a></li>
                            </ul>
                        </div><!--/.resource-bar-->
                        <div class='tab-content resource-content'>
                            <div class='tab-pane active' id='teacher'>
                                <h1>Create a Mission Statement to Guide Your Business</h1>
                                <h3>How do I choose the right Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <h3>What makes a strong mission Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                <h3>Who should I target?</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div><!--/#teacher-->
                            <div class='tab-pane ' id='examples'>
                                <h1>Mission Statement Examples</h1>
                                <h3>Example 1</h3>
                                <p>Nike helps runners get better workouts through revolutionary running shoes featuring Nike x technology.</p>
                                <h3>Example 2</h3>
                                <p>Home Depot helps builders get the best supplies through competitive pricing and a comprehensive inventory featuring only quality products.</p>
                                <h3>Example 3</h3>
                                <p>Arbys helps hungry people get tasty meals through fast service featuring delicious ingredients</p>
                            </div><!--/#teacher-->
                            <div class='tab-pane ' id='quotes'>
                                <h1>Mission Statement Quotes</h1>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>
                                        Someone famous
                                        <cite title='Source Title'>Source Title</cite>
                                    </small>
                                </blockquote>

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>
                                        Someone famous
                                        <cite title='Source Title'>Source Title</cite>
                                    </small>
                                </blockquote>


                            </div><!--/#teacher-->
                        </div><!--/.tab-content-->
                    </div><!--/.tabbable-->   

                    <form accept-charset="UTF-8" action="#" class="form" method="post" style="margin-bottom: 0;"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>

                        <div class='row-fluid section-intake'>
                            <div class='span8'>
                                
                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>Describe your operations in a general sense</label>
                                        </div>
                                        <div class='field-resources-links'>
                                            <div class='btn-group'>
                                                <a class="btn show-teacher btn-white" data-toggle='collapse' data-target='#resource-1'>
                                                    <i class="icon-lightbulb"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-1'>
                                                    <i class="icon-beaker"></i>
                                                </a>

                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-1'>
                                                <i class="icon-quote-right"></i>
                                                </a>
                                            </div><!--/.resource-buttons-->
                                        </div> <!--/.span4 field-resources-->
                                    </div><!--/.row-fluid-->

                                    <div class='row-fluid field-resource collapse' id='resource-1'>
                                        <div class='span12 box'>
                                            <div class='tabbable'>
                                                <div class='box-header background-gray'>
                                                    <ul class='nav nav-tabs span8'>
                                                        <li class='active'>
                                                            <a data-toggle='tab' href='#teacher-1'>
                                                                <i class="icon-lightbulb"></i>Teacher
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#example-1'>
                                                                <i class="icon-beaker"></i>Example
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#quotes-1'>
                                                                <i class="icon-quote-right"></i>Quotes
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class='actions'>
                                                        <a class="btn btn-mini btn-link" data-toggle='collapse' data-target='#resource-1'><i class='icon-remove'></i>
                                                        </a>
                                                    </div>
                                                    </div><!--/.box-header-->
                                                    <div class='box-content'>
                                                        <div class='tab-content'>
                                                            <div class="tab-pane active" id="teacher-1">
                                                                <p>Choose the right information about your benefits here. Be descriptive, but try to keep it short.</p>
                                                                <p>It's best to describe your benefits in 2-5 words</p>

                                                            </div><!--/#teacher-1-->
                                                            <div class="tab-pane " id="example-1"><p>Example of field</p>
                                                            </div><!--/#example-1-->

                                                            <div class="tab-pane " id="quotes-1">
                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>

                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>
                                                            </div><!--/#quotes-1-->
                                                        </div><!--/.tab-content-->
                                                    </div><!--/.box-content-->
                                            </div> <!--/.tabbable-->
                                        </div><!--/.span12 box-->
                                    </div><!--/.row-fluid field-resource-->

                                    <div class='controls'>
                                        <textarea id="inputTextArea1" class="span12" placeholder="company description" rows="3"></textarea>
                                    </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>Describe your facilities</label>
                                        </div>
                                        <div class='field-resources-links'>
                                            <div class='btn-group'>
                                                <a class="btn show-teacher btn-white" data-toggle='collapse' data-target='#resource-2'>
                                                    <i class="icon-lightbulb"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-2'>
                                                    <i class="icon-beaker"></i>
                                                </a>

                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-2'>
                                                <i class="icon-quote-right"></i>
                                                </a>

                                            </div><!--/.resource-buttons-->
                                        </div> <!--/.span4 field-resources-->
                                    </div><!--/.row-fluid-->


                                    <div class='row-fluid field-resource collapse' id='resource-2'>
                                        <div class='span12 box'>
                                            <div class='tabbable'>
                                                <div class='box-header background-gray'>
                                                    <ul class='nav nav-tabs span8'>
                                                        <li class='active'>
                                                            <a data-toggle='tab' href='#teacher-2'>
                                                                <i class="icon-lightbulb"></i>Teacher
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#example-2'>
                                                                <i class="icon-beaker"></i>Example
                                                            </a>
                                                        </li>

                                                        <li class=''>
                                                            <a data-toggle='tab' href='#quotes-2'>
                                                                <i class="icon-quote-right"></i>Quotes
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class='actions'>
                                                        <a class="btn btn-mini btn-link" data-toggle='collapse' data-target='#resource-2'><i class='icon-remove'></i>
                                                        </a>
                                                    </div>
                                                    </div><!--/.box-header-->
                                                    <div class='box-content'>
                                                        <div class='tab-content'>
                                                            <div class="tab-pane active" id="teacher-2">
                                                                <p>Choose the right information about your benefits here. Be descriptive, but try to keep it short.</p>
                                                                <p>It's best to describe your benefits in 2-5 words</p>

                                                            </div>
                                                            <div class="tab-pane " id="example-2"><p>Example of field</p>
                                                            </div>

                                                            <div class="tab-pane " id="quotes-1">
                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>

                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>
                                                            </div><!--/#quotes-1-->
                                                        </div><!--/.tab-content-->
                                                    </div><!--/.box-content-->
                                            </div> <!--/.tabbable-->
                                        </div><!--/.span12 box-->
                                    </div><!--/.row-fluid field-resource-->



                                    <div class='controls'>
                                        <input id='text1' class='span12' type='text' placeholder='header'>
                                        <textarea id="inputTextArea1" class="span12" placeholder="description" rows="3"></textarea>
                                    </div>
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>What are your key operational objectives?</label>
                                        </div>
                                        <div class='field-resources-links'>
                                            <div class='btn-group'>
                                                <a class="btn show-teacher btn-white" data-toggle='collapse' data-target='#resource-3'>
                                                    <i class="icon-lightbulb"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-3'>
                                                    <i class="icon-beaker"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-3'>
                                                    <i class="icon-quote-right"></i>
                                                </a>
                                            </div><!--/.resource-buttons-->
                                        </div> <!--/.span4 field-resources-->
                                    </div><!--/.row-fluid-->

                                    <div class='row-fluid field-resource collapse' id='resource-3'>
                                        <div class='span12 box'>
                                            <div class='tabbable'>
                                                <div class='box-header background-gray'>
                                                    <ul class='nav nav-tabs span8'>
                                                        <li class='active'>
                                                            <a data-toggle='tab' href='#teacher-3'>
                                                                <i class="icon-lightbulb"></i>Teacher
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#example-3'>
                                                                <i class="icon-beaker"></i>Example
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#quotes-2'>
                                                                <i class="icon-quote-right"></i>Quotes
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class='actions'>
                                                        <a class="btn btn-mini btn-link" data-toggle='collapse' data-target='#resource-3'><i class='icon-remove'></i>
                                                        </a>
                                                    </div>
                                                    </div><!--/.box-header-->
                                                    <div class='box-content'>
                                                        <div class='tab-content'>
                                                            <div class="tab-pane active" id="teacher-3">
                                                                <p>Choose the right information about your benefits here. Be descriptive, but try to keep it short.</p>
                                                                <p>It's best to describe your benefits in 2-5 words</p>

                                                            </div>
                                                            <div class="tab-pane " id="example-3"><p>Example of field</p>
                                                            </div>
                                                            <div class="tab-pane " id="quotes-3">
                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>

                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>
                                                            </div><!--/#quotes-1-->

                                                        </div><!--/.tab-content-->
                                                    </div><!--/.box-content-->
                                            </div> <!--/.tabbable-->
                                        </div><!--/.span12 box-->
                                    </div><!--/.row-fluid field-resource-->

                                    <div class='controls'>
                                        <textarea id="inputTextArea1" class="span12" placeholder="Objectives" rows="3"></textarea>
                                    </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>What are your key operational milestones?</label>
                                        </div>
                                        <div class='field-resources-links'>
                                            <div class='btn-group'>
                                                <a class="btn show-Tips btn-white" data-toggle='collapse' data-target='#resource-4'>
                                                    <i class="icon-lightbulb"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-4'>
                                                    <i class="icon-beaker"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-4'>
                                                    <i class="icon-quote-right"></i>
                                                </a>
                                            </div><!--/.resource-buttons-->
                                        </div> <!--/.span4 field-resources-->
                                    </div><!--/.row-fluid-->

                                    <div class='row-fluid field-resource collapse' id='resource-4'>
                                        <div class='span12 box'>
                                            <div class='tabbable'>
                                                <div class='box-header background-gray'>
                                                    <ul class='nav nav-tabs span8'>
                                                        <li class='active'>
                                                            <a data-toggle='tab' href='#Tips-4'>
                                                                <i class="icon-lightbulb"></i>Tips
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#example-4'>
                                                                <i class="icon-beaker"></i>Example
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#quotes-4'>
                                                                <i class="icon-quote-right"></i>Quotes
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class='actions'>
                                                        <a class="btn btn-mini btn-link" data-toggle='collapse' data-target='#resource-4'><i class='icon-remove'></i>
                                                        </a>
                                                    </div> <!--/.actions-->
                                                    </div><!--/.box-header-->
                                                    <div class='box-content'>
                                                        <div class='tab-content'>
                                                            <div class="tab-pane active" id="Tips-4">
                                                                <p>Choose the right information about your benefits here. Be descriptive, but try to keep it short.</p>
                                                                <p>It's best to describe your benefits in 2-5 words</p>

                                                            </div>
                                                            <div class="tab-pane " id="example-4"><p>Example of field</p>
                                                            </div>
                                                            <div class="tab-pane " id="quotes-4">
                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>

                                                                <blockquote>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                    <small>
                                                                        Someone famous
                                                                        <cite title='Source Title'>Source Title</cite>
                                                                    </small>
                                                                </blockquote>
                                                            </div><!--/#quotes-1-->

                                                        </div><!--/.tab-content-->
                                                    </div><!--/.box-content-->
                                            </div> <!--/.tabbable-->
                                        </div><!--/.span12 box-->
                                    </div><!--/.row-fluid field-resource-->

                                    <div class='milestone-create'>

                                        <h5>Milestone One</h5>
                                        
                                        <div class='controls'>
                                            <input class='span12' id='inputmilestone' type='text' placeholder='Milestone Name'>
                                        </div>

                                        <div class='controls'>
                                            <textarea id="inputTextArea1" class="span12" placeholder="Milestone Description" rows="3"></textarea>
                                        </div>

                                        <div class='controls'>
                                            <div class='row-fluid'>
                                                <div class='datepicker input-append' id='datepicker'>
                                                    <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select datepicker' type='text'>
                                                    <span class='add-on'>
                                                      <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                                    </span>
                                                </div> <!--/.datepicker input-append-->
                                            </div> <!--/.row-fluid-->
                                        </div><!--/.controls-->
                                    </div><!--/.milestone-create-->

                                    <a class='btn btn-defaul' id='add-milestone'> <i class='icon-plus'></i> Add another Milestone </a> 
                                </div><!--/.control-group-->

                            </div><!--./span8-->

                        </div><!--/.row-fluid section-intake-->
                    </form>
                </div><!--/.box-contnet-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid bottom-utility'>
                <div class='span12 box'>
                    <div class='box-content'>
                        <div class='btn-group'>
                            <a class='btn btn-large btn-default'><i class='icon-save'></i> Save</a>
                            <a class='btn btn-large btn-success'>Save & Continue <i class='icon-arrow-right'></i></a>
                        </div><!--/.btn-group-->
                    </div><!--/.box-content-->
                </div><!--/.span12 box-->
            </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid-->
    
@stop