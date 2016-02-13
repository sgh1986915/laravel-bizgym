@extends('layouts.admin')

@section('admin_icon', 'briefcase')

@section('admin_title', 'Brands')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
    <li>
        <i class='icon-briefcase'> </i>Brand
    </li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
    <div class='title'>
        {{ trans('brand.brand_title_brand') }}
    </div><!--/.title-->

    <div class='btn-group'>
        <a class='btn btn-default' role='button' href='/admin/brand/new'><i class='icon-magic'> </i>{{ trans('brand.brand_button_createbrand') }} </a>
    </div><!--/.btn-group-->
</div><!--/.row-fluid section-header-->
<div class='row-fluid' style='margin-bottom:2em;'>
    <div class='span12 box bordered-box purple-border' style=''>
        <div class='box-header muted-background'>
            <div class='title'>{{ trans('brand.brand_table_title') }}</div>
        </div><!--/.box-header-->
        <div class='box-content box-no-padding'>
            <table class='data-table brand-list table table-bordered table-striped' style='margin-bottom:0;'>
                <thead>
                <tr>
                    <th>{{ trans('brand.brand_label_logo') }}</th>
                    <th>{{ trans('brand.brand_label_name') }}</th>
                    <th>{{ trans('brand.brand_label_status') }}</th>
                    <th>{{ trans('brand.brand_label_visibility') }}</th>
                    <th>{{ trans('brand.brand_label_plan') }}</th>
                    <th>{{ trans('brand.brand_label_members') }}</th>
                    <th>{{ trans('brand.brand_label_owner') }}</th>
                    <th>{{ trans('brand.brand_label_action') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($brands as $brand)
                <tr>
                    <td data-title='Logo'><img src="/media/brand/logo/{{ $brand->id }}?size=small" /></td>
                    <td data-title='Name'>{{ $brand->title }}</td>
                    <td data-title='Status'>
                        @if($brand->status)
                            <span class='label label-success'>Active</span>
                        @else
                            <span class='label label-inverse'>Inactive</span>
                        @endif
                    </td>
                    <td data-title='Visibility'>
                        @if($brand->visibility)
                            <span>Visible</span>
                        @else
                            <span class='muted'>Hidden</span>
                        @endif
                    </td>
                    <td data-title='Plan'><span class='label label-inverse'>Pro</span></td>
                    <td data-title='Members'>42</td>
                    <td data-title='Owner'><a href='user-details'>Captain Planet</a></td>
                    <td data-title='Actions'>
                        <a class='btn btn-default btn-mini' href='/admin/brand/details/{{ $brand->id }}'>
                            {{ trans('brand.brand_button_overview') }}
                        </a>
                        <a class='btn btn-default btn-mini' href='/admin/brand/edit/{{ $brand->id }}'>
                            <i class='icon-edit'> </i>{{ trans('brand.brand_button_edit') }}
                        </a>
                        <a class='btn btn-default btn-mini' href='#' on_click="ajax_do('/admin/brand/delete/{{ $brand->id }}', 'DELETE')">
                            <i class='icon-remove'> </i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div><!--/.box-content-->
    </div><!--/.span12 box bordered-box-->
</div><!--/.row-fluid-->

@stop

@section('inline_scripts')

function ajax_do(uri, method)
{
    var redirect = "{{ Request::url() }}";

    var result = confirm("Are you sure?");

    if(result === true) {
        var full_uri = "{{ Request::root() }}" + uri;
        $.ajax({
            type: method,
            url: full_uri,
            data: { _token: "{{ Session::get('_token') }}" }
        }).done(function(){
            console.log('complete!');
            window.location.href=redirect;
        }).fail(function(){
            console.log('failed');
            window.location.href=redirect;
        });
    }
}
@stop