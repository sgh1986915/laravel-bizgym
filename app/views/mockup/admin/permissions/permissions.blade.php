@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin settings' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Permissions</span>
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
                            Permissions
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='section-header'>
            <div class='title'>This is where you decide who can do what within your application</div><!--/.title-->
        </div>
        

        <div class='row-fluid'>
            <div class='span8 box bordered-box'>
                <div class='box-content'>    

                    

                    <div class='row-fluid settings-group'>
                        
                        <div class='title'>1. Create Permission Rules</div>
                        <div class='description'>
                            These are the specific tasks that certain groups of users can or can't do.
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Manage Rules</a>
                            <a class='btn btn-success'>Create a Rule</a>
                        </div><!--/.buttons-->
                    </div> <!--/.row-fluids setting-group-->

                    <hr class='normal'>

                    <div class='row-fluid settings-group'>
                        
                        <div class='title'>2. Create Permission Groups</div>
                        <div class='description'>
                            Create groups of users to assign rules to. This is how you divide up user capablities.
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Manage Groups</a>
                            <a class='btn btn-success'>Create a Group</a>
                        </div><!--/.buttons-->
                    </div> <!--/.row-fluids setting-group-->

                </div><!--/.box-content-->
            </div><!--/.span8 box bordered-box-->

            <div class='span4'>

                <div class='box-content box-statistic'>
                    <h3 class='title text-info'>981</h3>
                    <small>Rules</small>
                    <div class='text-info icon-legal align-right'></div>
                </div>


                <div class='box-content box-statistic shift-down'>
                    <h3 class='title text-primary'>3</h3>
                    <small>Groups</small>
                    <div class='text-primary icon-user align-right'></div>
                </div>
            

                

            </div><!--/.span4-->


        </div><!--/.row-fluid-->
                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop