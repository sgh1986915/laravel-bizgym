<?php

/**
 * Forum controller
 *
 * 
 */

class UserForumController extends BaseController 
{
	protected $userForum;

	public function __construct(){

		$this->userForum=Forum::userForum();
		
	}
	public function actionIndex(){

		return $this->userForum->get_index();
	}

	public function actionCategory($id){

		return $this->userForum->get_category($id);
	}

	//Return the search Form
	public function actionSearch(){
		
		return $this->userForum->get_search();
	}

	public function actionPostSearch(){

		return $this->userForum->post_search();

	}
	
	public function actionFeatureProcess($type, $id, $action){

		return $this->userForum->get_feature_process($type, $id, $action);

	}


}