<?php

use Saas\Log\Models\Log;

class AppWidget extends BaseWidget
{
	protected $asIs = true;

	public function userCounterStat()
	{
		$this->widgetData = array('count' => count(User::all()));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function companyCounterStat()
	{
		$this->widgetData = array('count' => count(Brand::all()));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function authorCounterStat()
	{
		$count = 0;
		$author = Group::where('name','LIKE','%uthor%')->first();

		if ($author) {
			$count = count($author->users);
		}

		$this->widgetData = array('count' => $count);
		$this->setupWidgetLayout(__METHOD__);
	}

	public function subscriberCounterStat()
	{
		$count = 0;
		$subscriber = Group::where('name','LIKE','%ubscrib%')->first();

		if ($subscriber) {
			$related = Groups::getRelationProvider()->createModel()->where('group_id', '=', $subscriber->id);
			$count = count($related->get());
		}

		$this->widgetData = array('count' => $count);
		$this->setupWidgetLayout(__METHOD__);
	}

	public function revenueChart()
	{
		$this->widgetData = array();
		$this->setupWidgetLayout(__METHOD__);
	}

	public function usageChart()
	{
		$this->widgetData = array();
		$this->setupWidgetLayout(__METHOD__);
	}

	public function recentActivityBox()
	{
		$this->widgetData = array('logs' => Log::orderBy('created_at', 'desc')->get());
		$this->setupWidgetLayout(__METHOD__);
	}

	public function recentUsersBox()
	{
		$logs = Log::with(array('metas' => function($query)
		{
		    $query->where('sub_type', '=', 'auth.login');
		}))->orderBy('created_at', 'desc')->get();

		$this->widgetData = compact('logs');
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userJoinStat($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userLastLoginStat($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userLoginCounterStat($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userRevenueStat($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userLogsBox($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userBadgesBox($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}

	public function userGroupBrandsBox($user_id = null)
	{
		$this->widgetData = array('user' => User::find($user_id));
		$this->setupWidgetLayout(__METHOD__);
	}
}