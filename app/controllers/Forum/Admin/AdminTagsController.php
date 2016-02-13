 <?php

/**
 * Admin Tags controller
 *
 * 
 */

class AdminTagsController extends BaseController 
{

	protected $adminTags;

	public function __construct(){

		$this->adminTags=Forum::adminTags();
		
	}


	//get the Index page of the admin Tags
	public function actionIndex(){
		
		return $this->adminTags->get_index();
	}

	//get the form to edit the tag

	public function actionEdit($tag_id){

		return $this->adminTags->get_edit($tag_id);
	}

	//post the new update 

	public function actionPostEdit(){

		$tag_id=Input::get('tag_id');
		return $this->adminTags->post_edit($tag_id);
	}

	//get the for to add new Tag

	public function actionNew(){

		return $this->adminTags->get_new();
	}

	//Create new tag
	public function actionPostNew(){
		return $this->adminTags->post_new();
	}

		//Delete tag 
	public function actionDelete($tag_id){
		
		return $this->adminTags->get_delete($tag_id);
	}
}