<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'auth', 'prefix' => 'user/profile'), function()
{
    Route::post('edit', array('before' => 'csrf', 'uses' => 'UserController@postProfileEdit'));
    Route::get('edit', array('uses' => 'UserController@getProfileEdit'));
});

Route::get('/', 'HomeController@actionIndex');

/**
 * The following are temporary routes
 * Route::controller is evil.
 */

Route::group(array('before' => 'auth', 'prefix' => 'user/profile'), function()
{
    Route::put('edit', array('uses' => 'UserController@putProfileEdit'));
    Route::get('edit', array('uses' => 'UserController@getProfileEdit'));
});

Route::controller('user', 'UserController');
Route::controller('attachment', 'AttachmentController');
Route::get('/media/brand/{type}/{id}', array('uses'=>'AttachmentController@showBrandImage','as'=>'brand_media'));
Route::get('/media/user/{type}/{id}', array('uses'=>'AttachmentController@showUserImage','as'=>'user_media'));
Route::get('/media/message/{type}/{id}', array('uses'=>'AttachmentController@showMessageImage','as'=>'message_media'));

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Bellow is the routes group that used by authentification
|
*/
Route::get('/login', function(){
	return Redirect::route('auth_login');
});

Route::group(array('prefix' => 'auth'), function(){
	Route::any('connect/{provider}', array('as' => 'auth_connect', 'uses' =>'AuthController@actionConnect'));
	Route::any('disconnect/{provider}', array('as' => 'auth_disconnect', 'uses' =>'AuthController@actionDisconnect'));
	Route::any('login', array('as' => 'auth_login', 'uses' =>'AuthController@actionLogin'));
	Route::any('logout', array('as' => 'auth_logout', 'uses' =>'AuthController@actionLogout'));
	Route::any('register', array('as' => 'auth_register', 'uses' => 'AuthController@actionRegister'));
	Route::any('password_forgot', array('as' => 'auth_forgot', 'uses' =>'AuthController@actionForgot'));
	Route::any('password_confirm/{token}', array('as' => 'auth_reset', 'uses' =>'AuthController@actionReset'));
	Route::any('activate', array('as' => 'auth_activate', 'uses' =>'AuthController@actionActivate'));
	Route::any('activate_resend/{email}', array('as' => 'auth_activate_resend', 'uses' =>'AuthController@actionReactivate'));
});



	/**
 * | -----------------------------------
 * |    Forum
 * | -----------------------------------
 */

	
Route::group(array('before' => 'auth'), function(){

	Route::post('admin/forum/categories/(:any)/roles/remove', array('before' => 'csrf','as'=>'forumadmin.removerole', 'uses' => 'AdminCategoriesController@actionRolesRemove'));

	Route::post('admin/forum/categories/roles/add', array('before' => 'csrf','as'=>'forumadmin.addrole', 'uses' => 'AdminCategoriesController@actionRolesAdd'));

	Route::get('admin/forum/categories/{category_slug}/roles', array('uses' => 'AdminCategoriesController@actionRoles'));

	Route::get('admin/forum/categories/{category_slug}/delete', array('uses' => 'AdminCategoriesController@actionDelete'));

	Route::post('admin/forum/categories/edit', array('before' => 'csrf','as'=>'forumadmin.catedit', 'uses' => 'AdminCategoriesController@actionPostEdit'));

	Route::get('admin/forum/categories/{category_slug}/edit', array('uses' => 'AdminCategoriesController@actionEdit'));

	Route::post('admin/forum/categories/newcat', array('before' => 'csrf','as'=>'forumadmin.postcategory', 'uses' => 'AdminCategoriesController@actionPosNew'));

	Route::get('admin/forum/categories/new', array('uses' => 'AdminCategoriesController@actionNew'));

	Route::get('admin/forum/categories', array('uses' => 'AdminCategoriesController@actionIndex'));

	Route::get('admin/forum/tags/{tag_id}/delete', array('uses' => 'AdminTagsController@actionDelete'));

	Route::post('admin/forum/tags/edit', array('before' => 'csrf','as'=>'forumadmin.posttagedit', 'uses' => 'AdminTagsController@actionPostEdit'));
	Route::get('admin/forum/tags/{tag_id}/edit', array('uses' => 'AdminTagsController@actionEdit'));

	Route::post('admin/forum/tags/new', array('before' => 'csrf','as'=>'forumadmin.posttagnew', 'uses' =>'AdminTagsController@actionPostNew'));
	Route::get('admin/forum/tags/new', array('uses' => 'AdminTagsController@actionNew'));

	Route::get('admin/forum/tags', array('uses' => 'AdminTagsController@actionIndex'));

	Route::get('admin/forum', array('uses' => 'AdminForumController@actionIndex'));

});


