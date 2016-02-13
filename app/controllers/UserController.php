<?php

use Saas\Acl\Annotations\AclMap;
use Saas\Message\Models\Inbox;
use Carbon\Carbon;

/**
 * User controller
 *
 * @AclMap(name="user")
 */

class UserController extends BaseController
{
	/**
	 * Detail
	 *
	 * @AclMap(name="user_detail",config={"except":"banned"},insufficient_message="acl.banned")
	 */
	public function getDetail($id = 0) 
	{
		$user = User::find($id);

		if ( ! $user) App::abort(404);

        $brands = Groups::getRelationProvider()->findUserBrands($user->id, true);

		$this->viewData = array(
			'title' => $user->getFullname(),
			'user' => $user,
            'brands' => $brands,
		);

		$this->layout = 'user.detail';
		$this->setupLayout();
	}

	/**
	 * Profile
	 *
	 * @AclMap(name="user_profile",config={"except":"banned,guest"},
     * insufficient_message="acl.login",
     * redirect={"type":"to","path":"/auth/login"})
	 */
	public function getProfile() 
	{
		$user = Auth::user();

		if ( ! $user) App::abort(404);

		return $this->getDetail($user->id);
	}

    /**
     * Profile Edit
     *
     * @AclMap(name="user_profile_edit",
     * config={"except":"banned,guest"},
     * insufficient_message="acl.login",
     * redirect={"type":"to","path":"/auth/login"})
     */
	public function getProfileEdit()
    {
        $user_from_auth = Auth::user();
        if (!$user_from_auth) App::abort(404);

        $user = User::find((int) $user_from_auth->id);
        if (!$user) App::abort(404);

        $brands = Groups::getRelationProvider()->findUserBrands($user->id, true);

        $this->viewData = array(
            'title' => 'Edit Your profile',
            'user' => $user,
            'brands' => $brands,
        );

        $this->layout = 'user.update';
        $this->setupLayout();
    }

    /**
     * Profile Edit
     *
     * @AclMap(name="user_profile_edit",config={"except":"banned,guest"},insufficient_message="acl.login")
     */
    public function postProfileEdit()
    {
        $user_from_auth = Auth::user();
        if (!$user_from_auth) App::abort(404);

        $user = User::find((int) $user_from_auth->id);
        if (!$user) App::abort(404);

        $metadata = $user->metas()->first();

        $fields = Input::all();

        $rules = array(
            array(
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:users,email,'.$user->id,
            ),
            array('password_confirm' => 'required_with:password|same:password'),
            array(
                'meta_username' => "required|unique:user_meta,username,$metadata->id",
            ),
        );

        foreach($rules as $key => $rule) {
            $v = Validator::make($fields, $rule);
            if($v->fails()) {
                return Redirect::to('user/profile/edit')->withErrors($v)->withInput(Input::except('password', 'password_confirm'));
            }
        }

        //Regular user data first
        $user->first_name = $fields['first_name'];
        $user->last_name = $fields['last_name'];
        $user->email = $fields['email'];
        $user->save();

        //Change password
        if(!empty($fields['password'])) {
            $code = $user->getResetPasswordCode();
            $user->attemptResetPassword($code, $fields['password']);
        }

        $metadata->username = $fields['meta_username'];
        $metadata->location = $fields['meta_location'];
        $metadata->website = $fields['meta_location'];
        $metadata->title = $fields['meta_title'];
        $metadata->bio = $fields['meta_bio'];
        $metadata->save();

        return Redirect::to('user/profile')->with('message', 'Updated Profile');
    }

	/**
	 * Message
	 *
	 * @AclMap(name="user_message",config={"except":"banned,guest"},insufficient_message="acl.banned")
	 */
	public function getMessage() 
	{
		$user = Auth::user();

		if ( ! $user) App::abort(404);

		$this->viewData = array(
			'title' => 'Message',
			'user' => $user,
		);

		$this->layout = 'user.message.overview';
		$this->setupLayout();
	}

	/**
	 * Message Compose
	 *
	 * @AclMap(name="user_message_compose",config={"except":"banned,guest"},insufficient_message="acl.banned")
	 */
	public function getMessageCompose() 
	{
		$user = Auth::user();

		if ( ! $user) App::abort(404);

		$this->viewData = array(
			'title' => 'Message',
			'user' => $user,
		);

		$this->layout = 'user.message.compose';
		$this->setupLayout();
	}

