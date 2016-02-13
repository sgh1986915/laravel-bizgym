 <?php

/**
 * Admin Categories controller
 *
 * 
 */

class AdminCategoriesController extends BaseController 
{

	protected $adminCategories;

	public function __construct(){

		$this->adminCategories=Forum::adminCategories();
		
	}

	//get the Categories

	public function actionIndex(){
		return $this->adminCategories->get_index();
	}

	//get the form to create new category
	public function actionNew(){

		return $this->adminCategories->get_new();
	}

	//Create new Category

	public function actionPosNew(){

		return $this->adminCategories->post_new();
	}

	//get the form to update the category
	public function actionEdit($category_slug){
		return $this->adminCategories->get_edit($category_slug);
	}

	//Update a category 
	public function actionPostEdit(){

		$category_slug=Input::get('category_slug');
		return $this->adminCategories->post_edit($category_slug);
	}

	//Delete Category
	public function actionDelete($category_slug){

		return $this->adminCategories->get_delete($category_slug);
	}

	//Get the roles for Category

	public function actionRoles($category_slug){

		return $this->adminCategories->get_roles($category_slug);
	}

	//Add new Role
	public function actionRolesAdd(){

		$category_slug=Input::get('category_slug');
		return $this->adminCategories->post_roles_add($category_slug);
	}

	//Remove Role
	public function actionRolesRemove(){

		$category_slug=Input::get('category_slug');
		return $this->adminCategories->post_roles_remove($category_slug);

	}
}