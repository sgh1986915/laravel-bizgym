@extends('layouts.admin')

@section('admin_icon', 'user')

@section('admin_category', 'user-edit')

@section('admin_title', 'Edit User')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
    <li>
        <a href="{{ AdminURL::route('user.getindex') }}"><i class='icon-user'> </i>User</a>
    </li>

    <li class='separator'>
        <i class='icon-angle-right'></i>
    </li>

    <li>
        Edit
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
       Edit User info and Permissions for {{ $user->getFullname($user->email) }}
    </div><!--/.title-->

    <div class='btn-group'> 
        <a href="{{ AdminURL::route('user.getindex') }}" class='btn btn-default' role='button'> </i>Back to Users</a>

        <a class="btn btn-default user-action-btn" rel="{{ AdminURL::route('user.postsuspend') }}" data-user="{{ $user->id }}" href="#!">
            <i class='icon-ban-circle'> </i>
            Suspend User
        </a>
        <a class="btn btn-default user-action-btn" rel="{{ AdminURL::route('user.postban') }}" data-user="{{ $user->id }}" href="#!">
            <i class='icon-book'> </i>
            Ban User
        </a>
    </div><!--/.btn-group-->
    <form action="{{ AdminURL::route('user.postsuspend') }} }}" method="POST" id="user-action">
        <input type="hidden" name="user_id" value=""/>
    </form>

</div><!--/.row-fluid section-header-->

