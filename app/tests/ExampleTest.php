<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertInstanceOf('\Illuminate\Http\RedirectResponse', $this->client->getResponse());
	}

	/**
	 * A basic functional package test example
	 *
	 * @return void
	 */
	public function testBasicPackage()
	{
		// Acl package simple test
		Acl::setup(Config::get('acl::acl'));
		$this->assertFalse(Acl::isAllowed(array('guest'), 'admin_panel'));
		$this->assertFalse(Acl::isAllowed(array('user'), 'admin_panel'));
		$this->assertTrue(Acl::isAllowed(array('admin'), 'admin_panel'));

		// Here we could test other package facades for its basic functionalities...
	}

	/**
	 * A basic fixture test example
	 *
	 * @return void
	 */
	public function testBasicFixture()
	{
		$user = Sentry::findUserByLogin('superuser@saasventure.com');

		$this->assertEquals('Benevolent', $user->first_name);
		$this->assertEquals('Dictator', $user->last_name);

		$brand = Groups::getBrandProvider()->findByTitle('BizGym');
		$this->assertTrue(Groups::isAdmin($user->id, $brand->id));
	}

}