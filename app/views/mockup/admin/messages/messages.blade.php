@extends('layouts.admin')

@section('title', $title)
@section('content')



<div class='row-fluid admin messages' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header' style=''>
                
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Application Messages</span>
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
                            Messages
                        </li>
                    </ul>
                </div><!--/.pull-right-->
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

      <div class='row-fluid messages-header' style='margin-bottom:1em;'>
            <div class='btn-group pull-left'>
                <a class='btn btn-default'>Templates</a>
                <a class='btn btn-default'>Groups</a>
                <a class='btn btn-default'>Types</a>
                <a class='btn btn-default'>Dictionaries</a>
                <a class='btn btn-default'>Sent Messages</a>
            </div><!--/.btn-group-->


            <div class='btn-group new pull-right'>
                <a class='btn btn-success' role='button'>New System Message</a>
                <a class='btn btn-success' role='button'>Send Manual Message</a>
            </div><!--/.btn-group-->

        </div>



        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-envelope'> </i>Existing Messages</div>
                <div class='actions'>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <table class='table messages-list table-striped' style='margin-bottom:0;'>
                    <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Trigger
                        </th>
                        <th>
                            Subject
                        </th>

                        <th>
                            Type
                        </th>
                        <th>
                            Group
                        </th>
                        <th>
                            Template
                        </th>
                        <th>
                            Dictionary
                        </th>
                        <th>
                            Frequency
                        </th>
                        <th>
                            Created
                        </th>

                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td class='trigger'>default/welcome</td>
                            <td class='subject'>Welcome to BizGym</td>
                            <td class='type'>System Message</td>
                            <td class='group'>Group 1</td>
                            <td class='template'>Standard</td>
                            <td class='map'>Default</td>
                            <td class='frequency'>Immediate</td>
                            <td class='created'>3 Days ago</td>
                            

                            <td class='actions'>
                               
                                <a class="btn btn-mini" onclick="SmeTemplatePreview=window.open('messages/preview','SmeTemplatePreview', 'status=1, scrollbars=1, width=600, height=720'); return false;" href="#"><i class='icon-magic'> </i> Preview</a>


                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-code'> </i> Code View
                                </a>


                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class='id'>2</td>
                            <td class='identifier'>register_activate</td>
                            <td class='subject'>New User Activation</td>
                            <td class='type'>System Message</td>
                            <td class='group'>Group 2</td>
                            <td class='template'>Standard</td>
                            <td class='map'>Default Map</td>
                            <td class='frequency'>Immediate</td>
                            <td class='created'>5 Days ago</td>
                            

                            <td class='actions'>
                               
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-magic'> </i> Preview
                                </a>

                                 <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-code'> </i> Code View
                                </a>


                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> Edit
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            </div><!--/.span12 box bordered-box-->
        </div><!--/.row-fluid-->

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop