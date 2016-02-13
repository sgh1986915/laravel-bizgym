@extends('layouts.admin')

@section('admin_icon', 'user')

@section('admin_title', 'User Management')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
    <li>
        <a href="{{ AdminURL::route('user.getindex') }}"><i class='icon-user'> </i>User</a>
    </li>

    <li class='separator'>
        <i class='icon-angle-right'></i>
    </li>

    <li>
        New User
    </li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
    <div class='title'>
       Create a new user
    </div><!--/.title-->

    <div class='btn-group'>
        
        <a href="{{ AdminURL::route('user.getindex') }}" class="btn btn-default" role="button"><i class='icon-globe'> </i> View All Users </a>
    </div><!--/.btn-group-->

</div><!--/.row-fluid section-header-->

<div class='row-fluid' style='margin-bottom:2em;'>
<div class='span8 box'>
    <div class='box-content'>
        {{ Form::open(array('class' => 'form','url' => AdminURL::route('user.postnew'), 'method' => 'post'))  }}
        {{ Form::token() }}
            <fieldset>
                <div class='control-group'>
                    <label class='control-label'>Email</label>
                    <div class="controls">
                    	{{ Form::text('email', $email, array('id'=>'email', 'class' => 'span6', 'placeholder' => 'Email address')) }}
                    </div><!--/.controls-->
                </div><!--/.control-group-->

                <div class='control-group'>
                    <label class='control-label'>Password</label>
                    <div class="controls">
                    	{{ Form::password('password' , array('id'=>'password', 'class' => 'span6', 'placeholder' => 'Password', 'AUTOCOMPLETE' => 'OFF')) }}
                    </div><!--/.controls-->
                </div><!--/.control-group-->

            </fieldset>
            <div class='form-actions' style='margin-bottom: 0;'>
                <div class='text-right'>
                    <div class='btn btn-default btn-large' id="user-back">
                        <i class='icon-arrow-left'></i>
                        Go Back
                    </div>

                    {{ Form::submit('Save', array('class'=>'btn btn-primary btn-large')) }}
                </div>
            </div><!--/.form-actions-->
        {{ Form::close() }}
    </div><!--/.box-content-->
</div><!--/.span6 box-->

<div class='span4 box'>
    <div class='alert alert-info'>
        <a class="close" href="#" data-dismiss="alert">×</a>
        <p>Keep these things in mind when you create new user
            <i class="icon-smile"></i></p>
        <div class='row-fluid shift-down'>
            <ul>
                <li>An activation email will be sent to created user</li>
                <li>Created user will need to activate their account</li>
            </ul>
        </div><!--/.row-fluid shift-down-->

    </div><!--/.alert-->
</div><!--/.span4 box-->
</div>
@stop

@section('inline_scripts')
@parent
$('#user-back').click(function(e){
	window.location = "{{ AdminURL::route('user.getindex') }}"
	e.preventDefault()
})
@stop