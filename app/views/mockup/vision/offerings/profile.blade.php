@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid offering-profile' id='content-wrapper'>
        <div class='span12'>
            <div class="row-fluid">
                <div class='page-header'>
                    <h3 class='pull-left'>
                        <i class='icon-eye-open'></i>
                        <span>Vision</span><i id="arrow-after-main" class="icon-double-angle-right"></i> <span class="heading-small">Market</span>
                    </h3>
                    <div class="pull-right utility-items">
                        <div class='btn-group utility-1'>
                            <a href='#modal-settings' role='button' data-toggle='modal' id="utility-settings" class="btn btn-white"><i class="icon-cog"></i></a>
                           
                            <a href='#modal-snapshot' role='button' data-toggle='modal' id='utility-snapshot' class="btn btn-white"><i class="icon-camera-retro"></i></a>

                            <a href='javascript:window.print()' id="print" class="btn btn-white"><i class="icon-print"></i></a>
                        </div> <!--/.btn-group utility-1-->
                      
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
                </div> <!--/.page-header-->
            </div> <!--/.row-fluid-->

            <div class='row-fluid offering-bio shift-up'>
                <div class='box'>
                    <div class='span12 box-content'>
                        <div class='span3'>
                            <div class='image-container'>

                                <div class='row-fluid'>
                                    <img src="http://placehold.it/250x250">
                                </div><!--/.row-fluid-->

                                <div class='row-fluid shift-down'>
                                    <a class='btn btn default'><i class='icon-edit'> </i> Edit Product</a>
                                </div><!--/.row-fluid-->
                            </div><!--/.image-container-->
                        </div><!--/.span4-->
                        <div class='span9'>
                            <div class='row-fluid'>
                                <div class='title'>Lemonade</div><!--/.title-->
                                <div class='price'>$100.00</div><!--/.price-->
                            </div><!--/row-fluid-->
                            <div class='row-fluid'>
                                <span class='product-type'>Marquee Product</span>
                            </div><!--/row-fluid-->
                            <div class='row-fluid'>
                                <p>Lemonade is our flagship product. It quenches the thirst of our customers with ease. Lemonade is the perfect drink for a warm summer day! Thanks to our low prices, our lemonade is a no-brainer.</p>
                            </div><!--/row-fluid-->

                            <div class='row-fluid'>
                                <div class='offering-details'>
                                    <ul class='offering-list unstyled'>
                                        <li>Launched: <span class='launch-date'>April 1, 1989</span></li>
                                        <li>Retail Price: <span class='retail-price'>$29.99</span></li>
                                        <li>Cost Per Unit:<span class='cost-per-unit'> $60.00</span></li>
                                        <li>Profit Per Unit: <span class='profit-per-unit'>$10.00</span></li>
                                    </ul><!--/.offering-list-->
                                </div><!--/.profile-details-->
                            </div><!--/.row-fluid-->
                        </div><!--/.span8-->
                    </div><!--/.box-contnet-->
                </div><!--/.box-->
            </div><!--/.row-fluid-->

            <div class='row-fluid sales-projections shift-down'>
                <div class='span12 box'>
                    <div class='box-header'>
                        <div class='title'>
                            <i class='icon-bar-chart'></i>
                            Sales Projections
                        </div>
                        <div class='actions'>

                            <div class="control-group">
                                <label class="control-label" for="inputSelect">Select Timeframe</label>
                                <div class="controls">
                                    <select id="inputSelect">
                                    <option>1 Month</option>
                                    <option>3 Months</option>
                                    <option>6 Months</option>
                                    <option>1 Year</option>
                                    <option>2 Years</option>
                                    </select>
                                </div>
                            </div>


                            <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                            </a>
                            <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                            </a>
                        </div>
                    </div><!--/.box-header-->
                    <div class='box-content'>
                        <div id='stats-chart1'></div>
                    </div><!--/.box-content-->
                </div><!--.span12 box-->
            </div><!--/.row-fluid-->


            <div class='row-fluid cost-of-goods shift-down'>
                <div class='span12 box' style='margin-bottom: 0'>
                    <div class='box-header purple-background'>
                        <div class='title'>Cost of Goods</div>

                            <span class='cost'>$55.00</span>

                    </div><!--/box-header-->

                    <div class='box-content'>

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

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title='Item'>Lemons</td>
                                    <td data-title='Price'>$3.99</td>
                                    <td data-title='Units'>12</td>
                                    <td data-title='Price Per Unit'>$0.33</td>
                                </tr>
                              
                                <tr>
                                    <td data-title='Item'>Honey</td>
                                    <td data-title='Price'>$5.67</td>
                                    <td data-title='Units'>50</td>
                                    <td data-title='Price Per Unit'>$0.11</td>
                                </tr>

                                <tr>
                                    <td data-title='Item'>Vodka</td>
                                    <td data-title='Price'>$1.99</td>
                                    <td data-title='Units'>35</td>
                                    <td data-title='Price Per Unit'>$0.06</td>
                                </tr>

                            </tbody>
                        </table>

                    </div><!--/.box-contnet-->
                </div><!--/.span12 box-->
            </div><!--/.row-fluid-->


            <div class='row-fluid indirect-costs shift-down shift-up'>
                <div class='span12 box' style='margin-bottom: 0'>
                    <div class='box-header purple-background'>
                        <div class='title'>Indirect Costs</div>
                        <span class='cost-status'>Industry Standard</span>
                        <span class='price'>$0.10</span>
                    </div><!--/box-header-->

                </div><!--/.span12 box-->
            </div><!--/.row-fluid-->


            <div class='row-fluid bottom-utility shift-down'>
                    
                            <div class='btn-group'>
                                <a class='btn btn-large btn-default'><i class='icon-plus'> </i> New Offering</a>
                                <a class='btn btn-large btn-default'><i class='icon-edit'> </i> Edit Offering</a>
                                <a class='btn btn-large btn-success'>Next Offering <i class='icon-arrow-right'></i></a>
                            </div><!--/.btn-group-->
                     
            </div><!--/.row-fluid bottom-utility-->

        </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->

@stop

   