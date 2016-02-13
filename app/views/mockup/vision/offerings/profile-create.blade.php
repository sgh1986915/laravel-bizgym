@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid create offerings' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <h3 class='pull-left'>
                    <i class='icon-eye-open'></i>
                    <span>Vision</span><i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Offerings</span>
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

        <div class='row-fluid offering-details shift-up'>
            <div class='span12 box' style='margin-bottom: 0'>
                <div class='box-header purple-background'>
                    <div class='title'>Offering Details</div>

                    <div class='resource-action'>
                        <a data-toggle='collapse' id='resource-toggle' data-target='#resources-1'>Resources <i class='icon-expand-alt'></i></a>
                    </div><!--/.actions-->


                </div><!--/box-header-->

                <div class='box-content'>

                    <div class='tabbable collapse' id='resources-1'>
                        <div class='box-toolbox box-toolbox-top resource-bar'>
                            <ul class='nav nav-tabs resources-list'>
                                <li class='active'><a data-toggle='tab' href='#tips-1'><i class='icon-lightbulb'></i>Tips</a></li>
                                <li class=''><a data-toggle='tab' href='#examples-1'><i class='icon-beaker'></i>Examples</a></li>
                                <li class=''><a data-toggle='tab' href='#quotes-1'><i class='icon-quote-right'></i>Quotes</a></li>
                            </ul>
                    
                        
                        </div><!--/.resource-bar-->
                        <div class='tab-content resource-content'>
                            <div class='tab-pane active' id='tips-1'>
                                <h1>Create a Mission Statement to Guide Your Business</h1>
                                <h3>How do I choose the right Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <h3>What makes a strong mission Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                <h3>Who should I target?</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div><!--/#tips-->
                            <div class='tab-pane ' id='examples-1'>
                                <h1>Mission Statement Examples</h1>
                                <h3>Example 1</h3>
                                <p>Nike helps runners get better workouts through revolutionary running shoes featuring Nike x technology.</p>
                                <h3>Example 2</h3>
                                <p>Home Depot helps builders get the best supplies through competitive pricing and a comprehensive inventory featuring only quality products.</p>
                                <h3>Example 3</h3>
                                <p>Arbys helps hungry people get tasty meals through fast service featuring delicious ingredients</p>
                            </div><!--/#tips-->
                            <div class='tab-pane ' id='quotes-1'>
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


                            </div><!--/#quotes-1-->
                        </div><!--/.tab-content-->
                    </div><!--/.tabbable-->  

                    <form accept-charset="UTF-8" action="#" class="form" method="post" style="margin-bottom: 0;"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>

                        <div class='row-fluid section-intake'>
                            <div class='span8'>
                                
                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>Name of Offering</label>
                                        </div>
                                  
                                    </div><!--/.row-fluid-->

                                    <div class='controls'>
                                        <input id='customer-name' class='span12' type='text'>
                                    </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>Offering Description</label>
                                        </div>
                                        <div class='field-resources-links'>
                                            <div class='btn-group'>
                                                <a class="btn show-Tips btn-white" data-toggle='collapse' data-target='#resource-2'>
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
                                                            <a data-toggle='tab' href='#tips-2'>
                                                                <i class="icon-lightbulb"></i>Tips
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
                                                            <div class="tab-pane active" id="tips-2">
                                                                <p>Choose the right information about your benefits here. Be descriptive, but try to keep it short.</p>
                                                                <p>It's best to describe your benefits in 2-5 words</p>

                                                            </div>
                                                            <div class="tab-pane " id="example-2"><p>Example of field</p>
                                                            </div>
                                                            <div class="tab-pane " id="quotes-2">
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
                                        <textarea id="inputTextArea1" class="span12" placeholder="" rows="3"></textarea>
                                    </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>When did you launch this offering?</label>
                                        </div>
                                       
                                    </div><!--/.row-fluid-->

                                    <div class='controls'>
                                        <div class='datepicker input-append' id='datepicker'>
                                            <input class='input-medium' data-format='yyyy-MM-dd' placeholder='Select datepicker' type='text'>
                                            <span class='add-on'>
                                              <i data-date-icon='icon-calendar' data-time-icon='icon-time'></i>
                                            </span>
                                        </div> <!--/.datepicker-->
                                    </div><!--/.controls-->
                                    <div class='controls'>
                                        <label class='checkbox'>
                                            <input type='checkbox' value=''>
                                            Have not launched yet
                                        </label>
                                    </div>
                                </div><!--/.control-group-->
                                

                            </div><!--./span8-->


                            <div class='span4 upload-options'>
                             
                                <div class='row-fluid shift-down'>
                                     <div class='span10 offset1 box no-photo'>
                                        <div class='box-content'>
                                            Upload a photo to represent your offering
                                        </div><!--/.box-content-->
                                    </div><!--/.box-->
                                </div><!--/.row-fluid-->

                                <div class='row-fluid'>
                               <span class="btn btn-large fileinput-button">
                                    <i class="icon-picture icon-white"></i>
                                    <span>Upload Photo</span>
                                    <input type="file" name="files[]" multiple="" data-bfi-disabled="">
                                </span>
                               
                                </div><!--/.row-fluid-->
                            </div><!--/.span4 upload-options-->

                        </div><!--/.row-fluid section-intake-->
                    </form>
                </div><!--/.box-contnet-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid cost-of-goods shift-down'>
            <div class='span12 box' style='margin-bottom: 0'>
                <div class='box-header purple-background'>
                    <div class='title'>Cost of Goods</div>

                    <div class='resource-action'>
                        <a data-toggle='collapse' id='resource-toggle' data-target='#resources-costs'>Resources <i class='icon-expand-alt'></i></a>
                    </div><!--/.actions-->


                </div><!--/box-header-->

                <div class='box-content'>

                    <div class='tabbable collapse' id='resources-costs'>
                        <div class='box-toolbox box-toolbox-top resource-bar'>
                            <ul class='nav nav-tabs resources-list'>
                                <li class='active'><a data-toggle='tab' href='#tips-costs'><i class='icon-lightbulb'></i>Tips</a></li>
                                <li class=''><a data-toggle='tab' href='#examples-costs'><i class='icon-beaker'></i>Examples</a></li>
                                <li class=''><a data-toggle='tab' href='#quotes-costs'><i class='icon-quote-right'></i>Quotes</a></li>
                            </ul>
                    
                        
                        </div><!--/.resource-bar-->
                        <div class='tab-content resource-content'>
                            <div class='tab-pane active' id='tips-costs'>
                                <h1>Create a Mission Statement to Guide Your Business</h1>
                                <h3>How do I choose the right Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <h3>What makes a strong mission Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                <h3>Who should I target?</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div><!--/#tips-->
                            <div class='tab-pane ' id='examples-costs'>
                                <h1>Mission Statement Examples</h1>
                                <h3>Example 1</h3>
                                <p>Nike helps runners get better workouts through revolutionary running shoes featuring Nike x technology.</p>
                                <h3>Example 2</h3>
                                <p>Home Depot helps builders get the best supplies through competitive pricing and a comprehensive inventory featuring only quality products.</p>
                                <h3>Example 3</h3>
                                <p>Arbys helps hungry people get tasty meals through fast service featuring delicious ingredients</p>
                            </div><!--/#tips-->
                            <div class='tab-pane ' id='quotes-costs'>
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


                            </div><!--/#tips-->
                        </div><!--/.tab-content-->
                    </div><!--/.tabbable-->  

                    <table class='table table-striped' style='margin-bottom:0;'>
                        <thead>
                            <tr>
                                <th>
                                    Item
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Units
                                </th>

                                <th>
                                    Price Per Unit
                                </th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title='Item'>Lemons</td>
                                <td data-title='Price'>$3.99</td>
                                <td data-title='Units'>12</td>
                                <td data-title='Price Per Unit'>$0.33</td>
                                <td data-title='Action'>
                                    <div class='text-right'>
                                        <a class='btn btn-danger btn-mini' href='#'>
                                            <i class='icon-remove'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                          
                            <tr>
                                <td data-title='Item'>Honey</td>
                                <td data-title='Price'>$5.67</td>
                                <td data-title='Units'>50</td>
                                <td data-title='Price Per Unit'>$0.11</td>
                                <td data-title='Action'>
                                    <div class='text-right'>
                                        <a class='btn btn-danger btn-mini' href='#'>
                                            <i class='icon-remove'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td data-title='Item'>Vodka</td>
                                <td data-title='Price'>$1.99</td>
                                <td data-title='Units'>35</td>
                                <td data-title='Price Per Unit'>$0.06</td>
                                <td data-title='Action'>
                                    <div class='text-right'>
                                        <a class='btn btn-danger btn-mini' href='#'>
                                            <i class='icon-remove'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class='row-fluid section-intake'>
                        <div class='span8'>
                            <div class='row-fluid shift-down shift-up'>
                                <a class='btn btn-default' role='button'><i class='icon-plus'> </i> Add a Good </a>
                            </div><!--/.row-fluid-->

                            <div class='row-fluid'>
                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>What are your indirect costs for this product?</label>
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
                                                            <a data-toggle='tab' href='#tips-4'>
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
                                                    </div>
                                                    </div><!--/.box-header-->
                                                    <div class='box-content'>
                                                        <div class='tab-content'>
                                                            <div class="tab-pane active" id="tips-4">
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

                                    <div class='controls'>
                                        <div class='row-fluid'>
                                            <input class='span6' id='indirect-costs' type='text' placeholder='indirect costs'>
                                        </div><!--/.row-fluid-->

                                        <div class='row-fluid'>
                                            <label class="checkbox inline">
                                                <input id="inlineCheckbox1" type="checkbox" value="option1">
                                                Not sure, use industry standard
                                            </label>
                                        <div class='row-fluid'>
                                    </div><!--/.controls-->

                                </div><!--/.control-group-->
                            </div><!--/.row-fluid-->
                        </div><!--/.span8-->
                    </div><!--/.row-fluid-->

                </div><!--/.box-contnet-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->


        <div class='row-fluid calculate shift-down'>
            <div class='span12 box' style='margin-bottom: 0'>
                <div class='box-header purple-background'>
                    <div class='title'>Calculate Your Totals</div>

                    <div class='resource-action'>
                        <a data-toggle='collapse' id='resource-toggle' data-target='#resources-totals'>Resources <i class='icon-expand-alt'></i></a>
                    </div><!--/.actions-->


                </div><!--/box-header-->

                <div class='box-content'>

                    <div class='tabbable collapse' id='resources-totals'>
                        <div class='box-toolbox box-toolbox-top resource-bar'>
                            <ul class='nav nav-tabs resources-list'>
                                <li class='active'><a data-toggle='tab' href='#tips-totals'><i class='icon-lightbulb'></i>Tips</a></li>
                                <li class=''><a data-toggle='tab' href='#examples-totals'><i class='icon-beaker'></i>Examples</a></li>
                                <li class=''><a data-toggle='tab' href='#quotes-costs'><i class='icon-quote-right'></i>Quotes</a></li>
                            </ul>
                    
                        
                        </div><!--/.resource-bar-->
                        <div class='tab-content resource-content'>
                            <div class='tab-pane active' id='tips-totals'>
                                <h1>Create a Mission Statement to Guide Your Business</h1>
                                <h3>How do I choose the right Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <h3>What makes a strong mission Statement?</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                                <h3>Who should I target?</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div><!--/#tips-->
                            <div class='tab-pane ' id='examples-totals'>
                                <h1>Mission Statement Examples</h1>
                                <h3>Example 1</h3>
                                <p>Nike helps runners get better workouts through revolutionary running shoes featuring Nike x technology.</p>
                                <h3>Example 2</h3>
                                <p>Home Depot helps builders get the best supplies through competitive pricing and a comprehensive inventory featuring only quality products.</p>
                                <h3>Example 3</h3>
                                <p>Arbys helps hungry people get tasty meals through fast service featuring delicious ingredients</p>
                            </div><!--/#tips-->
                            <div class='tab-pane ' id='quotes-totals'>
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


                            </div><!--/#tips-->
                        </div><!--/.tab-content-->
                    </div><!--/.tabbable-->  

                    <form accept-charset="UTF-8" action="#" class="form" method="post" style="margin-bottom: 0;"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>

                        <div class='row-fluid section-intake'>
                            <div class='span8'>

                                <div class='control-group'>
                                    <div class='row-fluid'>
                                        <div class='span8'>
                                            <label class='control-label' for='inputText'>What is your desired profit margin?</label>
                                        </div>
                                        <div class='field-resources-links'>
                                            <div class='btn-group'>
                                                <a class="btn show-Tips btn-white" data-toggle='collapse' data-target='#resource-6'>
                                                    <i class="icon-lightbulb"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-6'>
                                                    <i class="icon-beaker"></i>
                                                </a>
                                                <a class="btn show-examples btn-white" data-toggle='collapse' data-target='#resource-6'>
                                                    <i class="icon-quote-right"></i>
                                                </a>
                                            </div><!--/.resource-buttons-->
                                        </div> <!--/.span4 field-resources-->
                                    </div><!--/.row-fluid-->


                                    <div class='row-fluid field-resource collapse' id='resource-6'>
                                        <div class='span12 box'>
                                            <div class='tabbable'>
                                                <div class='box-header background-gray'>
                                                    <ul class='nav nav-tabs span8'>
                                                        <li class='active'>
                                                            <a data-toggle='tab' href='#tips-6'>
                                                                <i class="icon-lightbulb"></i>Tips
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#example-6'>
                                                                <i class="icon-beaker"></i>Example
                                                            </a>
                                                        </li>
                                                        <li class=''>
                                                            <a data-toggle='tab' href='#quotes-6'>
                                                                <i class="icon-quote-right"></i>Quotes
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class='actions'>
                                                        <a class="btn btn-mini btn-link" data-toggle='collapse' data-target='#resource-6'><i class='icon-remove'></i>
                                                        </a>
                                                    </div>
                                                    </div><!--/.box-header-->
                                                    <div class='box-content'>
                                                        <div class='tab-content'>
                                                            <div class="tab-pane active" id="tips-6">
                                                                <p>Choose the right information about your benefits here. Be descriptive, but try to keep it short.</p>
                                                                <p>It's best to describe your benefits in 2-5 words</p>

                                                            </div>
                                                            <div class="tab-pane " id="example-6"><p>Example of field</p>
                                                            </div>
                                                            <div class="tab-pane " id="quotes-6">
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
                                        <input id='customer-name' class='span6' type='text' placeholder='Enter Percentage'>
                                    </div>
                                </div><!--/.control-group-->
                            </div><!--./span8-->
                            
                        </div>  <!--/.row-fluid section-intake-->

                        <div class='row-fluid shift-up'>

                            <div class='span8 totals-chart'>
                                <div class='span12 box box-bordered box-nomargin'>
                                    <div class='box-header'>
                                        <div class='title'>
                                            Retail Price:
                                        </div><!--/.title-->
                                        <span class='price'>$55.00</span>

                                    </div><!--/.box-header-->

                                    <div class='box-content'>
                                        <ul class='totals-list unstyled list-striped'>
                                            <li>Desired Profit Margin:<span class='profit-margin'>___</span></li>
                                            <li>Price Per Unit:<span class='price-per-unit'>___</span></li>
                                            <li>Indirect Costs:<span class='indirect-costs'>___</span></li>
                                        </ul>
                                    </div><!--/.box-content-->
                                </div><!--/.span12 box-->

                            </div><!--/.span8-->

                            <div class='span4 total-graph'>
                                <div class='span12 box box-bordered box-nomargin'>
                                    
                                    <div class='box-header'>
                                        <div class='title'>
                                            Profit Pie
                                        </div><!--/title-->
                                    </div><!--/.box-header-->

                                    <div class='box-content text-center'>
                                        <div id='stats-chart5' style='margin:0 auto'></div>
                                    </div><!--/.box-content-->

                                </div><!--/.span12 box box-bordred box-nomargin-->
                            </div><!--/.span4-->
                        </div><!--/.row-fluid-->
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
        </div><!--/.row-fluid bottom-utility-->
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->

@stop
   