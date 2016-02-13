<?php

/**
 * Post controller
 *
 * 
 */

class UserPostController extends BaseController 
{
	protected $userPost;

	public function __construct(){

		$this->userPost=Forum::userPost();
		
	}


	public function actionIndex($category_slug, $topic_slug){

		return $this->userPost->get_index($category_slug, $topic_slug);
	}


	public function actionDeletePost($category_slug, $topic_slug, $post_id){
		
		return $this->userPost->get_delete_post($category_slug, $topic_slug, $post_id);

	}

	public function actionStar($category_slug, $topic_slug, $post_id){

		return $this->userPost->get_star($category_slug, $topic_slug, $post_id);
	}

	public function actionReportPost($category_slug, $topic_slug, $post_id, $report_type = 'spam'){

		return $this->userPost->get_report_post($category_slug, $topic_slug, $post_id, $report_type = 'spam');
	}

	public function actionPostReply(){

		$category_slug = Input::get('category_slug');

		$topic_slug = Input::get('topic_slug');
		
		return $this->userPost->post_reply($category_slug, $topic_slug);

	}


	public function actionReply($category_slug, $topic_slug){

		return $this->userPost->get_reply($category_slug, $topic_slug);

	}
}