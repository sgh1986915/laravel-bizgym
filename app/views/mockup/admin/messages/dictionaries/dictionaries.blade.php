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
                        <span>Manage Message Dictionaries</span>
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
                            Dictionaries
                        </li>
                        
                    </ul>
                </div>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

         <div class='row-fluid section-header'>
            <div class='title'>
                Create and manage content placeholders for your messages. 
            </div><!--/.title-->

            <div class='btn-group'>
                <a class='btn btn-default' role='button'>Go Back to Messages</a>
            </div><!--/.btn-group-->

        </div><!--/.row-fluid section-header-->
        

        <div class='row-fluid'>
            <div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>
            <div class='box-header muted-background'>
                <div class='title'><i class='icon-envelope'> </i>Existing Dictionaries</div>
                <div class='actions'>
                    <a class='btn btn-small' href='#modal-new-dictionary' role='button' data-toggle='modal'><i class='icon-plus'> </i>New Dictionary</a>
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
                            Title
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
                            <td class='title'>Default Dictionary</td>
                            <td class='date'>June 20, 2013</td>
                            
                            <td class='actions'>
                            
                               <a class='btn btn-default btn-mini' href=''>
                                    <i class='icon-edit'> </i> Manage Name & Items
                                </a>
                                <a class='btn btn-default btn-mini' href='#'>
                                    <i class='icon-remove'> </i> Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class='id'>2</td>
                            <td class='title'>Test</td>
                            <td class='date'>June 18, 2013</td>
                            
                            <td class='actions'>
                                
                                <a class='btn btn-default btn-mini' href=''>
                                    <i class='icon-edit'> </i> Manage Name & Items
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


                    <div class='modal new-dictionary hide fade' id='modal-new-dictionary' role='dialog' tabindex='-1'>
                        <div class='modal-header red-background'>
                            <button class='close' data-dismiss='modal' type='button'>&times;</button>
                            <h3>New Dictionary</h3>
                        </div><!--/.modal-header-->
                        <div class='modal-body'>
                            <form>
                                <div class='control-group'>
                                    <label class='control-label'>Dictionary Name</label>
                                    <div class='controls'>
                                        <input class='span8' id='dictionary-name' placeholder='Ex: Company Dictionary' type='text'>
                                        <p class='help-block'></p>
                                    </div>
                                </div>
                            </form>
                            
                        </div><!--/.modal-body-->

                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal'><i class='icon-remove'> </i> Cancel</button>
                             <button class='btn btn-default btn-primary' data-dismiss='modal'><i class='icon-magic'> </i> Create Dictionary</button>
                        </div><!--/.modal-footer-->
                    </div><!--/.modal hide fade-->


                

  
    </div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
    
@stop