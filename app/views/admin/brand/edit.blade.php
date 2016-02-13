@extends('layouts.admin')

@section('admin_icon', 'briefcase')

@section('admin_title', 'Edit Brand')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
    <li>
        <a href="{{ AdminURL::route('brand.getindex') }}"><i class='icon-briefcase'> </i>Brand</a>
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
        {{ $brand->title }}
    </li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
    <div class='title'>
        Edit Brand Profile for {{ $brand->title }}
    </div><!--/.title-->
    <div class='btn-group'>
        <a class='btn btn-default' role='button' href="{{ AdminURL::route('brand.getindex') }}">Go Back to Brands</a>
    </div><!--/.btn-group-->
</div><!--/.row-fluid section-header-->

<div class='row-fluid'>
<div class='span12 box'>
<div class='box-content'>
{{ Form::open(array('url' => 'admin/brand/edit/'.$brand->id, 'method' => 'put', 'id' => 'brand-default')) }}
{{ Form::token() }}
<fieldset>
    <div class='span7'>
        <div class="lead">
            <i class="icon-briefcase text-contrast"></i>
            {{ trans('brand.brand_title_create_brand') }}
        </div><!--/.lead-->

        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_company') }}</label>
            <div class='controls'>
                <input class='span9' id='brand_name' name='title' placeholder='Ex: BizGym' value='{{ $brand->title }}' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->

        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_url') }}</label><p class='help-block'>Choose a permalink for this brand, similar to a username.</p>
            <div class='controls'>
                <input class='span9' id='brand_url' name='slug' placeholder='yourbrand' value='{{ $brand->slug }}' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->

        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_website') }}</label><p class='help-block'>Does your company have a website? Add it here. </p>
            <div class='controls'>
                <input class='span9' id='brand_website' name='url' placeholder='http://bobsbeestore.com' value='{{ $brand->url }}' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_desc') }}</label>
            <div class='controls'>
                <textarea class='input-block-level' name='description' placeholder='My brand sells this and that' rows='4'>{{ $brand->description }}</textarea>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_status') }}</label><p class='help-block'>Is this company active in the system?</p>
            <div class='controls'>
                {{ Form::select('status', array('Active', 'Inactive'), $brand->status, array('class' => 'input-large')) }}
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_visibility') }}</label><p class='help-block'>Is this company visible to outsiders?</p>
            <div class='controls'>
                {{ Form::select('visibility', array('Visible', 'Hidden'), $brand->visibility, array('class' => 'input-large')) }}
            </div><!--/.controls-->
        </div><!--/.control-group-->
    </div><!--/.span7-->
    {{ Form::close() }}
    {{ Form::open(array('class' => 'form','url' => URL::route('attachment.postbrand', $brand->id), 'id' => 'brand-action-attachment', 'files' => true))  }}
    <div class='span4 offset1'>
        <div class="lead">
            <i class="icon-picture text-contrast"></i>
            {{ trans('brand.brand_table_title4') }}
        </div><!--/.lead-->

        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_companylogo') }}</label>
            <div class='user-photo'>
                <img src="/media/brand/logo/{{ $brand->id }}" />
            </div><!--/.user-photo-->
            <div class="input-append">
                <input id="logo_picture_url" value="{{ URL::to('/media/logo/brand/'.$brand->id) }}" type="text" disabled="disabled"/>
                {{ Form::file('logo_picture', array('class' => 'uploader')) }}
<!--                <button class="btn btn-danger" type="button">Remove</button>-->
            </div>
        </div><!--/.control-group-->

        <div class='control-group'>
            <label class='control-label'>{{ trans('brand.brand_label_coverlogo') }}</label>
            <div class='user-photo'>
                <img src="/media/brand/cover/{{ $brand->id }}" />
            </div><!--/.user-photo-->
            <div class='controls'>
                <div class="input-append">
                    <input id="cover_picture_url" value="{{ URL::to('/media/cover/brand/'.$brand->id) }}" type="text" disabled="disabled"/>
                    {{ Form::file('cover_picture', array('class' => 'uploader')) }}
<!--                    <button class="btn btn-danger" type="button">Remove</button>-->
                </div>

            </div><!--/.controls-->
        </div><!--/.control-group-->
    </div><!--/.span4 offset1-->
    {{ Form::close() }}
