<?php

use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller {

	/**
	 * @var array Data to be passed through layout
	 */
	protected $viewData = array();

	/**
	 * @var Response
	 */
	protected $earlyResponse = null;

	/**
	 * Constructor
	 *
	 * Here, we do two things :
	 *
	 *   1. Check for ACL annotations
	 *
	 *   2. Automatically assign corresponding layout.
	 *      Prototype : 
	 *         a. General action
	 *            HomeController@actionIndex    => ./views/home/index.blade.php
	 *            AuthController@actionRegister => ./views/auth/register.blade.php
	 *            ... and so on.
	 *         b. Action with sub-view 
	 *            AdminController@actionFooBar     => ./views/admin/foo/bar.blade.php
	 *            AdminController@actionLoremIpsum => ./views/admin/lorem/ipsum.blade.php
	 *            ... and so on.
	 *
	 */
	public function __construct()
	{
		$response = Acl::checkRuleFromControllerAnnotation(Route::currentRouteAction(), Session::get('roles'));

		if ($response instanceof Response) {
			$this->earlyResponse = $response;
		}

		list($module, $action) = explode('@', str_replace(array('Controller', 'action', 'get', 'post'),'',Route::currentRouteAction()));


		// Map-out necessary view
		$view = strtolower($action);
		for ($i=1; $i < strlen($action); $i++) { 
			if(ctype_upper($action[$i])) {
				$view = strtolower(substr($action, 0, 5));
				$view .= '.'.strtolower(substr($action, 5));
				break;
			}
		}

		$this->layout = strtolower($module).'.'.$view;
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		$this->yieldEarlyResponse();

		if ( ! is_null($this->layout) && ! empty($this->viewData))
		{
			$this->layout = View::make($this->layout, $this->viewData);
		}
	}

	/**
	 * Check wheter current flow has a response already
	 *
	 * @return bool
	 */
	public function hasEarlyResponse()
	{
		return !empty($this->earlyResponse) && $this->earlyResponse instanceof Response;
	}

	/**
	 * Output the early response
	 *
	 * @return Response
	 */
	public function yieldEarlyResponse()
	{
		if ($this->hasEarlyResponse()) $this->earlyResponse->send();
	}

}