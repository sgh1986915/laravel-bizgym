<?php
 
class HomeSpec extends StoryTestCase
{
	/**
	 * @scenario
	 * @see ./app/controllers/HomeController.php
	 * @see ./app/lang/en/acl.php
	 */
	public function indexShouldUnreachableFromBannedUser()
	{
		$this->given('Our Application')
			 ->when('Banned user make regular http request', 'GET')
			 ->and('Visiting home page', '/')
			 ->then('Error page should contains', 'You are banned from this site!');
	}
	
	/**
	 * @scenario
	 */
	public function indexShouldShowWelcomePage()
	{
		$this->given('Our Application')
			 ->when('Normal user make regular http request', 'GET')
			 ->and('Visiting home page', '/')
			 ->then('Page should contains', 'You have arrived');
	}

	public function runWhen(&$world, $action, $arguments)
	{
		switch($action) {
			case 'Banned user make regular http request': 
				$world['app'] = $this->getRequestForRole('banned');
				$world['method'] = array_shift($arguments);
				break;

			case 'Normal user make regular http request': 
				$world['app'] = $this->getRequestForRole('user');
				$world['method'] = array_shift($arguments);
				break;

			case 'Visiting home page': 
				$world['url'] = array_shift($arguments);
				break;
 
			default: 
				return $this->notImplemented($action);
		}
	}
}