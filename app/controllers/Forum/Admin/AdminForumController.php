 <?php

/**
 * Admin Forum controller
 *
 * 
 */

class AdminForumController extends BaseController 
{

	protected $adminForum;

	public function __construct(){

		$this->adminForum=Forum::adminForum();
		
	}


	//get the Index page of the admin Forum
	public function actionIndex(){
		return $this->adminForum->get_index();
	}
}