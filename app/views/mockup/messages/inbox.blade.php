@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid' id='content-wrapper'>
    <div class='span12 inbox'>
        <div class="row-fluid">
            <div class="page-header">
                <div class="span9">
                    <h1 class='pull-left'>
                        <i class='icon-comment'></i>
                        <span>Inbox</span>
                        
                        
                    </h1>
                </div> <!--/.span9-->
            </div> <!--/.page-header-->
        </div><!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header orange-background'>
                    <div class='title'>Your Messages</div>
                    <div class='actions'>
                        <button class='btn'><i class='icon-pencil'> </i> Create New </button>
                    </div><!--/.actions-->
                </div>
                <div class='box-content box-no-padding'>
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
                            <table class='data-table table message-inbox table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    <th>
                                        From
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <span class='message-avatar'><img class="img-circle" src="http://placehold.it/35x35" alt="75x75" alt="Profile"></span>Sigurd Klocko</td>
                                        <td><a href="message.html">TPS Reports</a></td>
                                        <td>
                                            January 2nd, 2013 10:13 AM
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <a class='btn btn-info btn-mini' href='#'>
                                                    <i class='icon-eye'> </i> View
                                                </a>
                                                <a class='btn btn-success btn-mini' href='#'>
                                                    <i class='icon-share-alt'> </i> Reply
                                                </a>
                                                <a class='btn btn-danger btn-mini' href='#'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td> <span class='message-avatar'><img class="img-circle" src="http://placehold.it/35x35" alt="75x75" alt="Profile"></span>Sigurd Klocko</td>
                                        <td><a href="message.html">TPS Reports</a></td>
                                        <td>
                                            January 2nd, 2013 10:13 AM
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <a class='btn btn-info btn-mini' href='#'>
                                                    <i class='icon-eye'> </i> View
                                                </a>
                                                <a class='btn btn-success btn-mini' href='#'>
                                                    <i class='icon-share-alt'> </i> Reply
                                                </a>
                                                <a class='btn btn-danger btn-mini' href='#'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <span class='message-avatar'><img class="img-circle" src="http://placehold.it/35x35" alt="75x75" alt="Profile"></span>Sigurd Klocko</td>
                                        <td><a href="message.html">TPS Reports</a></td>
                                        <td>
                                            January 2nd, 2013 10:13 AM
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <a class='btn btn-info btn-mini' href='#'>
                                                    <i class='icon-eye'> </i> View
                                                </a>
                                                <a class='btn btn-success btn-mini' href='#'>
                                                    <i class='icon-share-alt'> </i> Reply
                                                </a>
                                                <a class='btn btn-danger btn-mini' href='#'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class='message-avatar'><img class="img-circle" src="http://placehold.it/35x35" alt="75x75" alt="Profile"></span>Sigurd Klocko</td>
                                        <td><a href="message.html">TPS Reports</a></td>
                                        <td>
                                            January 2nd, 2013 10:13 AM
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <a class='btn btn-info btn-mini' href='#'>
                                                    <i class='icon-eye'> </i> View
                                                </a>
                                                <a class='btn btn-success btn-mini' href='#'>
                                                    <i class='icon-share-alt'> </i> Reply
                                                </a>
                                                <a class='btn btn-danger btn-mini' href='#'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class='message-avatar'><img class="img-circle" src="http://placehold.it/35x35" alt="75x75" alt="Profile"></span>Sigurd Klocko</td>
                                        <td><a href="message.html">TPS Reports</a></td>
                                        <td>
                                            January 2nd, 2013 10:13 AM
                                        </td>
                                        <td>
                                            <div class='text-right'>
                                                <a class='btn btn-info btn-mini' href='#'>
                                                    <i class='icon-eye'> </i> View
                                                </a>
                                                <a class='btn btn-success btn-mini' href='#'>
                                                    <i class='icon-share-alt'> </i> Reply
                                                </a>
                                                <a class='btn btn-danger btn-mini' href='#'>
                                                    <i class='icon-remove'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table><!--/.table-->
                        </div><!--/.scrollable-area-->
                    </div><!--/.responsive-table-->
                </div><!--/.box-content box-no-padding-->
            </div><!--/.span12 box bordered-box organge-border-->
        </div><!--/.row-fluid-->

    </div><!--/.span12-->
</div><!--/.row-fluid #contnet-wrapper-->


@stop