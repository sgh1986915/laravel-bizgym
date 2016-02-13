<?php

use Illuminate\Foundation\Testing\Client;

class StoryTestCase extends PHPUnit_Extensions_Story_TestCase
{
	public function runGiven(&$world, $action, $arguments)
	{
		switch($action) {
			case 'Our Application': 
				$testApp = new TestCase();
				$world['app'] = $testApp->getClient();
				break;
 
			default: 
				return $this->notImplemented($action);
		}
	}
 
	public function runWhen(&$world, $action, $arguments)
	{
		return $this->notImplemented($action);
	}
 
	public function runThen(&$world, $action, $arguments)
	{
		$message = array_shift($arguments);
		switch($action) {
			case 'Page should contains': 
				$crawler = $world['app']->request($world['method'], $world['url']);
				$this->assertInstanceOf('Symfony\Component\DomCrawler\Crawler', $crawler);
				$this->assertCount(1, $crawler->filter('body:contains("'.$message.'")'));
				break;

			case 'Error page should contains': 
				$error = null;
				try {
					$crawler = $world['app']->request($world['method'], $world['url']);
				} catch (Exception $e) {
					$error = trans($e->getMessage());
				}
				$this->assertContains($message, $error);
				break;
 
			default: 
				return $this->notImplemented($action);
		}
	}

	/**
	 * Helper method to set an ACL role into the scenario
	 *
	 * @param string role name
	 * @return Illuminate\Foundation\Testing\Client
	 */
	protected function getRequestForRole($role = '')
	{
		$testApp = new TestCase();
		$testApp->setAppSession('roles', array($role));
		return $testApp->getClient();
	}
}