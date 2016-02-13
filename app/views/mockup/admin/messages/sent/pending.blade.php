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
                        <span>Pending Messages</span>
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

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Sent Messages
                        </li>

                        <li class='separator'>
                            <i class='icon-angle-right'></i>
                        </li>
                        <li>
                            Pending
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid section-header'>
            <div class='title'>
               Messages scheduled to be sent
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Messages</a>
                <a class='btn btn-default'>View Sent Messages</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->


        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-envelope'> </i>Pending Messages</div>
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
                            Subject
                        </th>
                        <th>
                            Recipient
                        </th>

                        <th>
                            Type
                        </th>

                        <th>
                            Frequency
                        </th>
                    
                        <th>
                            Date
                        </th>

                        <th>
                            Actions
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td class='subject'>Welcome to BizGym</td>
                            <td class='recipient'>test@google.com</td>
                            <td class='type'>System Message</td>
                            <td class='frequency'>Immediate</td>
                            <td class='date'>September 29, 2013 7:32pm</td>
                            

                            <td class='actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> View Details
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class='id'>2</td>
                            <td class='subject'>Payment Receipt</td>
                            <td class='recipient'>test@google.com</td>
                            <td class='type'>System Message</td>
                            <td class='frequency'>Immediate</td>
                            <td class='date'>September 27, 2013 7:32pm</td>
                            

                            <td class='actions'>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-edit'> </i> View Details
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