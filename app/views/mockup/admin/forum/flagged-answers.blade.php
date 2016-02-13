@extends('layouts.admin')

@section('title', $title)
@section('content')


<div class='row-fluid admin forum-dash' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <div class='pull-left'>
                    <h3>
                        <i class='icon-dashboard'></i>
                        <span>Manage Flagged Answers</span>
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
                            Flagged Answers
                        </li>
                        
                    </ul>
                </div><!--/.pull-right-->
            </div>
        </div> <!--/.row-fluid-->


        <div class='row-fluid'>
        
            <div class='span12 box bordered-box orange-border' style='margin-bottom:0;'>
            <div class='box-header orange-background'>
                <div class='title'>Flagged Answers</div>
                <div class='actions'>
                    <a class='btn btn-default'>View Flagged Questions</a>
                </div>
            </div>
            <div class='box-content box-no-padding'>
                <div class='responsive-table'>
                    <div class='scrollable-area'>
                        <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                            <tr>
                                <th>
                                    Post
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Post Date
                                </th>

                                <th>
                                    Flagged By
                                </th>
                                <th>
                                    Flag Date
                                </th>

                                <th>
                                    Manage
                                </th>
                              
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title='Post'><a href='#'>Test Post 1</a></td>
                                    <td data-title='Author'><a href='#'>Bob W</a></td>
                                    <td data-title='Post Date'>September 7, 2013 9:34 PM</td>
                                    <td data-title='Flagged By'>User 323</td>
                                    <td data-title='Flag Date'>September 8, 2013 9:34 PM</td>
                                    <td data-title='Manage'>
                                        <a class='btn btn-mini'>Clear Flag</a>
                                        <a class='btn btn-mini'>Delete Post</a>
                                        <a class='btn btn-mini'>Blacklist</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-title='Post'><a href='#'>Test Post 5</a></td>
                                    <td data-title='Author'><a href='#'>Billy G</a></td>
                                    <td data-title='Post Date'>September 6, 2013 9:34 PM</td>
                                    <td data-title='Flagged By'>User 323</td>
                                    <td data-title='Flag Date'>September 8, 2013 9:34 PM</td>
                                    <td data-title='Manage'>
                                        <a class='btn btn-mini'>Clear Flag</a>
                                        <a class='btn btn-mini'>Delete Post</a>
                                        <a class='btn btn-mini'>Blacklist</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-title='Post'><a href='#'>Another Post</a></td>
                                    <td data-title='Author'><a href='#'>Jill C</a></td>
                                    <td data-title='Post Date'>September 6, 2013 9:34 PM</td>
                                    <td data-title='Flagged By'>User 323</td>
                                    <td data-title='Flag Date'>September 7, 2013 9:34 PM</td>
                                    <td data-title='Manage'>
                                        <a class='btn btn-mini'>Clear Flag</a>
                                        <a class='btn btn-mini'>Delete Post</a>
                                        <a class='btn btn-mini'>Blacklist</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-title='Post'><a href='#'>Test Post 1</a></td>
                                    <td data-title='Author'><a href='#'>Jimmy G</a></td>
                                    <td data-title='Post Date'>September 9, 2013 9:34 PM</td>
                                    <td data-title='Flagged By'>User 323</td>
                                    <td data-title='Flag Date'>September 10, 2013 9:34 PM</td>
                                    <td data-title='Manage'>
                                        <a class='btn btn-mini'>Clear Flag</a>
                                        <a class='btn btn-mini'>Delete Post</a>
                                        <a class='btn btn-mini'>Blacklist</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div><!--/.scrollable-area-->
                </div><!--/.responsive-table-->
            </div><!--/.box-content-->

        </div><!--/.row-fluid-->
      
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop