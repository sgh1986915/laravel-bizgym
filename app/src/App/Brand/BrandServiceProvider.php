<?php namespace App\Brand;

use Illuminate\Support\ServiceProvider;

class BrandServiceProvider extends ServiceProvider {

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
		$this->package('app/brand');
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
		return array('brand');
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

				// Brand sidebar start
				'url' => '#',
				'label' => 'Brands',
				'icon' => 'briefcase',
				'data' => array(
					// Main overview
					array(
						'admin_route' => 'brand.getindex',
						'admin_label' => 'Overview',
						'icon' => 'caret-right',
						'childs' => array(),
					),
				),
			),
		);
	}

}