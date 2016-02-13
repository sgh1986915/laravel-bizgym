@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin forum roles' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Category Permissions</span>
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
                            Forum
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Categories
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Social Media Advice
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Permissions
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         <div class='row-fluid section-header'>
            <div class='title'>
               Who can do what in Social Media Advice?
            </div><!--/.title-->

            <div class='btn-group'>
                
                <a class='btn btn-default' role='button'>Go Back to Categories</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid'>
            <div class='span8 box bordered-box purple-border' style='margin-bottom:0;'>
                
                <div class='box-content'>
                    <div class='row-fluid permission-choice'>
                    
                        <div class='control-group'>
                            <label class='control-label'>Viewable by:</label><p class='help-block'>Who can see this forum category?</p>
                            <div class='controls'>
                                
                                <div class='input-append'>
                                    <select id="role" class="appendedInputButtons" name="role">
                                        <option value="1">Administrator</option>
                                        <option value="2">Agency</option>
                                        <option value="3">Subscriber</option>
                                        <option value="7">User</option>
                                        <option value="10">Employee</option>
                                        <option value="11">Advocate</option>
                                        <option value="12">Author</option>
                                        <option value="13">Manager</option>
                                    </select>
                                    <button class="btn btn-primary add-role" type="button">Add</button>
                                </div><!--/.input-append-->
                              
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='row-fluid current-permissions'>
                            <div class='box-content span8'>
                                <h5>Currently viewable by:</h5>
                                <ul class='list-striped unstyled permissions-list'>
                                    <li></span>Everyone</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                </ul>
                            </div> <!--/.well span8-->
                        </div>

                        <hr class='normal'>
                    </div><!--/.row-fluid permission-choice-->

                    <div class='row-fluid permission-choice'>
                        <div class='control-group'>
                            <label class='control-label'>Topic Creation:</label><p class='help-block'>Who can post topics in this forum category?</p>
                            <div class='controls'>
                                <div class='input-append'>
                                    <select id="role" class="appendedInputButtons" name="role">
                                        <option value="1">Administrator</option>
                                        <option value="2">Agency</option>
                                        <option value="3">Subscriber</option>
                                        <option value="7">User</option>
                                        <option value="10">Employee</option>
                                        <option value="11">Advocate</option>
                                        <option value="12">Author</option>
                                        <option value="13">Manager</option>
                                    </select>
                                    <button class="btn btn-primary add-role" type="button">Add</button>
                                </div><!--/.input-append-->
                              
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                        <div class='row-fluid current-permissions'>

                            <div class='box-content span8'>
                                <h5>Currently allowed to create topics:</h5>
                                <ul class='list-striped unstyled permissions-list'>
                                    <li><span class='group'>Subscriber</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                    <li><span class='group'>Employee</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                    <li><span class='group'>Manager </span><span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                    <li><span class='group'>Administrator</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                </ul>
                            </div> <!--/.well span8-->
                        </div><!--/.row-fluid-->

                        <hr class='normal'>
                    </div><!--/.row-fluid permission-choice-->

                    <div class='row-fluid permission-choice'>
                        <div class='control-group'>
                            <label class='control-label'>Ability to Vote:</label><p class='help-block'>Who can vote on topics in this category?</p>
                            <div class='controls'>
                                <div class='input-append'>
                                    <select id="role" class="appendedInputButtons" name="role">
                                        <option value="1">Administrator</option>
                                        <option value="2">Agency</option>
                                        <option value="3">Subscriber</option>
                                        <option value="7">User</option>
                                        <option value="10">Employee</option>
                                        <option value="11">Advocate</option>
                                        <option value="12">Author</option>
                                        <option value="13">Manager</option>
                                    </select>
                                    <button class="btn btn-primary add-role" type="button">Add</button>
                                </div><!--/.input-append-->
                              
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                        <div class='row-fluid current-permissions'>

                            <div class='box-content span8'>
                                <h5>Currently allowed to create topics:</h5>
                                <ul class='list-striped unstyled permissions-list'>
                                    <li><span class='group'>Subscriber</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                    <li><span class='group'>Employee</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                    <li><span class='group'>Administrator</span> <span class='action'><a class='btn btn-mini btn-danger'>Remove</a></span></li>
                                </ul>
                            </div> <!--/.well span8-->
                        </div><!--/.row-fluid-->

                        <hr class='normal'>
                    </div><!--/.row-fluid permission-choice-->
                    
                </div> <!--/.box-content-->
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop