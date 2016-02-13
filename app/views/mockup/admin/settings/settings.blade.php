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
                        <span>Manage Settings</span>
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
                            Settings
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         
        

        <div class='row-fluid'>
            <div class='span8 box bordered-box'>
                <div class='box-content'>    
                    <div class='row-fluid settings-group'>
                        <div class='title'>Global Definitions</div>
                        <div class='description'>
                            Manage global, brand & consumer definitions.
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Groups</a>
                            <a class='btn btn-success'>Definitions</a>
                        </div><!--/.buttons-->
                        
                    </div> <!--/.row-fluids setting-group-->
                    <hr class='normal'>

                    <div class='row-fluid settings-group'>
                        <div class='title'>User Intake</div>
                        <div class='description'>
                            Manage questions in the brand & Consumer intake process.
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Groups</a>
                            <a class='btn btn-success'>Questions</a>
                        </div><!--/.buttons-->
                        
                    </div> <!--/.row-fluids setting-group-->

                        <hr class='normal'>

                    <div class='row-fluid settings-group'>
                        <div class='title'>Consumer Presets</div>
                        <div class='description'>
                            Manage common consumer profile types.
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Presets</a>
                     
                        </div><!--/.buttons-->
                    
                    </div> <!--/.row-fluids setting-group-->

                        <hr class='normal'>

                    <div class='row-fluid settings-group'>
                        <div class='title'>Badges</div>
                        <div class='description'>
                            Manage badges
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Badges</a>
                     
                        </div><!--/.buttons-->
                       
                    </div> <!--/.row-fluids setting-group-->

                     <hr class='normal'>

                    <div class='row-fluid settings-group'>
                        <div class='title'>Billing</div>
                        <div class='description'>
                            Manage billing for users
                        </div><!--/.description-->

                        <div class='buttons'>
                            <a class='btn btn-success'>Billing</a>
                     
                        </div><!--/.buttons-->
                     
                    </div> <!--/.row-fluids setting-group-->




                </div><!--/.box-content-->
            </div><!--/.span8 box bordered-box-->
        </div><!--/.row-fluid-->
                    

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop