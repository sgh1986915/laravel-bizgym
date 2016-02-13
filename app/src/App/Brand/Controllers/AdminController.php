<?php

namespace App\Brand\Controllers;

use Saas\Admin\PackageController as BaseController;
use Saas\Groups\Groups\Eloquent\Group;
use Cartalyst\Sentry\Users;
use Illuminate\Support\Collection;
use \Brand as Brands;
use \User, \UserMeta, \Sentry, \Input, \Redirect, \Session, AccountMailer, \Validator, \Route, \Event, \Groups, \Response;

class AdminController extends BaseController
{
	public static $nick = 'brand';
	public static $type = self::REST;

	/**
	 * Overview
	 */
	public function getIndex()
	{
        $brands = Groups::getBrandProvider()->findAll();

		$this->viewData = array(
			'title' => 'Brand Panel',
			'brands' => $brands,
		);

		$this->setupLayout();
	}

    public function getDetails($id)
    {
        $brand = Brands::find((int) $id);

        if(empty($brand)) {
            return Redirect::to('admin/brand')->with('errors', 'Invalid Brand ID');
        }

        $this->viewData = array(
            'title' => 'Brand Panel - Details',
            'brand' => $brand,
        );

        $this->setupLayout();
    }

    public function getNew()
    {
        $this->viewData = array(
            'title' => 'Brand Panel - Create',
        );

        $this->setupLayout();
    }

    public function postNew()
    {
        $fields = array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'status' => Input::get('status'),
            'visibility' => Input::get('visibility'),
            'slug' => Input::get('slug'),
            'url' => Input::get('url'),
        );

        $rules = array(
            'title' => 'required|unique:brands,title',
            'slug' => 'required|unique:brands,slug',
        );

        $v = Validator::make($fields, $rules);

        if($v->fails()) {
            return Redirect::to('admin/brand/new')->withErrors($v)->withInput();
        }

        $brand = Groups::getBrandProvider()->create($fields);

        return Redirect::to('admin/brand')->with('message', 'Brand Created');
    }

    public function getEdit($id)
    {
        $brand = Brands::find((int) $id);

        if(empty($brand)) {
            return Redirect::to('admin/brand')->with('errors', 'Invalid Brand ID');
        }

        $users = array();
        foreach(User::all() as $key => $value) {
            $users[$value->id] = $value->getFullname();
        }

        $groups = array();
        foreach(\Saas\Groups\Groups\Eloquent\Group::all() as $group) {
            $groups[$group->id] = $group->name;
        }

        $brandUsers = Groups::getRelationProvider()->findBrandUsers($brand->id);

        $this->viewData = array(
            'title' => 'Brand Panel - Update',
            'brand' => $brand,
            'userList' => $users,
            'groupList' => $groups,
            'brandUsers' => $brandUsers,
        );

        $this->setupLayout();
    }

    public function putEdit($id)
    {
        $brand = Brands::find((int) $id);

        if(empty($brand)) {
            return Redirect::to('admin/brand')->with('errors', 'Invalid Brand ID');
        }

        $fields = array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'status' => Input::get('status'),
            'visibility' => Input::get('visibility'),
            'slug' => Input::get('slug'),
            'url' => Input::get('url'),
        );

        $rules = array(
            'title' => "required|unique:brands,title,{$id}",
            'slug' => "required|unique:brands,slug,{$id}",
        );

        $v = Validator::make($fields, $rules);

        if($v->fails()) {
            return Redirect::to("admin/brand/edit/{$id}")->withErrors($v)->withInput();
        }

        $brand->fill($fields);
        $brand->save();

        return Redirect::to('admin/brand')->with('message', 'Brand Updated');
    }

    public function postGroupAdd($id)
    {
        $fields = array(
            'brand_id' => $id,
            'group_id' => Input::get('group_id'),
            'user_id' => Input::get('user_id'),
        );
        $rules = array(
            'brand_id' => 'required',
            'group_id' => 'required',
            'user_id' => 'required',
        );

        $v = Validator::make($fields, $rules);
        if($v->fails()) {
            return Redirect::to("/admin/brand/edit/{$id}")->withErrors($v);
        }

        $result = Groups::getRelationProvider()->addUserToBrandGroup($fields['user_id'], $fields['brand_id'], $fields['group_id']);

        return Redirect::to("/admin/brand/edit/{$id}")->with('message', 'Group added');
    }

    public function deleteGroupRemove()
    {
        $fields = json_decode(base64_decode(Input::get('payload')), true);
        $rules = array(
            'brand_id' => 'required',
            'group_id' => 'required',
            'user_id' => 'required',
        );

        $v = Validator::make($fields, $rules);
        if($v->fails()) {
            return Response::json(array('message' => 'Failed!'));
        }

        $result = Groups::getRelationProvider()->removeUserFromBrandGroup($fields['user_id'], $fields['brand_id'], $fields['group_id']);

        return Response::json(array('message' => 'Group removed'));
    }

}