	/**
	 * Message Sending
	 *
	 * @AclMap(name="user_message_send",config={"except":"banned,guest"},insufficient_message="acl.banned")
	 */
	public function postMessageSend() 
	{
		$user = Auth::user();

		if ( ! $user) App::abort(404);

		if (Input::has('parent_id')) {
			// This is a reply, so we're get other info from that
			$parent = Inbox::find(Input::get('parent_id'));


			// Check wheter this is several level conversation
			if ($parent->from_user == Auth::user()->id) {
				$sender = Auth::user()->id;
				$receiver = $parent->to_user;
			} else {
				$sender = $parent->to_user;
				$receiver = $parent->from_user;
			}

			// Check the subject
			if (stripos($parent->subject, 're :') !== 0) {
				$subject = 'Re : '.$parent->subject;
			} else {
				$subject = $parent->subject;
			}

			$fields = array(
				'from_user'	 =>	$sender,
				'to_user'	 =>	$receiver,
				'subject'	 =>	$subject,
				'body'		 =>	htmlentities(Input::get('body')),
				'created_at' => new Carbon,
			);
		} else {
			$fields = array(
				'from_user'	 =>	Auth::user()->id,
				'to_user'	 =>	Input::get('to'),
				'subject'	 =>	Input::get('subject'),
				'body'		 =>	htmlentities(Input::get('body')),
				'created_at' => new Carbon,
			);
		}
		

		$outbox = Inbox::create($fields);

		if(Input::get('detail'))
		{
			return Redirect::to('user/message-detail?id='.$outbox->id);
		}

		return Redirect::to('user/message');
	}

	/**
	 * Message Sent
	 *
	 * @AclMap(name="user_message_sent",config={"except":"banned,guest"},insufficient_message="acl.banned")
	 */
	public function getMessageSent() 
	{
		$user = Auth::user();

		if ( ! $user) App::abort(404);

		$this->viewData = array(
			'title' => 'Message',
			'user' => $user,
		);

		$this->layout = 'user.message.sent';
		$this->setupLayout();
	}


	/**
	 * Message Hide
	 *
	 * @AclMap(name="user_message_hide",config={"except":"banned,guest"},insufficient_message="acl.banned")
	 */
	public function getMessageHide() 
	{
		$user = Auth::user();
		$selected = Inbox::find(Input::get('id'));

		if ( ! $user || ! $selected) App::abort(404);

		if (Input::has('delete')) {
			$selected->from_user_delete_status = 1;
		} else {
			$selected->to_user_delete_status = 1;
		}
		$selected->save();

		return Redirect::back()->with('message', $selected->subject.' successfully deleted');
	}

	/**
	 * Message Detail
	 *
	 * @AclMap(name="user_message_detail",config={"except":"banned,guest"},insufficient_message="acl.banned")
	 */
	public function getMessageDetail() 
	{
		$user = Auth::user();
		$id = Input::get('id');
		$from = Input::get('from');

		$selected = Inbox::find($id);
		$selected->read_status = 0;
		$selected->save();

		if ( ! $user) App::abort(404);

		$this->viewData = array(
			'title' => 'Message',
			'user' => $user,
			'from' => $from,
			'id' => $id,
		);

		$this->layout = 'user.message.detail';
		$this->setupLayout();
	}

    /**
     * Brand Switch
     *
     * @AclMap(name="user_brand_switch",config={"except":"banned,guest"},insufficient_message="acl.login")
     */

    public function getBrandSwitch($id)
    {
        $user_from_auth = Auth::user();
        if (!$user_from_auth) App::abort(404);

        $user = User::find((int) $user_from_auth->id);
        if (!$user) App::abort(404);

        $status = $user->brandSwitch($id);

        if(!$status) {
            return Redirect::back()->with('errors', 'Unable to switch brand');
        }

        return Redirect::back()->with('message', 'Brand Switched');
    }

    /**
     * Brand Removal
     *
     * @AclMap(name="user_brand_removal",config={"except":"banned,guest"},insufficient_message="acl.login")
     */
    public function deleteBrandRemoval()
    {
        $user_from_auth = Auth::user();
        if (!$user_from_auth) App::abort(404);

        $user = User::find((int) $user_from_auth->id);
        if (!$user) App::abort(404);

        $brand_id = Input::get('brand_id');
        if(empty($brand_id)) {
            return Response::json(array('message' => 'Invalid brand.'));
        }

        $status = Groups::getRelationProvider()->removeUserFromBrand($user->id, $brand_id);
        $user->brandSwitch(0);

        return Response::json(array('message' => 'Removed from brand.'));
    }
}