</fieldset>
<hr class='hr-double'>
<fieldset>
    <div class='span3'>
        <div class="lead">
            <i class="icon-facebook text-primary"></i>
            {{ trans('brand.brand_table_titlef') }}
        </div><!--/.lead-->

        <div class='control-group'>
            <label class='control-label'>Facebook Username</label>
            <div class='controls'>
                <input class='input-block' id='facebook_username' value='bob123' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Facebook URL</label>
            <div class='controls'>
                <input class='input-block' id='facebook_url' value='facebook.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Facebook Image</label>
            <div class='controls'>
                <input class='input-block' id='facebook_image' value='facebook.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Facebook Description</label>
            <div class='controls'>
                <input class='input-block' id='facebook_description' value='Bees in the trap' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
    </div><!--/.span4-->

    <div class='span3'>
        <div class="lead">
            <i class="icon-twitter text-primary"></i>
            {{ trans('brand.brand_table_titlet') }}
        </div><!--/.lead-->

        <div class='control-group'>
            <label class='control-label'>Twitter Username</label>
            <div class='controls'>
                <input class='input-block' id='twitter_username' value='bob123' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Twitter URL</label>
            <div class='controls'>
                <input class='input-block' id='twitter_url' value='twitter.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Twitter Image</label>
            <div class='controls'>
                <input class='input-block' id='twitter_image' value='facebook.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Twitter Description</label>
            <div class='controls'>
                <input class='input-block' id='twitter_description' value='Tweeting about Bees' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
    </div><!--/.span4-->

    <div class='span3'>
        <div class="lead">
            <i class="icon-google-plus text-primary"></i>
           {{ trans('brand.brand_table_titleg') }}
        </div><!--/.lead-->

        <div class='control-group'>
            <label class='control-label'>Google Username</label>
            <div class='controls'>
                <input class='input-block' id='google_username' value='bob123' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Google URL</label>
            <div class='controls'>
                <input class='input-block' id='google_url' value='google.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Google Image</label>
            <div class='controls'>
                <input class='input-block' id='google_image' value='google.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>Google Description</label>
            <div class='controls'>
                <input class='input-block' id='google_description' value='Talking about some bees' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
    </div><!--/.span4-->

    <div class='span3'>
        <div class="lead">
            <i class="icon-google-plus text-primary"></i>
            {{ trans('brand.brand_table_titlel') }}
        </div><!--/.lead-->

        <div class='control-group'>
            <label class='control-label'>LinkedIn Username</label>
            <div class='controls'>
                <input class='input-block' id='linkedin_username' value='bob123' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>LinkedIn URL</label>
            <div class='controls'>
                <input class='input-block' id='linkedin_url' value='linkedin.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>LinkedIn Image</label>
            <div class='controls'>
                <input class='input-block' id='linkedin_image' value='linkedin.com/asdfas' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
        <div class='control-group'>
            <label class='control-label'>LinkedIn Description</label>
            <div class='controls'>
                <input class='input-block' id='linkedin_description' value='Professional Bee Keeper' type='text'>
            </div><!--/.controls-->
        </div><!--/.control-group-->
    </div><!--/.span4-->