Route::group(array('prefix' => 'forum'), function(){

	// View to public non-logged users
    Route::get('/','UserForumController@actionIndex');
    
	// Categories
	Route::group(array('before' => 'forum_permissions:can_view_category'), function(){

    Route::get('/{category_slug}/topic/{topic_slug}/report/{post_id}/{report_type}', array( 'uses' => 'UserPostController@actionReportPost'));
	Route::get('/{category_slug}/topic/{topic_slug}/post/{post_id}/delete', array('before' => 'has_access:is_admin', 'uses' => 'UserPostController@actionDeletePost'));
   	Route::get('/{category_slug}/topic/{topic_slug}/post/{post_id}/star', array( 'uses' => 'UserPostControllert@actionStar'));
	Route::get('/{category_slug}/topic/{topic_slug}/post/reply', array('before' => 'auth|forum_permissions:can_reply_topic', 'uses' => 'UserPostController@actionReply'));
    Route::get('/{category_slug}/topic/{topic_slug}/post', array('uses' => 'UserPostController@actionIndex'));
 	Route::post('/topic/new/', array('before' => 'auth|csrf|forum_permissions:can_post_topic', 'as'=>'forum.newtopic','uses' => 'UserTopicController@actionPostNewTopic'));
    
    Route::get('/{category_slug}/topic/new', array('before' => 'auth|forum_permissions:can_post_topic', 'uses' => 'UserTopicController@actionNewTopic'));
    Route::get('/{category_slug}/topic/{topic_slug}/report/{report_type}', array( 'uses' => 'UserTopicController@actionReportTopic'));
   	Route::get('/{category_slug}/topic/{topic_slug}/delete', array('before' => 'has_access:is_admin', 'uses' => 'UserTopicController@actionDeleteTopic'));
   	Route::get('/{category_slug}/topic/{topic_slug}/unfollow', array( 'uses' => 'UserTopicController@actionUnfollow'));
   	Route::get('/{category_slug}/topic/{topic_slug}/follow', array( 'uses' => 'UserTopicController@actionFollow'));
    Route::get('/{category_slug}/topic/{topic_slug}/star', array( 'uses' => 'UserTopicController@actionStar'));
    Route::get('/{category_slug}/topic/{topic_slug}', array( 'uses' => 'UserTopicController@actionView'));
	Route::get('/{category_slug}/topic', array('uses' => 'UserTopicController@actionIndex'));
    
    Route::get('/feature/{type}/{id}/{action}',array('uses' => 'UserForumController@actionFeatureProcess'));

    Route::post('/search', array('before' => 'csrf', 'as'=>'forum.search','uses' =>'UserForumController@actionPostSearch'));
   	Route::get('/search', array('uses' =>'UserForumController@actionSearch'));
	Route::get('/{category_slug}',array('uses' =>'UserForumController@actionCategory'));

	});
});

/*
|--------------------------------------------------------------------------
| Mockup Routes
|--------------------------------------------------------------------------
|
| Bellow is the routes group that used by mockup
|
*/

require app_path().'/mockup-route.php';