<div class='row-fluid .user-edit'>
    <div class='span12 box'>
        <div class='box-content'>
            <div class='row-fluid'>
            
                <div class='span7'>
                    {{ Form::open(array('class' => 'form','url' => AdminURL::route('user.postupdate', $user->id), 'method' => 'post', 'id' => 'user-action-basic'))  }}
                    {{ Form::token() }}
                    <fieldset>
                    <div class="lead">
                        <i class="icon-user text-contrast"></i>
                        Basic Information
                    </div><!--/.lead-->

                    <div class='control-group'>
                        <label class='control-label'>Username</label>
                        <div class='controls'>
                            {{ Form::text('username', Input::old('username',$user->getUsername('')), array('id'=>'input-user-username', 'class' => 'span9', 'placeholder' => 'Username')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>First Name</label>
                        <div class='controls'>
                            {{ Form::text('first_name', Input::old('first_name', $user->first_name), array('id'=>'input-user-first_name', 'class' => 'span9', 'placeholder' => 'First name')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Last Name</label>
                        <div class='controls'>
                            {{ Form::text('last_name', Input::old('last_name', $user->last_name), array('id'=>'input-user-last_name', 'class' => 'span9', 'placeholder' => 'Last name')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Email Address</label>
                        <div class='controls'>
                            {{ Form::text('email', Input::old('email',$user->email), array('id'=>'input-user-email', 'class' => 'span9', 'placeholder' => 'Email address')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Account Status</label>
                        <div class='controls'>
                            <select id='input-user-account_status' name="account_status">
                                <option value='1' {{ $user->getStatus() == 'active' ? 'selected' : ''}}>Verified</option>
                                <option value='0' {{ $user->getStatus() == 'not active' ? 'selected' : ''}}>Not Verified</option>
                                @if( ! in_array($user->getStatus(), array('active', 'not active')))
                                <option value='-1' selected>{{ ucfirst($user->getStatus()) }}</option>
                                @endif
                            </select>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <div class='controls'>
                            <label class='checkbox'>
                                <input data-target='#change-password' data-toggle='collapse' name='change_password' type='checkbox'>
                                    Change password?
                            </label>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    <div class='collapse' id='change-password'>
                        <div class='control-group'>
                            <label class='control-label'>Password</label>
                            <div class='controls'>
                                {{ Form::password('password', array('id'=>'input-user-password', 'class' => 'span12', 'placeholder' => 'Password')) }}
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Password confirmation</label>
                            <div class='controls'>
                                {{ Form::password('password_confirmation', array('id'=>'input-user-password_confirmation', 'class' => 'span12', 'placeholder' => 'Password confirmation')) }}
                            </div>
                        </div> <!--/.control-group-->
                    </div> <!--/.collapse-->

                    <div class='control-group'>
                        <label class='control-label'>Location</label>
                        <div class='controls'>
                            {{ Form::text('location', Input::old('location', $user->getLocation('')), array('id'=>'input-user-location', 'class' => 'span9', 'placeholder' => 'Location')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Website</label>
                        <div class='controls'>
                            {{ Form::text('website', Input::old('website', $user->getWebsite('')), array('id'=>'input-user-website', 'class' => 'span9', 'placeholder' => 'Personal Website')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>Title</label>
                        <div class='controls'>
                            {{ Form::text('title', Input::old('title', $user->getTitle('')), array('id'=>'input-user-title', 'class' => 'span9', 'placeholder' => 'Title')) }}
                        </div><!--/.controls-->
                    </div><!--/.control-group-->


                    <div class='control-group'>
                        <label class='control-label'>Bio</label>
                        <div class='controls'>
                            <textarea class='input-block-level' placeholder="Bio" rows='4' name="bio" id="input-user-bio">{{ Input::old('bio', $user->getBio('')) }}</textarea>
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                </fieldset>
                {{ Form::close() }}
                </div><!--/.span7 -->
                    
                <div class='span4'>
                    {{ Form::open(array('class' => 'form','url' => URL::route('attachment.postuser', $user->id), 'id' => 'user-action-attachment', 'files' => true))  }}
                    <fieldset>
                    <div class="lead">
                        <i class="icon-picture text-contrast"></i>
                        User Images
                    </div><!--/.lead-->

                    <div class='control-group'>
                        <label class='control-label'>User Photo</label>
                        <div class='user-photo'>
                            <img src="/media/user/profile/{{ $user->id }}">
                        </div><!--/.user-photo-->
                        <div class="input-append">
                            <input id="profile_picture_url" value="{{ URL::to('/media/profile/user/'.$user->id) }}" type="text" disabled="disabled"/>
                            {{ Form::file('profile_picture', array('class' => 'uploader')) }}
                        </div>
                    </div><!--/.control-group-->

                    <div class='control-group'>
                        <label class='control-label'>User Cover Photo</label>
                        <div class='user-photo'>
                            <img src="/media/user/cover/{{ $user->id }}">
                        </div><!--/.user-photo-->
                        <div class='controls'>
                            
                            <div class="input-append">
                                <input id="cover_picture_url" value="{{ URL::to('/media/cover/user/'.$user->id) }}" type="text" disabled="disabled"/>
                            {{ Form::file('cover_picture', array('class' => 'uploader')) }}
                            </div>
                            
                        </div><!--/.controls-->
                    </div><!--/.control-group-->
                    </fieldset>
                    {{ Form::close() }}
                </div><!--/.span4-->
            </div><!--/.row-fluid-->

            <hr class='hr-double'>

            <div class='row-fluid'>
                <fieldset>
                <div class='span3'>
                    <div class="lead">
                        <i class="icon-facebook text-primary"></i>
                        Facebook Info
                    </div><!--/.lead-->

                   <div class="well">Not connected</div>
                </div><!--/.span3-->

                <div class='span3'>
                    <div class="lead">
                        <i class="icon-twitter text-primary"></i>
                        Twitter Info
                    </div><!--/.lead-->

                    <div class="well">Not connected</div>
                </div><!--/.span3-->
                </fieldset>
            </div><!--/.row-fluid-->

            <hr class='hr-double'>

            <div class='row-fluid'>
                <fieldset>
                <div class='span8'>
                    <div class="lead">
                        <i class="icon-group text-info"></i>
                        System Groups
                    </div><!--/.lead-->

                    
                    <div class="input-append">
                        <select class='select input-medium group-selector' rel="groupSystem">
                            <option value='0' disabled selected style='display:none;'>Select Group</option>
                            @foreach($groups as $group)
                                @if($group->type == 0)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endif
                            @endforeach

                        </select>
                        <button class="btn btn-primary user-group-action" type="button" data-group-type="system" data-group-system="" data-group-user="{{ $user->id }}"><i class='icon-plus'> </i> Add to Group</button>
                    </div><!--/.input-append-->
                            
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            
                            <th>
                                Group
                            </th>


                            <th>
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($user->getGroups() as $userGroup)
                            <tr>
                                <td data-title='Group'>{{ $userGroup->name }}</td>

                                <td data-title='Actions'>
                                    
                                    <a class="btn btn-danger btn-mini {{ $userGroup->deletable ? 'user-group-action' : 'disabled'}}" data-must-confirmed="1" href="#!" data-group-type="system" data-group-meta="{{ base64_encode(serialize(array('user_id' => $user->id, 'group_id' => $userGroup->id))) }}">
                                        <i class='icon-remove'> </i>Remove from Group
                                    </a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--/.span8-->
                </fieldset>
            </div><!--/.row-fluid-->

            <hr class='hr-double'>

            <div class='row-fluid'>
                <fieldset>
                <div class='span8'>
                    <div class="lead">
                        <i class="icon-briefcase text-info"></i>
                        Brands and Brand Groups
                    </div><!--/.lead-->

                    <div class="input-append">
                        <select class='select input-medium group-selector' rel="groupBrand">
                            <option value='0' disabled selected style='display:none;'>Select Brand</option>
                            @foreach($brands as $brand)
                            <option value="{{ $brand->title }}">{{ $brand->title }}</option>
                            @endforeach
                        </select>


                        <select class='select input-medium group-selector' rel="groupSystem">
                            <option value='0' disabled selected style='display:none;'>Select Group</option>
                            @foreach($groups as $group)
                                @if($group->type == 1)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endif
                            @endforeach

                        </select>
                        <button class="btn btn-primary user-group-action" type="button" data-group-type="brand" data-group-system="" data-group-brand="" data-group-user="{{ $user->id }}"><i class='icon-plus'> </i> Add to Group</button>
                    </div><!--/.input-append-->

                            
                    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            
                            <th>
                                Brand
                            </th>

                             <th>
                                Group
                            </th>


                            <th>
                                Action
                            </th>
                  
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (Groups::getRelationProvider()->findUserBrands($user->id, true) as $brand => $brandGroups)
                            <tr>
                                <td data-title='Brand'>{{ $brand }}</td>
                                <td data-title='Group'>
                                @foreach ($brandGroups as $brandGroup)
                                {{ $brandGroup->group_type == 1 ? $brandGroup->name.'&nbsp;&nbsp;' : '' }}
                                @endforeach
                                </td>
                                <td data-title='Actions'>
                                    
                                    <a class="btn btn-danger btn-mini user-group-action" data-group-type="brand" data-group-meta="{{ base64_encode(serialize(array('user_id' => $user->id, 'brand' => $brand))) }}" data-must-confirmed="1" href="#!">
                                        <i class='icon-remove'> </i>Remove from Group
                                    </a>
                                    
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div><!--/.span8--> 
                </fieldset>
            </div><!--/.row-fluid-->


            <form action="{{ AdminURL::route('user.postgroupupdate', $user->id) }} }}" method="POST" id="user-group-action">
                <input type="hidden" name="type" value=""/>
                <input type="hidden" name="method" value=""/>
                <input type="hidden" name="group_id" value=""/>
                <input type="hidden" name="user_id" value=""/>
                <input type="hidden" name="brand" value=""/>
                <input type="hidden" name="meta" value=""/>
            </form>

            <div class='form-actions' style='margin-bottom: 0;'>
                <div class='text-right'>
                    <a href="{{ AdminURL::route('user.getindex') }}" class='btn btn-default btn-large'>
                        <i class='icon-arrow-left'></i>
                        Go Back to Users
                    </a>

                    <button class="btn btn-primary btn-large submit-form" rel="user-action-basic">
                        <i class='icon-save'></i>
                        Save All Changes
                    </button>
                </div>
            </div><!--/.form-actions-->
        </div><!--/.box-content-->
    </div><!--/.span8 box-->
</div><!--/.row-fluid-->

</div><!--/.span12-->
</div>
@stop

@section('inline_scripts')
@parent

@if (Input::old('change_password') == 'on')
$('input[name="change_password"]').click()
@endif

$('.uploader').live('change', function(e){
    var uploader = $(e.currentTarget),
        container = uploader.parent(),
        form = $('#user-action-attachment')

    container.replaceWith(uploader)
    uploader.css('display','none')

    setTimeout(function(){
        form.submit()
    },1000)
})

$('.submit-form').click(function(){
    $(this).attr('disabled', 'disabled')

    var formId = $(this).attr('rel'),
        form = $('#'+formId)

    form.submit()
    e.preventDefault()
})

$('.group-selector').change(function(){
    var handler = $(this).parent().find('button')

    handler.data($(this).attr('rel'), $(this).val())
})

$('.user-group-action').click(function(){
    $(this).attr('disabled', 'disabled')

    var data = $(this).data(),
        form = $('#user-group-action'),
        inputType = form.find('input[name=type]'),
        inputMethod = form.find('input[name=method]'),
        inputGroup = form.find('input[name=group_id]'),
        inputUser = form.find('input[name=user_id]'),
        inputBrand = form.find('input[name=brand]'),
        inputMeta = form.find('input[name=meta]'),
        savable = true,
        needConfirmation = data.mustConfirmed,
        actionable, confirmed

    // Prepare state
    if (needConfirmation) {
        confirmed = confirm('Are you sure?')
    } else {
        actionable = true
    }

    // Assure form action
    form.action = "{{ AdminURL::route('user.postgroupupdate') }}"

    // Set type
    inputType.val(data.groupType)

    // Set method and meta
    if (!!data.groupMeta) {
        inputMethod.val('delete')
        inputMeta.val(data.groupMeta)
    } else {
        inputMethod.val('save')
        inputGroup.val(data.groupSystem)
        inputUser.val(data.groupUser)

        if (!!data.groupBrand) {
            inputBrand.val(data.groupBrand)
        }

        if (!data.groupSystem) {
            savable = false
        }
    }

    if (savable) {
        if (actionable == true || confirmed == true) {
           form.submit()
        }
    } else {
        alert('select group first')
        $(this).removeAttr('disabled')
    }

    e.preventDefault()
})

$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        user_id = $(this).data('user'),
        form = $('#user-action')
        confirmed = confirm('Are you sure?')


    if (confirmed) {
        form.attr('action', target)
        form.find('input[type=hidden]').val(user_id)
        form.submit()
    }
    
})
@stop