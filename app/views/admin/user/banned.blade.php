@extends('layouts.admin')

@section('admin_icon', 'user')

@section('admin_title', 'Banned Users')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
    <li>
        <a href="{{ AdminURL::route('user.getindex') }}"><i class='icon-user'> </i>User</a>
    </li>

    <li class='separator'>
        <i class='icon-angle-right'></i>
    </li>

    <li>
        Banned
    </li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
	<div class='title'>
	   Email Addresses and IP Addresses that have been blocked
	</div><!--/.title-->

	<div class='btn-group'>
		
		<a href="{{ AdminURL::route('user.getindex') }}" class="btn btn-default" role="button"><i class='icon-globe'> </i> View All Users </a>
		<a href="{{ AdminURL::route('user.getsuspended') }}" class="btn btn-default" role="button"><i class='icon-ban-circle'> </i> View Suspended Users</a>
	</div><!--/.btn-group-->

</div><!--/.row-fluid section-header-->

<div class='row-fluid' style='margin-bottom:2em;'>
<div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>

	<div class='box-header muted-background'>
	    <div class='title'><i class='icon-user'> </i> Banned Users</div>

	     <div class='actions'>
	        <a href="{{ AdminURL::route('user.getindex') }}" class='btn btn-small'><i class='icon-arrow-left'></i> Back</a>
	        </a>
	    </div>
	</div>

	<div class='box-content box-no-padding'>
	    <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
	        <thead>
	        <tr>
	            <th>
	                Email
	            </th>
	            <th>
	                Banned At
	            </th>
	            <th>
	                Duration
	            </th>
	            <th>
	                Actions
	            </th>
	        </tr>
	        </thead>
	        <tbody>
	        @foreach ($users as $user)
	        <tr>
	            <td data-title="Email">{{ $user->email }}</td>
	            <td data-title="Banned At">
		            {{ Sentry::findThrottlerByUserId($user->id)->banned_at }}
	            </td>
	            <td data-title="Duration">Forever</td>
	            <td data-title="Actions">
                    <a class="btn btn-default btn-mini user-action-btn" rel="{{ AdminURL::route('user.postunban') }}" data-user="{{ $user->id }}" href="#!">
                        <i class='icon-ok'> </i> Unban
                    </a>
	            </td>
	        </tr>
	        @endforeach
	        </tbody>
	    </table>
	    <form action="{{ AdminURL::route('user.postunban') }} }}" method="POST" id="user-action">
	    <input type="hidden" name="user_id" value=""/>
        </form>
	</div>
</div><!--/.span12 box bordered-box-->
</div>
@stop

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
	var target = $(this).attr('rel'),
		user_id = $(this).data('user'),
		form = $('#user-action'),
		confirmed = confirm('Are you sure?')


	if (confirmed) {
		form.attr('action', target)
		form.find('input[type=hidden]').val(user_id)
		form.submit()
	}
	
})
@stop