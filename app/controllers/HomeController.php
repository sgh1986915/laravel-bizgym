<?php

use Saas\Acl\Annotations\AclMap;

/**
 * Home controller
 *
 * @AclMap(name="home")
 */

class HomeController extends BaseController 
{
	/**
	 * Default action route
	 *
	 * @AclMap(name="welcome_page",config={"except":"banned"},insufficient_message="acl.banned")
	 */
	public function actionIndex() 
	{
		if (Auth::check() || in_array('user', Session::get('roles'))) {
			$hello = 'You have arrived.';
		} else {
			return Redirect::route('auth_login');
		}
		
		$this->viewData = array(
			'title' => 'Home',
			'hello' => $hello
		);

		$this->setupLayout();
	}

}