<?php

/**
 *
 * Topic controller
 * 
 */

class UserTopicController extends BaseController 
{
	protected $userTopic;

	public function __construct(){

		$this->userTopic=Forum::userTopic();
		
	}

	public function actionIndex($category_slug){
		
		return $this->userTopic->get_index($category_slug);
	}

	public function actionView($category_slug, $topic_slug){
		
		return $this->userTopic->get_view($category_slug, $topic_slug);
	}

	public function actionNewTopic($category_slug){

		return $this->userTopic->get_new($category_slug);
	}

	public function actionPostNewTopic(){

		$category_slug = Input::get('category_slug');
		
		return $this->userTopic->post_new($category_slug);
	}


	public function actionStar($category_slug, $topic_slug){

		return $this->userTopic->get_star($category_slug, $topic_slug);
	}

	public function actionReportTopic($category_slug, $topic_slug, $report_type){

		return $this->userTopic->get_report_topic($category_slug, $topic_slug, $report_type);
	}

	public function actionDeleteTopic($category_slug, $topic_slug){

		return $this->userTopic->get_delete_topic($category_slug, $topic_slug);

	}

	public function actionUnfollow($category_slug, $topic_slug){

		return $this->userTopic->get_unfollow($category_slug, $topic_slug);
	}

	public function actionFollow($category_slug, $topic_slug){

		return $this->userTopic->get_follow($category_slug, $topic_slug);
	}

}