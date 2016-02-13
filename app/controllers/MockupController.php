<?php

/**
 * Mockup controller
 */

class MockupController extends BaseController 
{
	

	/**
	 * Main Dashboard Route
	 */
	public function actionSignIn() 
	{
		$viewData = array(
			'title' => 'Sign In',
			'some_key' => 'Sign In'
		);

		return View::make('mockup.sign-in', $viewData);
	}


	/**
	 * Main Dashboard Route
	 */
	public function actionRegister() 
	{
		$viewData = array(
			'title' => 'Register',
			'some_key' => 'Registration'
		);

		return View::make('mockup.register', $viewData);
	}


	/**
	 * Main Dashboard Route
	 */
	public function actionIntake() 
	{
		$viewData = array(
			'title' => 'Intake',
			'some_key' => 'Intake Form'
		);

		return View::make('mockup.intake', $viewData);
	}



	/**
	 * Main Dashboard Route
	 */
	public function actionDashboard() 
	{
		$viewData = array(
			'title' => 'Your Dashboard',
			'some_key' => 'Dashboard'
		);

		return View::make('mockup.dashboard', $viewData);
	}



	public function actionExample() 
	{
		$this->viewData = array(
			'title' => 'Example Title',
			'some_key' => 'Example Content.'
		);

		$this->setupLayout();
	}

	/**
	 * Example action route
	 */
	public function actionRobTest() 
	{
		$viewData = array(
			'title' => 'Example Title',
			'some_key' => 'Example Content.'
		);

		return View::make('mockup.rob.test', $viewData);
	}

	/**
	 * Example action route
	 */
	public function ActionVision() 
	{
		$viewData = array(
			'title' => 'Vision Dashboard',
			'some_key' => 'Vision Content.'
		);

		return View::make('mockup.vision.vision-dashboard', $viewData);
	}


	/**
	 * Vision/Funding/Done route
	 */
	public function actionFundingBlank() 
	{
		$viewData = array(
			'title' => 'Funding',
			'some_key' => 'Funding Blank.'
		);

		return View::make('mockup.vision.funding.blank', $viewData);
	}

	/**
	 * Vision/Funding/Done route
	 */
	public function actionFundingDone() 
	{
		$viewData = array(
			'title' => 'Funding',
			'some_key' => 'Funding Content.'
		);

		return View::make('mockup.vision.funding.done', $viewData);
	}


	/**
	 * Vision/Funding/Done route
	 */
	public function actionFundingCreate() 
	{
		$viewData = array(
			'title' => 'Funding',
			'some_key' => 'Funding Content.'
		);

		return View::make('mockup.vision.funding.create', $viewData);
	}


	/**
	 * Vision/Operations/Blank route
	 */
	public function actionOperationsBlank() 
	{
		$viewData = array(
			'title' => 'Operations',
			'some_key' => 'Operations Content.'
		);

		return View::make('mockup.vision.operations.blank', $viewData);
	}



	/**
	 * Vision/Operations/Done route
	 */
	public function actionOperationsDone() 
	{
		$viewData = array(
			'title' => 'Operations',
			'some_key' => 'Operations Content.'
		);

		return View::make('mockup.vision.operations.done', $viewData);
	}




	/**
	 * Vision/Operations/Overview route
	 */
	public function actionOperationsOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Operations',
			'some_key' => 'Operations Content.'
		);

		return View::make('mockup.vision.operations.overview-create', $viewData);
	}


	/**
	 * Vision/Operations/Overview route
	 */
	public function actionOperationsProfileCreate() 
	{
		$viewData = array(
			'title' => 'Operations',
			'some_key' => 'Operations Content.'
		);

		return View::make('mockup.vision.operations.profile-create', $viewData);
	}


	/**
	 * Vision/Company Overiew route
	 */
	public function actionCoOverviewBlank() 
	{
		$viewData = array(
			'title' => 'Company Overview',
			'some_key' => 'Company Overview Content.'
		);

		return View::make('mockup.vision.company-overview.blank', $viewData);
	}


	/**
	 * Vision/Company Overiew route
	 */
	public function actionCoOverviewDone() 
	{
		$viewData = array(
			'title' => 'Company Overview',
			'some_key' => 'Company Overview Content.'
		);

		return View::make('mockup.vision.company-overview.done', $viewData);
	}



	/**
	 * Vision/Company Overiew route
	 */
	public function actionCoOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Company Overview',
			'some_key' => 'Company Overview Content.'
		);

		return View::make('mockup.vision.company-overview.create', $viewData);
	}



	/**
	 * Vision/ Competition route
	 */
	public function actionCompetitionBlank() 
	{
		$viewData = array(
			'title' => 'Competition',
			'some_key' => 'Competition Content.'
		);

		return View::make('mockup.vision.competition.blank', $viewData);
	}


	/**
	 * Vision/Competition route
	 */
	public function actionCompetitionDone() 
	{
		$viewData = array(
			'title' => 'Competition',
			'some_key' => 'Competition Content.'
		);

		return View::make('mockup.vision.competition.done', $viewData);
	}



	/**
	 * Vision/Competition route
	 */
	public function actionCompetitionOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Competition',
			'some_key' => 'Competition Content.'
		);

		return View::make('mockup.vision.competition.overview-create', $viewData);
	}

	/**
	 * Vision/Competition route
	 */
	public function actionCompetitionProfileCreate() 
	{
		$viewData = array(
			'title' => 'Competition',
			'some_key' => 'Competition Content.'
		);

		return View::make('mockup.vision.competition.profile-create', $viewData);
	}




	/**
	 * Vision/ Customers route
	 */
	public function actionCustomersBlank() 
	{
		$viewData = array(
			'title' => 'Customers',
			'some_key' => 'Customers Content.'
		);

		return View::make('mockup.vision.customers.blank', $viewData);
	}


	/**
	 * Vision/Customers route
	 */
	public function actionCustomersDone() 
	{
		$viewData = array(
			'title' => 'Customers',
			'some_key' => 'Customers Content.'
		);

		return View::make('mockup.vision.customers.done', $viewData);
	}



	/**
	 * Vision/Customers route
	 */
	public function actionCustomersOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Customers',
			'some_key' => 'Customers Content.'
		);

		return View::make('mockup.vision.customers.overview-create', $viewData);
	}

	/**
	 * Vision/Customers route
	 */
	public function actionCustomersProfileCreate() 
	{
		$viewData = array(
			'title' => 'Customers',
			'some_key' => 'Customers Content.'
		);

		return View::make('mockup.vision.customers.profile-create', $viewData);
	}


	
	/**
	 * Vision/Goals route
	 */
	public function actionGoalsDone() 
	{
		$viewData = array(
			'title' => 'Goals',
			'some_key' => 'Goals Content.'
		);

		return View::make('mockup.vision.goals.done', $viewData);
	}


	/**
	 * Vision/Goals route
	 */
	public function actionGoalsBlank() 
	{
		$viewData = array(
			'title' => 'Goals',
			'some_key' => 'Goals Content.'
		);

		return View::make('mockup.vision.goals.blank', $viewData);
	}


	/**
	 * Vision/Goals route
	 */
	public function actionGoalsCreate() 
	{
		$viewData = array(
			'title' => 'Goals',
			'some_key' => 'Goals Content.'
		);

		return View::make('mockup.vision.goals.create', $viewData);
	}

	



	/**
	 * Vision/ Management route
	*/
	public function actionManagementBlank() 
	{
		$viewData = array(
			'title' => 'Management',
			'some_key' => 'Management Content.'
		);

		return View::make('mockup.vision.management.blank', $viewData);
	}


	/**
	 * Vision/Management route
	 */
	public function actionManagementDone() 
	{
		$viewData = array(
			'title' => 'Management',
			'some_key' => 'Management Content.'
		);

		return View::make('mockup.vision.management.done', $viewData);
	}



	/**
	 * Vision/Management route
	 */
	public function actionManagementOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Management',
			'some_key' => 'Management Content.'
		);

		return View::make('mockup.vision.management.overview-create', $viewData);
	}

	/**
	 * Vision/Management route
	 */
	public function actionManagementProfileCreate() 
	{
		$viewData = array(
			'title' => 'Management',
			'some_key' => 'Management Content.'
		);

		return View::make('mockup.vision.management.profile-create', $viewData);
	}


	/**
	 * Vision/ market route
	*/
	public function actionMarketBlank() 
	{
		$viewData = array(
			'title' => 'Market',
			'some_key' => 'Market Content.'
		);

		return View::make('mockup.vision.market.blank', $viewData);
	}


	/**
	 * Vision/Market route
	 */
	public function actionMarketDone() 
	{
		$viewData = array(
			'title' => 'Market',
			'some_key' => 'Market Content.'
		);

		return View::make('mockup.vision.market.done', $viewData);
	}



	/**
	 * Vision/Market route
	 */
	public function actionMarketCreate() 
	{
		$viewData = array(
			'title' => 'Market',
			'some_key' => 'Market Content.'
		);

		return View::make('mockup.vision.market.create', $viewData);
	}










	/**
	 * Vision/ Marketing route
	*/
	public function actionMarketingBlank() 
	{
		$viewData = array(
			'title' => 'Marketing',
			'some_key' => 'Marketing Content.'
		);

		return View::make('mockup.vision.marketing.blank', $viewData);
	}


	/**
	 * Vision/Marketing route
	 */
	public function actionMarketingDone() 
	{
		$viewData = array(
			'title' => 'Marketing',
			'some_key' => 'Marketing Content.'
		);

		return View::make('mockup.vision.marketing.done', $viewData);
	}



	/**
	 * Vision/Marketing route
	 */
	public function actionMarketingOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Marketing',
			'some_key' => 'Marketing Content.'
		);

		return View::make('mockup.vision.marketing.overview-create', $viewData);
	}

	/**
	 * Vision/Marketing route
	 */
	public function actionMarketingProfileCreate() 
	{
		$viewData = array(
			'title' => 'Marketing',
			'some_key' => 'Marketing Content.'
		);

		return View::make('mockup.vision.marketing.profile-create', $viewData);
	}

	/**
	 * Vision/Marketing route
	 */
	public function actionMarketingProfileView() 
	{
		$viewData = array(
			'title' => 'Marketing',
			'some_key' => 'Marketing Content.'
		);

		return View::make('mockup.vision.marketing.profile', $viewData);
	}



	/**
	 * Vision/Mission route
	 */
	public function actionMissionBlank() 
	{
		$viewData = array(
			'title' => 'Mission',
			'some_key' => 'Mission Content.'
		);

		return View::make('mockup.vision.mission.blank', $viewData);
	}

	/**
	 * Vision/Mission route
	 */
	public function actionMissionDone() 
	{
		$viewData = array(
			'title' => 'Mission',
			'some_key' => 'Mission Content.'
		);

		return View::make('mockup.vision.mission.done', $viewData);
	}

	/**
	 * Vision/Mission route
	 */
	public function actionMissionCreate() 
	{
		$viewData = array(
			'title' => 'Mission',
			'some_key' => 'Mission Content.'
		);

		return View::make('mockup.vision.mission.create', $viewData);
	}


	/**
	 * Vision/ Offerings route
	*/
	public function actionOfferingsBlank() 
	{
		$viewData = array(
			'title' => 'Offerings',
			'some_key' => 'Offerings Content.'
		);

		return View::make('mockup.vision.offerings.blank', $viewData);
	}


	/**
	 * Vision/Offerings route
	 */
	public function actionOfferingsDone() 
	{
		$viewData = array(
			'title' => 'Offerings',
			'some_key' => 'Offerings Content.'
		);

		return View::make('mockup.vision.offerings.done', $viewData);
	}



	/**
	 * Vision/Offerings route
	 */
	public function actionOfferingsOverviewCreate() 
	{
		$viewData = array(
			'title' => 'Offerings',
			'some_key' => 'Offerings Content.'
		);

		return View::make('mockup.vision.offerings.overview-create', $viewData);
	}

	/**
	 * Vision/Offerings route
	 */
	public function actionOfferingsProfileCreate() 
	{
		$viewData = array(
			'title' => 'Offerings',
			'some_key' => 'Offerings Content.'
		);

		return View::make('mockup.vision.offerings.profile-create', $viewData);
	}

	/**
	 * Vision/Offerings route
	 */
	public function actionOfferingsProfileView() 
	{
		$viewData = array(
			'title' => 'Offerings',
			'some_key' => 'Offerings Content.'
		);

		return View::make('mockup.vision.offerings.profile', $viewData);
	}


	/**
	 *  Vision Tools
	 */
	public function actionVisionTools() 
	{
		$viewData = array(
			'title' => 'Vision - Available Tools',
			'some_key' => 'Vision tools'
		);

		return View::make('mockup.vision.vision-tools.tools', $viewData);
	}


	/**
	 *  Vision Tools
	 */
	public function actionVisionToolView() 
	{
		$viewData = array(
			'title' => 'Vision - Tool',
			'some_key' => 'Vision tool'
		);

		return View::make('mockup.vision.vision-tools.tool-view', $viewData);
	}



	/**
	 *  Marketplace Index
	 */
	public function actionMarketplaceIndex() 
	{
		$viewData = array(
			'title' => 'Marketplace',
			'some_key' => 'Marketplace Content'
		);

		return View::make('mockup.marketplace.index', $viewData);
	}

	/**
	 *  Marketplace Product View
	 */
	public function actionMarketplaceProduct() 
	{
		$viewData = array(
			'title' => 'Product Detail',
			'some_key' => 'Marketplace Product Content'
		);

		return View::make('mockup.marketplace.product', $viewData);
	}




	/**
	 *  Forum Index View
	 */
	public function actionForumIndex() 
	{
		$viewData = array(
			'title' => 'Forum',
			'some_key' => 'Forum Threads'
		);

		return View::make('mockup.forum.index', $viewData);
	}


	/**
	 *  Forum Thread View
	 */
	public function actionForumThread() 
	{
		$viewData = array(
			'title' => 'Forum Thread',
			'some_key' => 'Forum Thread Content'
		);

		return View::make('mockup.forum.thread', $viewData);
	}

	/**
	 *  Forum New Thread
	 */
	public function actionForumNewThread() 
	{
		$viewData = array(
			'title' => 'Create a Topic',
			'some_key' => 'Forum Thread Create Content'
		);

		return View::make('mockup.forum.new-thread', $viewData);
	}

	/**
	 *  Forum New Thread
	 */
	public function actionForumReply() 
	{
		$viewData = array(
			'title' => 'Reply to Comment',
			'some_key' => 'Forum thread reply to comment'
		);

		return View::make('mockup.forum.reply', $viewData);
	}



	/**
	 *  Messages 
	 */
	public function actionMessagesInbox() 
	{
		$viewData = array(
			'title' => 'Your Inbox',
			'some_key' => 'Messages Inbox Content'
		);

		return View::make('mockup.messages.inbox', $viewData);
	}

	/**
	 *  Messages 
	 */
	public function actionMessagesView() 
	{
		$viewData = array(
			'title' => 'View Message',
			'some_key' => 'Message Content'
		);

		return View::make('mockup.messages.view-message', $viewData);
	}

	/**
	 *  Messages 
	 */
	public function actionMessagesNew() 
	{
		$viewData = array(
			'title' => 'Compose New Message',
			'some_key' => 'Message Compose Content'
		);

		return View::make('mockup.messages.new-message', $viewData);
	}











	/**
	 * User Profile route
	 */
	public function actionUserProfile() 
	{
		$viewData = array(
			'title' => 'User Profile',
			'some_key' => 'User Profile Content'
		);

		return View::make('mockup.user.profile', $viewData);
	}


	/**
	 * Logged in User Profile
	 */
	public function actionUserYourProfile() 
	{
		$viewData = array(
			'title' => 'View Your Profile',
			'some_key' => 'User Profile Content'
		);

		return View::make('mockup.user.your-profile', $viewData);
	}

	/**
	 * User Settings route
	 */
	public function actionUserSettings() 
	{
		$viewData = array(
			'title' => 'User Settings',
			'some_key' => 'User Settings Content'
		);

		return View::make('mockup.user.settings', $viewData);
	}


	/**
	 * User Invite a Friend
	 */
	public function actionUserInvite() 
	{
		$viewData = array(
			'title' => 'Invite a Friend',
			'some_key' => 'Invite a Friend Content'
		);

		return View::make('mockup.user.invite', $viewData);
	}

	/**
	 * User Invite a Friend
	 */
	public function actionUserEditProfile() 
	{
		$viewData = array(
			'title' => 'Edit Your Profile',
			'some_key' => 'edit profile'
		);

		return View::make('mockup.user.edit', $viewData);
	}


	/**
	 * User Subscriptions
	 */
	public function actionUserSubscriptions() 
	{
		$viewData = array(
			'title' => 'Manage Your Subscriptions',
			'some_key' => 'subscriptions'
		);

		return View::make('mockup.user.subscriptions.subscriptions', $viewData);
	}

	/**
	 * User Subscriptions Edit
	 */
	public function actionUserSubscriptionsEdit() 
	{
		$viewData = array(
			'title' => 'Edit Your Subscription',
			'some_key' => 'subscription edit'
		);

		return View::make('mockup.user.subscriptions.edit', $viewData);
	}


	/**
	 * User Subscriptions Details
	 */
	public function actionUserSubscriptionsDetails() 
	{
		$viewData = array(
			'title' => 'Subscription Details',
			'some_key' => 'subscription edit'
		);

		return View::make('mockup.user.subscriptions.details', $viewData);
	}

	/**
	 * User Subscriptions
	 */
	public function actionUserBilling() 
	{
		$viewData = array(
			'title' => 'View Your Billing History',
			'some_key' => 'billing'
		);

		return View::make('mockup.user.billing.index', $viewData);
	}


	/**
	 * User Subscriptions
	 */
	public function actionUserBillingInvoice() 
	{
		$viewData = array(
			'title' => 'View Invoice',
			'some_key' => 'invoice'
		);

		return View::make('mockup.user.billing.invoice', $viewData);
	}


	/**
	 * Knowledgebase TOC, Table of Contents route
	 */
	public function actionKnowledgebaseTOC() 
	{
		$viewData = array(
			'title' => 'Knowledgebase Table of Contents',
			'some_key' => 'Table of Contents'
		);

		return View::make('mockup.knowledgebase.toc', $viewData);
	}



		/**
	 *  Knowledebase Open View
	 */
	public function actionKnowledgebaseView() 
	{
		$viewData = array(
			'title' => 'Knowledgebase',
			'some_key' => 'Knowledebase Material'
		);

		return View::make('mockup.knowledgebase.view', $viewData);
	}


	/**
	 *  Sell Dashboard
	 */
	public function actionSellDashboard() 
	{
		$viewData = array(
			'title' => 'Sell Dashboard',
			'some_key' => 'Sell Dashboard'
		);

		return View::make('mockup.sell.sell-dashboard', $viewData);
	}


	/**
	 *  Sell Tools
	 */
	public function actionSellTools() 
	{
		$viewData = array(
			'title' => 'Sell - Available Tools',
			'some_key' => 'Sell tools'
		);

		return View::make('mockup.sell.sell-tools.tools', $viewData);
	}



	/**
	 *  Admin Dashboard
	 */
	public function actionAdminDashboard() 
	{
		$viewData = array(
			'title' => 'Admin Dashboard',
			'some_key' => 'Admin Dashboard'
		);

		return View::make('mockup.admin.dashboard', $viewData);
	}


	/**
	 *  Admin Menu
	 */
	public function actionAdminMenu() 
	{
		$viewData = array(
			'title' => 'Manage Menus',
			'some_key' => 'Admin Menus'
		);

		return View::make('mockup.admin.menu.menu', $viewData);
	}



	/**
	 *  Admin Menu Edit
	 */
	public function actionAdminMenuEdit() 
	{
		$viewData = array(
			'title' => 'Manage Menu',
			'some_key' => 'Admin Menu'
		);

		return View::make('mockup.admin.menu.edit-menu', $viewData);
	}


	/**
	 *  Admin Menu Item
	 */
	public function actionAdminMenuItems() 
	{
		$viewData = array(
			'title' => 'Manage Menu Items',
			'some_key' => 'Admin Menu Items'
		);

		return View::make('mockup.admin.menu.items', $viewData);
	}


	/**
	 *  Admin Menu Item
	 */
	public function actionAdminMenuEditItem() 
	{
		$viewData = array(
			'title' => 'Edit Menu Item',
			'some_key' => 'Admin Menu Item'
		);

		return View::make('mockup.admin.menu.edit-item', $viewData);
	}



	/**
	 *  Admin New Menu Item
	 */
	public function actionAdminMenuNew() 
	{
		$viewData = array(
			'title' => 'Create a New Menu',
			'some_key' => 'New Menu'
		);

		return View::make('mockup.admin.menu.new-menu', $viewData);
	}



	/**
	 *  Admin Alerts
	 */
	public function actionAdminAlerts() 
	{
		$viewData = array(
			'title' => 'Manage Alerts',
			'some_key' => 'Alerts'
		);

		return View::make('mockup.admin.alerts.alerts', $viewData);
	}




	/**
	 *  Admin New Menu Item
	 */
	public function actionAdminAlertsNew() 
	{
		$viewData = array(
			'title' => 'Create a New Alert',
			'some_key' => 'New Alert'
		);

		return View::make('mockup.admin.alerts.new', $viewData);
	}

	/**
	 *  Admin Alerts Statistics
	 */
	public function actionAdminAlertsDetails() 
	{
		$viewData = array(
			'title' => 'Alert Details',
			'some_key' => 'Stats'
		);

		return View::make('mockup.admin.alerts.details', $viewData);
	}



	/**
	 *  Admin Alerts Edit
	 */
	public function actionAdminAlertsEdit() 
	{
		$viewData = array(
			'title' => 'Edit Alert',
			'some_key' => 'Alert'
		);

		return View::make('mockup.admin.alerts.edit', $viewData);
	}


	/**
	 *  Admin Messages
	 */
	public function actionAdminMessages() 
	{
		$viewData = array(
			'title' => 'Application Messages',
			'some_key' => 'Messages'
		);

		return View::make('mockup.admin.messages.messages', $viewData);
	}

	/**
	 *  Admin New Message
	 */
	public function actionAdminMessagesNew() 
	{
		$viewData = array(
			'title' => 'New Application Message',
			'some_key' => 'New Message'
		);

		return View::make('mockup.admin.messages/message.new', $viewData);
	}

	/**
	 *  Admin New Message
	 */
	public function actionAdminMessagesManual() 
	{
		$viewData = array(
			'title' => 'Send New Manual Message',
			'some_key' => 'New Message'
		);

		return View::make('mockup.admin.messages/message.manual', $viewData);
	}



	/**
	 *  Admin Popup Preview
	 */
	public function actionAdminMessagesPreview() 
	{
		$viewData = array(
			'title' => 'Preview Message',
			'some_key' => 'New Message'
		);

		return View::make('mockup.admin.messages.message.preview', $viewData);
	}

	/**
	 *  Admin Preview Message Code View
	 */
	public function actionAdminMessagesPreviewCode() 
	{
		$viewData = array(
			'title' => 'Preview Message HTML',
			'some_key' => 'Preview HTML'
		);

		return View::make('mockup.admin.messages.message.preview-code', $viewData);
	}


	/**
	 *  Admin Manage Message Templates
	 */
	public function actionAdminMessagesTemplates() 
	{
		$viewData = array(
			'title' => 'Manage Message Templates',
			'some_key' => 'Preview HTML'
		);

		return View::make('mockup.admin.messages.templates.templates', $viewData);
	}


	/**
	 *  Admin Manage Message Templates Create New
	 */
	public function actionAdminMessagesTemplatesNew() 
	{
		$viewData = array(
			'title' => 'New Message Template',
			'some_key' => 'Preview HTML'
		);

		return View::make('mockup.admin.messages.templates.new', $viewData);
	}



	/**
	 *  Admin Manage Message Templates Edit
	 */
	public function actionAdminMessagesTemplatesEdit() 
	{
		$viewData = array(
			'title' => 'Edit Message Template',
			'some_key' => 'edit TemplateHTML'
		);

		return View::make('mockup.admin.messages.templates.edit', $viewData);
	}





	/**
	 *  Admin Messages Groups
	 */
	public function actionAdminMessagesGroups() 
	{
		$viewData = array(
			'title' => 'Message Groups',
			'some_key' => 'Groups'
		);

		return View::make('mockup.admin.messages.groups.groups', $viewData);
	}


	/**
	 *  Admin Messages Groups
	 */
	public function actionAdminMessagesGroupsNew() 
	{
		$viewData = array(
			'title' => 'Create New Message Group',
			'some_key' => 'Groups'
		);

		return View::make('mockup.admin.messages.groups.new', $viewData);
	}


	/**
	 *  Admin Messages Groups
	 */
	public function actionAdminMessagesGroupsEdit() 
	{
		$viewData = array(
			'title' => 'Edit Message Group',
			'some_key' => 'Groups'
		);

		return View::make('mockup.admin.messages.groups.edit', $viewData);
	}




	/**
	 *  Admin Messages Dictionaries
	 */
	public function actionAdminMessagesDictionaries() 
	{
		$viewData = array(
			'title' => 'Message Dictionaries',
			'some_key' => 'Dictionaries'
		);

		return View::make('mockup.admin.messages.dictionaries.dictionaries', $viewData);
	}


	/**
	 *  Admin Messages Dictionaries Manage 
	 */
	public function actionAdminMessagesDictionariesManage() 
	{
		$viewData = array(
			'title' => 'Manage Dictionary',
			'some_key' => 'Dictionary Items'
		);

		return View::make('mockup.admin.messages.dictionaries.manage-dictionary', $viewData);
	}



	/**
	 *  Admin Messages Sent Archive
	 */
	public function actionAdminMessagesSent() 
	{
		$viewData = array(
			'title' => 'Sent Messages',
			'some_key' => 'Sent Messages'
		);

		return View::make('mockup.admin.messages.sent.messages', $viewData);
	}


	/**
	 *  Admin Messages Sent Pending Archive
	 */
	public function actionAdminMessagesPending() 
	{
		$viewData = array(
			'title' => 'Pending Messages',
			'some_key' => 'Pending Messages'
		);

		return View::make('mockup.admin.messages.sent.pending', $viewData);
	}


	/**
	 *  Admin Messages Sent Pending Archive
	 */
	public function actionAdminMessagesDetails() 
	{
		$viewData = array(
			'title' => 'Message Details',
			'some_key' => 'Message Details'
		);

		return View::make('mockup.admin.messages.sent.details', $viewData);
	}




	/**
	 *  Admin Forum Dashboard
	 */
	public function actionAdminForumDash() 
	{
		$viewData = array(
			'title' => 'Forum Administration',
			'some_key' => 'Forum Administration'
		);

		return View::make('mockup.admin.forum.dashboard', $viewData);
	}


	/**
	 *  Admin Forum Flagged Answers
	 */
	public function actionAdminForumFlaggedA() 
	{
		$viewData = array(
			'title' => 'Flagged Answers',
			'some_key' => 'Flagged Answers'
		);

		return View::make('mockup.admin.forum.flagged-answers', $viewData);
	}


	/**
	 *  Admin Forum Flagged Answers
	 */
	public function actionAdminForumFlaggedQ() 
	{
		$viewData = array(
			'title' => 'Flagged Questions',
			'some_key' => 'Flagged Answers'
		);

		return View::make('mockup.admin.forum.flagged-questions', $viewData);
	}



	/**
	 *  Admin Manage Categories
	 */
	public function actionAdminForumCategories() 
	{
		$viewData = array(
			'title' => 'Manage Forum Categories',
			'some_key' => 'Flagged Answers'
		);

		return View::make('mockup.admin.forum.categories.manage-categories', $viewData);
	}




	/**
	 *  Admin Manage Category Permissions
	 */
	public function actionAdminForumCategoriesPermissions() 
	{
		$viewData = array(
			'title' => 'Manage Category Permissions',
			'some_key' => 'Permissions'
		);

		return View::make('mockup.admin.forum.categories.permissions', $viewData);
	}




	/**
	 *  Admin Settings
	 */
	public function actionAdminSettings() 
	{
		$viewData = array(
			'title' => 'Manage Settings',
			'some_key' => 'settings'
		);

		return View::make('mockup.admin.settings.settings', $viewData);
	}


	/**
	 *  Admin Settings
	 */
	public function actionAdminIntake() 
	{
		$viewData = array(
			'title' => 'Manage Intake',
			'some_key' => 'intake'
		);

		return View::make('mockup.admin.intake.manage-intake', $viewData);
	}



	/**
	 *  Admin Settings
	 */
	public function actionAdminIntakeNewQuestion() 
	{
		$viewData = array(
			'title' => 'New Intake Question',
			'some_key' => 'intake question'
		);

		return View::make('mockup.admin.intake.new', $viewData);
	}


	/**
	 *  Admin Settings
	 */
	public function actionAdminIntakeEditQuestion() 
	{
		$viewData = array(
			'title' => 'Edit Intake Question',
			'some_key' => 'edit intake question'
		);

		return View::make('mockup.admin.intake.edit', $viewData);
	}



	/**
	 *  Admin Settings
	 */
	public function actionAdminIntakeValues() 
	{
		$viewData = array(
			'title' => 'Manage Intake Values',
			'some_key' => 'intake values'
		);

		return View::make('mockup.admin.intake.values.values', $viewData);
	}



	/**
	 *  Admin Settings
	 */
	public function actionAdminIntakeValueTypes() 
	{
		$viewData = array(
			'title' => 'Manage Intake Value Types',
			'some_key' => 'intake value types'
		);

		return View::make('mockup.admin.intake.values.types', $viewData);
	}



	/**
	 *  Admin Settings
	 */
	public function actionAdminIntakeValueGroups() 
	{
		$viewData = array(
			'title' => 'Manage Intake Value Groups',
			'some_key' => 'intake value groups'
		);

		return View::make('mockup.admin.intake.values.groups', $viewData);
	}





	/**
	 *  Company Stream
	 */
	public function actionCompanyStream()
	{
		$viewData = array(
			'title' => 'Company Activity',
			'some_key' => 'Company activity stream'
		);

		return View::make('mockup.company.stream', $viewData);
	}

	/**
	 *  Company Team
	 */
	public function actionCompanyTeam()
	{
		$viewData = array(
			'title' => 'Your Company Team',
			'some_key' => 'Company team'
		);

		return View::make('mockup.company.team', $viewData);
	}

	/**
	 *  Company Team
	 */
	public function actionCompanyTeamBulkInvite()
	{
		$viewData = array(
			'title' => 'Send Bulk Invite',
			'some_key' => 'Company team invites'
		);

		return View::make('mockup.company.bulk-invite', $viewData);
	}


	/**
	 *  Company Team
	 */
	public function actionTasks()
	{
		$viewData = array(
			'title' => 'Task Management',
			'some_key' => 'task management content'
		);

		return View::make('mockup.tasks', $viewData);
	}

	/**
	 *  Company Team
	 */
	public function actionTasksProject()
	{
		$viewData = array(
			'title' => 'Current Project',
			'some_key' => 'current project'
		);

		return View::make('mockup.tasks.project', $viewData);
	}


	/**
	 *  Company Team
	 */
	public function actionTasksProjectItem()
	{
		$viewData = array(
			'title' => 'Task Item',
			'some_key' => 'current project'
		);

		return View::make('mockup.tasks.item', $viewData);
	}




	/**
	 *  Permissions Groups
	 */
	public function actionAdminPermissionsGroups()
	{
		$viewData = array(
			'title' => 'Manage Permissions for Groups',
			'some_key' => 'groups permissions'
		);

		return View::make('mockup.admin.permissions.groups.manage-groups', $viewData);
	}


	/**
	 *  Permissions Groups New
	 */
	public function actionAdminPermissionsGroupsNew()
	{
		$viewData = array(
			'title' => 'Create a New Group',
			'some_key' => 'groups permissions'
		);

		return View::make('mockup.admin.permissions.groups.new', $viewData);
	}


	/**
	 *  Permissions Groups New
	 */
	public function actionAdminPermissionsGroupsEdit()
	{
		$viewData = array(
			'title' => 'Edit Group',
			'some_key' => 'edit group permissions'
		);

		return View::make('mockup.admin.permissions.groups.edit', $viewData);
	}
	


	/**
	 *  Permissions Rules
	 */
	public function actionAdminPermissionsRules()
	{
		$viewData = array(
			'title' => 'Manage Permissions Rules',
			'some_key' => 'rules permissions'
		);

		return View::make('mockup.admin.permissions.rules.manage-rules', $viewData);
	}


	/**
	 *  Permissions Rules New
	 */
	public function actionAdminPermissionsRulesNew()
	{
		$viewData = array(
			'title' => 'Create a New Rule',
			'some_key' => 'new rule'
		);

		return View::make('mockup.admin.permissions.rules.new', $viewData);
	}


	/**
	 *  Permissions Rules New
	 */
	public function actionAdminPermissionsRulesEdit()
	{
		$viewData = array(
			'title' => 'Edit Rule',
			'some_key' => 'edit rule permissions'
		);

		return View::make('mockup.admin.permissions.rules.edit', $viewData);
	}

	/**
	 *  Permissions Index
	 */
	public function actionAdminPermissions()
	{
		$viewData = array(
			'title' => 'Manage Permissions',
			'some_key' => 'permissions'
		);

		return View::make('mockup.admin.permissions.permissions', $viewData);
	}


	/**
	 *  Admin User Management
	 */
	public function actionAdminUser()
	{
		$viewData = array(
			'title' => 'Manage Users',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.user.user-list', $viewData);
	}



	/**
	 *  Admin User Suspension Management
	 */
	public function actionAdminUserSuspended()
	{
		$viewData = array(
			'title' => 'Suspended Users',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.user.suspended', $viewData);
	}


	/**
	 *  Admin User Blacklist Management
	 */
	public function actionAdminUserBlacklisted()
	{
		$viewData = array(
			'title' => 'Blacklisted Users',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.user.blacklist', $viewData);
	}


	/**
	 *  Admin User Edit
	 */
	public function actionAdminUserEdit()
	{
		$viewData = array(
			'title' => 'Edit User',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.user.edit-user', $viewData);
	}



	/**
	 *  Admin User Edit
	 */
	public function actionAdminUserDetails()
	{
		$viewData = array(
			'title' => 'User Details',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.user.details', $viewData);
	}
	

	/**
	 *  Admin User Edit
	 */
	public function actionAdminBadges()
	{
		$viewData = array(
			'title' => 'Manage Badges',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.badges.badges', $viewData);
	}


	/**
	 *  Admin User Edit
	 */
	public function actionAdminBadgesTypes()
	{
		$viewData = array(
			'title' => 'Manage Badge Types',
			'some_key' => 'Users'
		);

		return View::make('mockup.admin.badges.types', $viewData);
	}


	/**
	 *  Admin User Edit
	 */
	public function actionAdminBadgesActivity()
	{
		$viewData = array(
			'title' => 'View Badge Activity',
			'some_key' => 'badges and such'
		);

		return View::make('mockup.admin.badges.activity', $viewData);
	}




	/**
	 *  Admin Brand Management
	 */
	public function actionAdminBrands()
	{
		$viewData = array(
			'title' => 'Manage Brands',
			'some_key' => 'Brands'
		);

		return View::make('mockup.admin.brands.brand-list', $viewData);
	}


	/**
	 *  Admin Brand Edit
	 */
	public function actionAdminBrandsEdit()
	{
		$viewData = array(
			'title' => 'Edit Brand',
			'some_key' => 'Edit Brands'
		);

		return View::make('mockup.admin.brands.edit-brand', $viewData);
	}

	/**
	 *  Admin Brand Create
	 */
	public function actionAdminBrandsNew()
	{
		$viewData = array(
			'title' => 'Create a Brand',
			'some_key' => 'Create Brand'
		);

		return View::make('mockup.admin.brands.new-brand', $viewData);
	}


	/**
	 *  Admin Brand View Details
	 */
	public function actionAdminBrandsDetails()
	{
		$viewData = array(
			'title' => 'View Brand Details',
			'some_key' => 'Brand Details'
		);

		return View::make('mockup.admin.brands.details', $viewData);
	}




	/**
	 *  Admin Billing Controls
	 */
	public function actionAdminBilling()
	{
		$viewData = array(
			'title' => 'Manage Billing',
			'some_key' => 'Brand Details'
		);

		return View::make('mockup.admin.billing.index', $viewData);
	}


	/**
	 *  Admin Billing Invoice
	 */
	public function actionAdminBillingInvoice()
	{
		$viewData = array(
			'title' => 'View Invoice',
			'some_key' => 'invoice'
		);

		return View::make('mockup.admin.billing.invoice', $viewData);
	}


	/**
	 *  Admin Discounts
	 */
	public function actionAdminBillingDiscounts()
	{
		$viewData = array(
			'title' => 'Manage Discounts',
			'some_key' => 'billing disocunts'
		);

		return View::make('mockup.admin.billing.discounts.discounts', $viewData);
	}

	/**
	 *  Admin Billing Authors
	 */
	public function actionAdminBillingAuthors()
	{
		$viewData = array(
			'title' => 'Overview of Author Billing',
			'some_key' => 'authors billing'
		);

		return View::make('mockup.admin.billing.authors.index', $viewData);
	}



	/**
	 *  Admin Discount Details
	 */
	public function actionAdminBillingDiscountsDetails()
	{
		$viewData = array(
			'title' => 'Discount Details',
			'some_key' => 'discount details'
		);

		return View::make('mockup.admin.billing.discounts.details', $viewData);
	}


	/**
	 *  Admin Plans
	 */
	public function actionAdminBillingPlans()
	{
		$viewData = array(
			'title' => 'Manage Plans',
			'some_key' => 'discount details'
		);

		return View::make('mockup.admin.billing.plans.plans', $viewData);
	}


	/**
	 *  Admin Plan Details
	 */
	public function actionAdminBillingPlanDetails()
	{
		$viewData = array(
			'title' => 'View Plan Details',
			'some_key' => 'discount details'
		);

		return View::make('mockup.admin.billing.plans.details', $viewData);
	}


	/**
	 *  Admin Create a new Plan
	 */
	public function actionAdminBillingPlansNew()
	{
		$viewData = array(
			'title' => 'Create New Plan',
			'some_key' => 'discount details'
		);

		return View::make('mockup.admin.billing.plans.new', $viewData);
	}


	/**
	 *  Admin Create a new Plan
	 */
	public function actionAdminBillingPlansEdit()
	{
		$viewData = array(
			'title' => 'Create New Plan',
			'some_key' => 'discount details'
		);

		return View::make('mockup.admin.billing.plans.edit', $viewData);
	}



	/**
	 *  Admin Create a new Plan
	 */
	public function actionAdminBillingPlanFeatures()
	{
		$viewData = array(
			'title' => 'Manage Available Features',
			'some_key' => 'features'
		);

		return View::make('mockup.admin.billing.plans.features.features', $viewData);
	}


	/**
	 *  Admin Subscriptions Management
	 */
	public function actionAdminBillingSubscriptions()
	{
		$viewData = array(
			'title' => 'Manage Subscriptions',
			'some_key' => 'subscribers'
		);

		return View::make('mockup.admin.billing.subscriptions.subscriptions', $viewData);
	}

	/**
	 *  Admin Subscription Management
	 */
	public function actionAdminBillingSubscriptionDetails()
	{
		$viewData = array(
			'title' => 'Subscription Details',
			'some_key' => 'subscriptions'
		);

		return View::make('mockup.admin.billing.subscriptions.details', $viewData);
	}

	/**
	 *  Admin Subscription Management
	 */
	public function actionAdminBillingOutstanding()
	{
		$viewData = array(
			'title' => 'Manage Outstanding Transaction',
			'some_key' => 'outstanding'
		);

		return View::make('mockup.admin.billing.outstanding', $viewData);
	}



	/**
	 *  Admin Taxonomy Management
	 */
	public function actionAdminTaxonomy()
	{
		$viewData = array(
			'title' => 'Manage Application Taxonomy',
			'some_key' => 'application'
		);

		return View::make('mockup.admin.taxonomy.index', $viewData);
	}



	/**
	 *  Admin Taxonomy Management New Category
	 */
	public function actionAdminTaxonomySubCategoryNew()
	{
		$viewData = array(
			'title' => 'New Taxonomy Sub-Category',
			'some_key' => 'new category'
		);

		return View::make('mockup.admin.taxonomy.subcategory.new', $viewData);
	}

	/**
	 *  Admin Taxonomy Management Edit Category
	 */
	public function actionAdminTaxonomySubCategoryEdit()
	{
		$viewData = array(
			'title' => 'Edit Taxonomy Sub-Category',
			'some_key' => 'edit category'
		);

		return View::make('mockup.admin.taxonomy.subcategory.edit', $viewData);
	}


	/**
	 *  Admin Taxonomy Management New Question
	 */
	public function actionAdminTaxonomyQuestionNew()
	{
		$viewData = array(
			'title' => 'New Taxonomy Question',
			'some_key' => 'new question'
		);

		return View::make('mockup.admin.taxonomy.question.new', $viewData);
	}

	/**
	 *  Admin Taxonomy Management New Question
	 */
	public function actionAdminTaxonomyQuestionEdit()
	{
		$viewData = array(
			'title' => 'Edit Taxonomy Question',
			'some_key' => 'edit question'
		);

		return View::make('mockup.admin.taxonomy.question.edit', $viewData);
	}





	

	/**
	 * Another example action route
	 */
	public function actionAdminExample()
	{
		$this->viewData = array(
			'title' => 'Admin Somewhere',
			'some_key' => 'Example Admin Content',
		);

		$this->setupLayout();
	}

}