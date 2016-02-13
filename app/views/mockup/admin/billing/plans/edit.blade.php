@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin menu-item' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Edit Plan</span>
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
                            Billing
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Plans
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Pro Plan
                        </li>
                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Edit
                        </li>
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
                Editing Pro Plan
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Plans</a><a class='btn btn-default' role='button'>Go Back to Billing</a>
            </div><!--/.btn-group-->
        </div><!--/.row-fluid section-header-->

        <div class='row-fluid'>
            <div class='span12 box'>
               
                <div class='box-content'>
                    <form class='form'>
                        <fieldset>
                            <div class='control-group'>
                                <label class='control-label'>Plan Title</label>
                                <div class='controls'><p class='help-block'>What should you call this plan?</p>
                                
                                    <input class='span6' id='plan-name' placeholder='Ex: Pro' type='text' value='Pro'>
                                    
                                </div><!--/.controls-->
                            </div><!--/.control-group-->

                            <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Description</label><p class='help-block'>How would you describe this plan?</p>
                                <div class='controls'>
                                    <textarea id='inputTextArea1' class='span6' placeholder='This plan is for users who want to manage 5 companies' rows='3'>This plan is for users who want to manage 5 companies</textarea>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='hr-normal'>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Plan Color</label><p class='help-block'>Pick a color to represent this plan throughout the system.</p>
                                <div class="controls">
                                    <select name="plan-label-class">
                                        <option value='label-default'>Grey</option>
                                        <option value='label-success'>Green</option>
                                        <option value='label-important'>Red</option>
                                        <option value='label-warning'>Orange</option>
                                        <option value='label-info'>Purple</option>
                                        <option value='label-inverse'>Black</option>
                                        <option value='label-inverse'>No Label Color</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                            <hr class='hr-normal'>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Plan Duration</label><p class='help-block'>At what frequency should recurring subscriptions be billed?</p>
                                <div class="controls">
                                    <select name="duration">
                                        <option value='30'>30 days</option>
                                        <option value='60'>60 days</option>
                                        <option value='90'>90 days</option>
                                        <option value='365'>365 days</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->
                             <hr class='hr-normal'>

                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Plan Status</label><p class='help-block'>Do you want this plan to be active right now?</p>
                                <div class="controls">
                                    <select name="menu">
                                        <option selected value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div><!--/.controls-->
                            </div> <!--/.control-group-->

                        </fieldset>

                         </div><!--/.box-content-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <fieldset>
            <div class='row-fluid section-header'>
                <div class='title'>
                    <i class='icon-briefcase'> </i> Plan Features
                </div><!--/.title-->
                
            </div><!--/.row-fluid section-header-->

            <div class='row-fluid feature-group'>
                <div class='span12 box'>
                    <div class='box-header muted-background'>
                        <div class='title'>
                            Group 1
                        </div><!--/.title-->
                        <div class='actions'>
                            
                        </div><!--/.actions-->
                    </div><!--/.box-header-->
                    <div class='box-content'>      
                        <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Options</th>
                                <th>Select</th>  
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title='Icon'><i class='icon-trophy'></td>
                                    <td data-title='Title'>Expert Business Advice</td>
                                    <td data-title='Description'>Access our knowledgebase</td>
                                    <td data-title='Options'></td>
                                    <td data-title='Actions'>
                                        <input id="inlineCheckbox2" type="checkbox" value="option2">
                                    </td>
                                </tr>

                                <tr>
                                    <td data-title='Icon'><i class='icon-trophy'></td>
                                    <td data-title='Title'>Automated Reports</td>
                                    <td data-title='Description'>Receive reports on your business on a regular basis</td>
                                    <td data-title='Options'>
                                        <!--/ if applicable -->
                                        <select>
                                            <option>Daily</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                        </select>
                                    </td>
                                    <td data-title='Actions'>
                                        <input id="inlineCheckbox2" type="checkbox" value="option2">
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div><!--/.box-content-->
                </div><!--/. span12 box-->
            </div><!--/.row-fluid-->
            </fieldset>
        </div><!--/.row-fluid-->
            
        <div class='form-actions' style='margin-bottom: 0;'>
            <div class='text-right'>
                <div class='btn btn-default btn-large'>
                    <i class='icon-arrow-left'></i>
                    Go Back to Plans
                </div>

                <div class='btn btn-primary btn-large'>
                    <i class='icon-save'></i>
                    Save This Plan
                </div>
            </div>
        </div><!--/.form-actions-->
        </form>
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->



@stop