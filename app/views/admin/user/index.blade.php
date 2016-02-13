@extends('layouts.admin')

@section('admin_icon', 'user')

@section('admin_title', 'User Administration')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
	<li>
		<a href="{{ AdminURL::route('user.getindex') }}"><i class='icon-user'> </i>User</a>
	</li>

	<li class='separator'>
		<i class='icon-angle-right'></i>
	</li>

	<li>
		Overview
	</li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
	<div class='title'>
	   Manage the Users of your Application
	</div><!--/.title-->

	<div class='btn-group'>
		
		<a href="{{ AdminURL::route('user.getsuspended') }}" class="btn btn-default" role="button"><i class='icon-ban-circle'> </i> View Suspended Users </a>
		<a href="{{ AdminURL::route('user.getbanned') }}" class="btn btn-default" role="button"><i class='icon-book'> </i> View Banned Users</a>
	</div><!--/.btn-group-->

</div><!--/.row-fluid section-header-->

<div class='row-fluid' style='margin-bottom:2em;'>
<div class='span12 box bordered-box purple-border' style='margin-bottom:0;'>

	<div class='box-header muted-background'>
		<div class='title'><i class='icon-user'> </i> All Users</div>
		 
		<div class='actions'>
			<a href="{{ AdminURL::route('user.getnew') }}" class='btn btn-small'><i class='icon-plus'> </i>Add User</a>
		</div>
	</div>

	<div class='box-content box-no-padding'>
		<table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
			<thead>
			<tr>
				<th>
					Username
				</th>
				<th>
					Name
				</th>
				<th>
					Email
				</th>
				<th>
					Joined
				</th>
				<th>
					Status
				</th>

				<th>
					Primary Role
				</th>

				<th>
					Subscriber
				</th>

				<th>
					Actions
				</th>
			</tr>
			</thead>
			<tbody>
			@foreach ($users as $user)
			<tr>
				<td data-title="Username">{{ $user->getUsername() }}</td>
				<td data-title="Name">{{ $user->getFullname() }}</td>
				<td data-title="Email">{{ $user->email }}</td>
				<td data-title="Joined">{{ date('m/d/y',strtotime($user->created_at)) }}</td>
				<td data-title="Status">{{ $user->getLabelStatus() }}</td>
				<td data-title="Primary Role">{{ $user->getLabelPrimaryRole() }}</td>
				<td data-title="Subscriber">{{ $user->getLabelSubscriptionStatus() }}</td>
				<td data-title="Actions">
					<a class="btn btn-default btn-mini" href="{{ AdminURL::route('user.getdetails', $user->id) }}">
					<i class='icon-user'> </i>
					Details
					</a>
					<a class="btn btn-default btn-mini" href="{{ AdminURL::route('user.postupdate', $user->id) }}">
					<i class='icon-edit'> </i>
					Edit
					</a>
					<a class="btn btn-default btn-mini user-action-btn" rel="{{ AdminURL::route('user.postactivate') }}" data-user="{{ $user->id }}" href="#!" title="Activate">
						<i class='icon-ok'> </i>
					</a>
					<a class="btn btn-default btn-mini user-action-btn" rel="{{ AdminURL::route('user.postsuspend') }}" data-user="{{ $user->id }}" data-must-confirmed="1" href="#!" title="Suspend">
						<i class='icon-ban-circle'> </i>
					</a>
					<a class="btn btn-default btn-mini user-action-btn" rel="{{ AdminURL::route('user.postban') }}" data-user="{{ $user->id }}" data-must-confirmed="1" href="#!" title="Ban">
						<i class='icon-remove'> </i>
					</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		<form action="{{ AdminURL::route('user.postactivate') }} }}" method="POST" id="user-action">
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
        needConfirmation = $(this).data('must-confirmed'),
        actionable, confirmed

    if (needConfirmation) {
        confirmed = confirm('Are you sure?')
    } else {
        actionable = true
    }


    if (actionable == true || confirmed == true) {
		form.attr('action', target)
		form.find('input[type=hidden]').val(user_id)
		form.submit()
	}
	
})
@stop