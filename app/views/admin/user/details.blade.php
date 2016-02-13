@extends('layouts.admin')

@section('admin_icon', 'user')

@section('admin_title', 'User Details')

@section('admin_category', 'users')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
	<li>
		<a href="{{ AdminURL::route('user.getindex') }}"><i class='icon-user'> </i>User</a>
	</li>

	<li class='separator'>
		<i class='icon-angle-right'></i>
	</li>

	<li>
		{{ $user->getFullname($user->email) }}
	</li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
    <div class='title'>
       Viewing User Details for {{ $user->getFullname($user->email) }}
    </div><!--/.title-->

    <div class='btn-group'> 
        <a href="{{ AdminURL::route('user.getindex') }}" class='btn btn-default' role='button'> </i>Back to Users</a>
        <a class='btn btn-default' role='button'><i class='icon-envelope'> </i> Message User</a>
        <a href="#!" rel="{{ AdminURL::route('user.postupdate', $user->id) }}" data-user="{{ $user->id }}" class="btn btn-default user-action-btn"><i class='icon-edit'> </i> Edit User</a>
        <a class='btn btn-default' role='button'><i class='icon-user'> </i> View Public Profile</a>
    </div><!--/.btn-group-->
    <form action="{{ AdminURL::route('user.postupdate', $user->id) }}" method="POST" id="user-action">
    </form>

</div><!--/.row-fluid section-header-->

<div class='row-fluid profile-content'>

    <div class='span7'>
        <ul class='profile-meta unstyled'>
            <li><span class='item-title'>Name:</span>{{ $user->getFullname() }}</li>
            <li><span class='item-title'>Email: </span>{{ $user->email }}</li>
            <li><span class='item-title'>Status: </span>{{ $user->getLabelStatus(true) }}</li>
            <li><span class='item-title'>Subscription:</span>{{ $user->getLabelSubscriptionStatus(true) }}</li>
            <li><span class='item-title'>Joined:</span>{{ $user->created_at }}</li>
            <li><span class='item-title'>System Groups:</span>{{ $user->getLabelPrimaryRole(true)}}</li>
            
        </ul>
    </div><!--/.span7-->

    <div class='span5'>
        <div class='lead'>User Photos</div>
        <div class='row-fluid'>
            <div class='span8'>
                <div class='cover-image'>
                    <!-- User cover image -->
                    <img src="/media/user/cover/{{$user->id}}" alt='Cover Photo on Dashboard'>
                </div><!--/.profile-image-->
            </div><!--/.span8-->
            <div class='span4'>
                <div class='profile-image'>
                    <!-- User profile image -->
                    <img src="/media/user/profile/{{$user->id}}" alt='Profile Image'>
                </div><!--/.profile-image-->
            </div><!--/.span4-->
        </div><!--/.row-fluid-->

        <div class='row-fluid social'>
            <div class='lead'>Connected Social Accounts</div>

            @if ($connections = $user->socialConnections()->get())
            <ul class="user-connect">
            	@foreach($connections as $conenction)
            	<li>
	                <button class="btn share-button">
	                <i class="icon-{{ strtolower($connection->provider) }}"></i>
	                </button>
	            </li>
            	@endforeach
            </ul>
            @else
            @endif
        </div><!--/.row-fluid-->
    </div><!--/.span5-->

</div><!--/.row-fluid profile-content-->

<div class='row-fluid user-analytics'>
    
    @widget('app::userjoinstat', $user->id)

    @widget('app::userlastloginstat', $user->id)
    
    @widget('app::userlogincounterstat', $user->id)

    @widget('app::userrevenuestat', $user->id)
    
</div><!--/.row-fluid user stats-->

<hr/>

<div class='row-fluid' style='margin-bottom:2em;'>
    <div class='span7 box'>
        @widget('app::usergroupbrandsbox', $user->id)
    </div><!--/.span7-->

    <div class='span5 box'>
        @widget('app::userbadgesbox', $user->id)
    </div><!--/.span8-->  

</div><!--/.row-fluid-->

<div class='row-fluid' style='margin-bottom:2em;'>
    <div class='span12 box bordered-box purple-border' style=''>
        @widget('app::userlogsbox', $user->id)
    </div>
</div><!--/.row-fluid-->
@stop

@section('inline_scripts')
@parent
$(".user-action-btn").click(function(e){
    var form = $("#user-action"),
        target = $(this).attr('rel'),
        user_id = $(this).data('user')

    form.action = target
    form.submit()

    e.preventDefault()

})
@stop