</fieldset>
<hr class='hr-double'>
<fieldset>
    <div class='span8'>
        <div class="lead">
            <i class="icon-briefcase text-info"></i>
            Team Members
        </div><!--/.lead-->
        {{ Form::open(array('class' => 'form','url' => AdminURL::route('brand.postgroupadd', $brand->id), 'id' => 'group-add-action'))  }}
        <div class='control-group add-member'>
            <select name='user_id' class='select2 input-large'>
                <option value='0' disabled selected style='display:none;'>Select User</option>
                @foreach($userList as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>


            <select name='group_id' class='select input-medium'>
                <option value='0' disabled selected style='display:none;'>Select Group</option>
                @foreach($groupList as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach

            </select>


            <button class="btn btn-primary" type="submit"><i class='icon-plus'> </i> Add to Brand</button>
        </div><!--/.control-group-->
        {{ Form::close() }}


        <table class='table table-bordered table-striped' style='margin-bottom:0;'>
            <thead>
            <tr>
                <th>
                    {{ trans('brand.brand_label_user') }}
                </th>
                <th>
                    {{ trans('brand.brand_label_group') }}
                </th>
                <th>
                    {{ trans('brand.brand_label_action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($brandUsers as $key => $value)
            <tr>
                <td data-title='User'>{{ $key }}</td>
                <td></td>
                <td></td>
            <tr>
            @foreach($value->group_list as $vkey => $v)
                <td></td>
                <td data-title='Group'>{{ $vkey }}</td>
                <td data-title='Actions'>
<!--                    <a class='btn btn-mini' href='#modal-edit-group' data-toggle='modal' role='button'>-->
<!--                        <i class='icon-edit'> </i>Change Group-->
<!--                    </a>-->
                    <button class='btn btn-danger btn-mini leave-group-btn' data-group-meta="{{ base64_encode(json_encode(array('user_id' => $value->id, 'brand_id' => $brand->id, 'group_id' => $v->id))) }}">
                        <i class='icon-remove'> </i>Remove from Group
                    </button>
                </td>
            </tr>
            @endforeach
            @endforeach
            </tbody>
        </table>

    </div><!--/.span8-->


</fieldset>
<hr class='hr-double'>
<fieldset>

    <div class='span8'>
        <div class="lead">
            <i class="icon-tags text-info"></i>
            Assigned Values
        </div><!--/.lead-->


        <table class='table table-bordered table-striped' style='margin-bottom:0;'>
            <thead>
            <tr>

                <th>
                    {{ trans('brand.brand_label_id') }}
                </th>

                <th>
                    {{ trans('brand.brand_label_type') }}
                </th>


                <th>
                    {{ trans('brand.brand_label_value') }}Value
                </th>

                <th>
                    {{ trans('brand.brand_label_customgrp') }}
                </th>

                <th>
                    {{ trans('brand.brand_label_action') }}
                </th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-title='ID'>1</td>
                <td data-title='Type'>Entity</td>
                <td data-title='Value'>Business</td>
                <td data-title='Consumer Group'>Global</td>

                <td data-title='Actions'>
                    <a class='btn btn-danger btn-mini' href='#'>
                        <i class='icon-remove'> </i>Remove from Company
                    </a>
                </td>
            </tr>


            </tbody>
        </table>

    </div><!--/.span8-->




</fieldset>

<div class='form-actions' style='margin-bottom: 0;'>
    <div class='text-right'>
        <div class='btn btn-default btn-large'>
            <i class='icon-arrow-left'></i>
            Go Back to Companies
        </div>

        <button class='btn btn-primary btn-large submit-form' rel='brand-default'>
            <i class='icon-save'></i>
            Save All Changes
        </button>
    </div>
</div><!--/.form-actions-->

</div><!--/.box-content-->
</div><!--/.span8 box-->
</div><!--/.row-fluid-->

</div><!--/.span12-->


<div class='modal hide fade' id='modal-edit-group' role='dialog' tabindex='-1'>
    <div class='modal-header red-background'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>Change Company Group</h3>
    </div><!--/.modal-header-->
    <div class='modal-body'>
        <form class='span10'>
            <h4>Choose different group in Home Depot</h4>

            <div class='control-group'>
                <label class='control-label'>Select Group</label><p class='help-block'>
                <div class='controls'>
                    <select id="brand_group" class="select input-block-level" name="blacklist_type">

                        <option selected value='email'>Executive</option>
                        <option value='ip'>Employee</option>
                    </select>
                </div><!--/.controls-->
            </div><!--/.control-group-->


        </form>

    </div><!--/.modal-body-->

    <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal'>Cancel</button>
        <button class='btn btn-default btn-primary'><i class='icon-save'> </i>Change Group</button>
    </div><!--/.modal-footer-->
</div><!--/.modal hide fade-->



</div><!--/.row-fluid #content-wrapper-->

@stop

@section('inline_scripts')
@parent

$('.uploader').live('change', function(e){
    var uploader = $(e.currentTarget),
    container = uploader.parent(),
    form = $('#brand-action-attachment')

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

$('.leave-group-btn').click(function(){
    var brand_id = "{{ $brand->id }}"
    var target = $(this).attr('id');
    var redirect = "{{ Request::url() }}";
    var data = $(this).data();
    var confirmed = confirm('Are you sure you want to remove this group?');

    if(confirmed === true) {
        $.ajax({
            type: "DELETE",
            url: "{{ AdminURL::route('brand.deletegroupremove') }}",
            data: { _token: "{{ Session::get('_token') }}", payload: data.groupMeta }
        }).done(function(data){
            console.log('complete!');
            window.location.href=redirect;
        }).fail(function(){
            console.log('failed :(');
            window.location.href=redirect;
        });
    }
});

@stop
