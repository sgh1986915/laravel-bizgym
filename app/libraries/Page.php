<?php

class Page
{
	/**
	 * Check the active page
	 *
	 * @param string Route name
	 * @param mixed Return value if the condition match
	 * @param mixed Default value if the condition not match
	 * @return mixed
	 */
	public static function is($page = '', $retval = 'active', $default = '')
	{
		return (Route::currentRouteName() == $page) ? $retval : $default;
	}
}