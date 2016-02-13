<?php namespace App\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('app/user');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('user');
	}

	/**
	 * Get all menu provided by the provider.
	 *
	 * @return array
	 */
	public function providesMenu()
	{
		return array(
			'sidebar' => array(

				// User sidebar start
				'url' => '#',
				'label' => 'User',
				'icon' => 'user',             
				'data' => array(
					// Main overview
					array(
						'admin_route' => 'user.getindex',
						'admin_label' => 'Overview',
						'icon' => 'caret-right',
						'childs' => array()
					),

					// Suspended overview
					array(
						'admin_route' => 'user.getsuspended',
						'admin_label' => 'Suspended',
						'icon' => 'caret-right',
						'childs' => array()
					),

					// Banned overview
					array(
						'admin_route' => 'user.getbanned',
						'admin_label' => 'Banned',
						'icon' => 'caret-right',
						'childs' => array()
					),
				)
				// User sidebar end

			)
		);
	}

}