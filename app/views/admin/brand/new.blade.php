@extends('layouts.admin')

@section('admin_icon', 'briefcase')

@section('admin_category', 'brand')

@section('admin_title', 'Create Brand')

@section('admin_breadcrumb')
<ul class='breadcrumb'>
    <li>
        <a href="{{ AdminURL::route('brand.getindex') }}"><i class='icon-briefcase'> </i>Brand</a>
    </li>
    <li class='separator'>
        <i class='icon-angle-right'></i>
    </li>
    <li>
        New
    </li>
</ul>
@stop

@section('admin_content')
<div class='row-fluid section-header'>
    <div class='title'>
        {{ trans('brand.brand_title_create_brand') }}
    </div><!--/.title-->

    <div class='btn-group'>
        <a class='btn btn-default' role='button' href="{{ AdminURL::route('brand.getindex') }}">{{ trans('brand.brand_button_back') }}</a>
    </div><!--/.btn-group-->

</div><!--/.row-fluid section-header-->

<div class='row-fluid'>
    <div class='span12 box'>
        <div class='box-content'>
            {{ Form::open(array('url' => 'admin/brand/new', 'method' => 'post')) }}
            {{ Form::token() }}
                <fieldset>
                    <div class='span7'>
                        <div class="lead">
                            <i class="icon-briefcase text-contrast"></i>
                            {{ trans('brand.brand_form_title') }}
                        </div><!--/.lead-->
                        
                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_primary') }}</label>
                            <div class='controls'>
                                <input class='span9' name='location' id='brand_location' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_company') }}</label>
                            <div class='controls'>
                                <input class='span9' name='title' id='brand_name' placeholder='Ex: BizGym' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_url') }}</label><p class='help-block'>Choose a permalink for this company, similar to a username.</p>
                            <div class='controls'>
                                <input class='span9' name='slug' id='brand_url' placeholder='yourbrand' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->

                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_website') }}</label><p class='help-block'>Does your company have a website? Add it here. </p>
                            <div class='controls'>
                                <input class='span9' name='url' id='brand_website' placeholder='http://bobsbeestore.com' type='text'>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->


                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_desc') }}</label>
                            <div class='controls'>
                                <textarea class='input-block-level' name='description' placeholder='My brand sells this and that' rows='4'></textarea>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->


                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_status') }}</label><p class='help-block'>Is this company active in the system?</p>
                            <div class='controls'>
                                <select name="status" class='input-large'>
                                    <option value='1'>Active</option>
                                    <option value='0'>In-Active</option>
                                </select>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->


                        <div class='control-group'>
                            <label class='control-label'>{{ trans('brand.brand_label_visibility') }}</label><p class='help-block'>Is this company visible to outsiders?</p>
                            <div class='controls'>
                                <select name="visibility" class='input-large'>
                                    <option value='1'>Visible</option>
                                    <option value='0'>Hidden</option>
                                </select>
                            </div><!--/.controls-->
                        </div><!--/.control-group-->
                    </div><!--/.span7-->

                </fieldset>
                <hr class='hr-double'>
                <fieldset>
                    <div class='span8'>
                        <div class="lead">
                            <i class="icon-briefcase text-info"></i>
                            {{ trans('brand.brand_form_title1') }}
                        </div><!--/.lead-->
                        <div class='control-group add-member'>
                            <select class='select2 input-large'>
                                <option value='0' disabled selected style='display:none;'>Select User</option>
                                <option>User 1</option>
                                <option>User 2</option>
                                <option>User 3</option>
                                <option>User 4</option>
                                <option>User 5</option>
                            </select>
                            <select class='select input-medium'>
                                <option value='0' disabled selected style='display:none;'>Select Group</option>
                                <option>Executive</option>
                                <option>Owner</option>
                                <option>Employee</option>
                            </select>

                            <button class="btn btn-primary" type="button"><i class='icon-plus'> </i> {{ trans('brand.brand_button_addgrp') }}</button>
                        </div><!--/.control-group-->


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
                            <tr>
                                <td data-title='User'>Bill Davis</td>
                                <td data-title='Group'>Executive</td>



                                <td data-title='Actions'>

                                    <a class='btn btn-mini' href='#modal-edit-group' data-toggle='modal' role='button'>
                                        <i class='icon-edit'> </i>{{ trans('brand.brand_button_changegrp') }}
                                    </a>


                                    <a class='btn btn-danger btn-mini' href='#'>
                                        <i class='icon-remove'> </i>{{ trans('brand.brand_button_removecompany') }}
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
                            {{ trans('brand.brand_button_backcompany') }}
                        </div>

                        <button type='submit' class='btn btn-primary btn-large'>
                            <i class='icon-save'></i>
                            {{ trans('brand.brand_button_savechange') }}
                        </button>
                    </div>
                </div><!--/.form-actions-->

            {{ Form::close() }}
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
            <h4>Choose different group in Bob's Bee Store</h4>

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