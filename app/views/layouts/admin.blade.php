@extends('layouts.dashboard')

@section('sidebar')
@include('layouts.partials.sidebar.admin')
@stop

@section('content')
<div class="row-fluid admin  @yield('admin_category')" id="content-wrapper">
<div class='span12'>
    <div class="row-fluid">
        <div class='page-header' style='margin-bottom:0px;'>
            <h3 class='pull-left'>
                <i class="icon-@yield('admin_icon')"></i>
                <span>@yield('admin_title')</span>
            </h3>

            <div class='pull-right'>
                @yield('admin_breadcrumb')
            </div><!--/.pull-right-->
        </div> <!--/.page-header-->
    </div> <!--/.row-fluid-->

    @yield('admin_content')
</div><!--/.span12-->
</div><!--/.row-fluid #content-wrapper-->
@stop

@section('inline_scripts')
@stop