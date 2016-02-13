<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	static $init = false;

	/**
	 * Creates the application.
	 *
	 * @return Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		$app = require __DIR__.'/../../bootstrap/start.php';

		// Enable the route filters
		$app['router']->enableFilters();

		// Setup acl
		Acl::setup(Config::get('acl::acl'));

		return $app;
	}

	/**
	 * Set binded application request session
	 */
	public function setAppSession($key = '', $value = null)
	{
		if (empty($this->app)) $this->setUp();
		
		$this->app['session']->set($key, $value);
	}

	/**
	 * Get a new HttpKernel client instance.
	 *
	 * @param  array  $server
	 * @return \Symfony\Component\HttpKernel\Client
	 */
	public function getClient(array $server = array())
	{
		if (empty($this->app)) $this->setUp();

		// Setup acl
		Acl::setup(Config::get('acl::acl'));

		return new TestClient($this->app, $server);
	}

}
