<?php

/*
|--------------------------------------------------------------------------
| Mockup Routes
|--------------------------------------------------------------------------
|
| Bellow is the routes group that used by mockup
|
| This is temporary route, and will be deleted soon we've reach stable release
|
*/

Route::group(array(
	'prefix' => 'mockup', 
	'before' => 'publish_local_assets'
	), function(){

	Route::any('/', array('uses' => 'MockupController@actionDashboard'));
	Route::any('sign-in', array('uses' => 'MockupController@actionSignIn'));
	Route::any('register', array('uses' => 'MockupController@actionRegister'));
	Route::any('intake', array('uses' => 'MockupController@actionIntake'));

	Route::group(array('prefix' => 'company'), function() {
		Route::any('stream', array('uses' => 'MockupController@actionCompanyStream'));
		Route::any('team', array('uses' => 'MockupController@actionCompanyTeam'));
		Route::any('bulk-invite', array('uses' => 'MockupController@actionCompanyTeamBulkInvite'));
	});

	Route::group(array('prefix' => 'tasks'), function() {
		Route::any('/', array('uses' => 'MockupController@actionTasks'));
		Route::group(array('prefix' => 'project'), function() {
			Route::any('/', array('uses' => 'MockupController@actionTasksProject'));
			Route::any('item', array('uses' => 'MockupController@actionTasksProjectItem'));
		});
	});


	Route::group(array('prefix' => 'vision'), function() {

		Route::any('/', array('uses' => 'MockupController@actionVision'));


		Route::group(array('prefix' => 'mission'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionMissionBlank'));
			Route::any('done', array('uses' => 'MockupController@actionMissionDone'));
			Route::any('create', array('uses' => 'MockupController@actionMissionCreate'));
		});

		Route::group(array('prefix' => 'funding'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionFundingBlank'));
			Route::any('done', array('uses' => 'MockupController@actionFundingDone'));
			Route::any('create', array('uses' => 'MockupController@actionFundingCreate'));
		});

		Route::group(array('prefix' => 'operations'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionOperationsBlank'));
			Route::any('done', array('uses' => 'MockupController@actionOperationsDone'));
			Route::any('overview-create', array('uses' => 'MockupController@actionOperationsOverviewCreate'));
			Route::any('profile-create', array('uses' => 'MockupController@actionOperationsProfileCreate'));
		});

		Route::group(array('prefix' => 'company-overview'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionCoOverviewBlank'));
			Route::any('done', array('uses' => 'MockupController@actionCoOverviewDone'));
			Route::any('create', array('uses' => 'MockupController@actionCoOverviewCreate'));
		});

		Route::group(array('prefix' => 'competition'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionCompetitionBlank'));
			Route::any('done', array('uses' => 'MockupController@actionCompetitionDone'));
			Route::any('overview-create', array('uses' => 'MockupController@actionCompetitionOverviewCreate'));
			Route::any('profile-create', array('uses' => 'MockupController@actionCompetitionProfileCreate'));
		});

		Route::group(array('prefix' => 'customers'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionCustomersBlank'));
			Route::any('done', array('uses' => 'MockupController@actionCustomersDone'));
			Route::any('overview-create', array('uses' => 'MockupController@actionCustomersOverviewCreate'));
			Route::any('profile-create', array('uses' => 'MockupController@actionCustomersProfileCreate'));
		});

		Route::group(array('prefix' => 'goals'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionGoalsBlank'));
			Route::any('done', array('uses' => 'MockupController@actionGoalsDone'));
			Route::any('create', array('uses' => 'MockupController@actionGoalsCreate'));
		});

		Route::group(array('prefix' => 'management'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionManagementBlank'));
			Route::any('done', array('uses' => 'MockupController@actionManagementDone'));
			Route::any('overview-create', array('uses' => 'MockupController@actionManagementOverviewCreate'));
			Route::any('profile-create', array('uses' => 'MockupController@actionManagementProfileCreate'));
		});

		Route::group(array('prefix' => 'market'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionMarketBlank'));
			Route::any('done', array('uses' => 'MockupController@actionMarketDone'));
			Route::any('create', array('uses' => 'MockupController@actionMarketCreate'));
		});

		Route::group(array('prefix' => 'marketing'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionMarketingBlank'));
			Route::any('done', array('uses' => 'MockupController@actionMarketingDone'));
			Route::any('overview-create', array('uses' => 'MockupController@actionMarketingOverviewCreate'));
			Route::any('profile-create', array('uses' => 'MockupController@actionMarketingProfileCreate'));
			Route::any('profile-view', array('uses' => 'MockupController@actionMarketingProfileView'));
		});


		Route::group(array('prefix' => 'offerings'), function() {
			Route::any('blank', array('uses' => 'MockupController@actionOfferingsBlank'));
			Route::any('done', array('uses' => 'MockupController@actionOfferingsDone'));
			Route::any('overview-create', array('uses' => 'MockupController@actionOfferingsOverviewCreate'));
			Route::any('profile-create', array('uses' => 'MockupController@actionOfferingsProfileCreate'));
			Route::any('profile-view', array('uses' => 'MockupController@actionOfferingsProfileView'));
		});

		Route::group(array('prefix' => 'tools'), function() {
			Route::any('/', array('uses' => 'MockupController@actionVisionTools'));
			Route::any('tool', array('uses' => 'MockupController@actionVisionToolView'));
		});


	});


	Route::group(array('prefix' => 'user'), function() {
		Route::any('profile', array('uses' => 'MockupController@actionUserProfile'));
		Route::any('settings', array('uses' => 'MockupController@actionUserSettings'));
		Route::any('invite', array('uses' => 'MockupController@actionUserInvite'));
		Route::any('edit', array('uses' => 'MockupController@actionUserEditProfile'));
		Route::any('your-profile', array('uses' => 'MockupController@actionUserYourProfile'));
		Route::group(array('prefix' => 'subscriptions'), function() {
			Route::any('/', array('uses' => 'MockupController@actionUserSubscriptions'));
			Route::any('details', array('uses' => 'MockupController@actionUserSubscriptionsDetails'));
			Route::any('edit', array('uses' => 'MockupController@actionUserSubscriptionsEdit'));
		});
		Route::group(array('prefix' => 'billing'), function() {
			Route::any('/', array('uses' => 'MockupController@actionUserBilling'));
			Route::any('invoice', array('uses' => 'MockupController@actionUserBillingInvoice'));
		});

	});


	Route::group(array('prefix' => 'forum'), function() {
		Route::any('/', array('uses' => 'MockupController@actionForumIndex'));
		Route::any('thread', array('uses' => 'MockupController@actionForumThread'));
		Route::any('new', array('uses' => 'MockupController@actionForumNewThread'));
		Route::any('reply', array('uses' => 'MockupController@actionForumReply'));
	});

	Route::group(array('prefix' => 'messages'), function() {
		Route::any('/', array('uses' => 'MockupController@actionMessagesInbox'));
		Route::any('view', array('uses' => 'MockupController@actionMessagesView'));
		Route::any('new', array('uses' => 'MockupController@actionMessagesNew'));
	});


	Route::group(array('prefix' => 'marketplace'), function() {
		Route::any('/', array('uses' => 'MockupController@actionMarketplaceIndex'));
		Route::any('product', array('uses' => 'MockupController@actionMarketplaceProduct'));
	});

	Route::group(array('prefix' => 'knowledgebase'), function() {
		Route::any('/', array('uses' => 'MockupController@actionKnowledgebaseTOC'));
		Route::any('view', array('uses' => 'MockupController@actionKnowledgebaseView'));

	});

	Route::group(array('prefix' => 'sell'), function() {
		Route::any('/', array('uses' => 'MockupController@actionSellDashboard'));
		Route::any('tools', array('uses' => 'MockupController@actionSellTools'));

	});


	Route::group(array('prefix' => 'admin'), function() {
		Route::any('/', array('uses' => 'MockupController@actionAdminDashboard'));

		Route::group(array('prefix' => 'menu'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminMenu'));
			Route::any('edit', array('uses' => 'MockupController@actionAdminMenuEdit'));
			Route::any('new', array('uses' => 'MockupController@actionAdminMenuNew'));
			Route::any('items', array('uses' => 'MockupController@actionAdminMenuItems'));
			Route::any('edit-item', array('uses' => 'MockupController@actionAdminMenuEditItem'));

		});

		Route::group(array('prefix' => 'alerts'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminAlerts'));
			Route::any('new', array('uses' => 'MockupController@actionAdminAlertsNew'));
			Route::any('details', array('uses' => 'MockupController@actionAdminAlertsDetails'));
			Route::any('edit', array('uses' => 'MockupController@actionAdminAlertsEdit'));
		});

		Route::group(array('prefix' => 'messages'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminMessages'));

			Route::group(array('prefix' => 'message'), function() {
				Route::any('new', array('uses' => 'MockupController@actionAdminMessagesNew'));
				Route::any('manual', array('uses' => 'MockupController@actionAdminMessagesManual'));
				Route::any('preview', array('uses' => 'MockupController@actionAdminMessagesPreview'));
				Route::any('preview-code', array('uses' => 'MockupController@actionAdminMessagesPreviewCode'));
			});

			Route::group(array('prefix' => 'templates'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminMessagesTemplates'));
				Route::any('new', array('uses' => 'MockupController@actionAdminMessagesTemplatesNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminMessagesTemplatesEdit'));
			});

			Route::group(array('prefix' => 'groups'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminMessagesGroups'));
				Route::any('new', array('uses' => 'MockupController@actionAdminMessagesGroupsNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminMessagesGroupsEdit'));
			});

			Route::group(array('prefix' => 'dictionaries'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminMessagesDictionaries'));
				Route::any('manage', array('uses' => 'MockupController@actionAdminMessagesDictionariesManage'));
			});

			Route::group(array('prefix' => 'sent'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminMessagesSent'));
				Route::any('pending', array('uses' => 'MockupController@actionAdminMessagesPending'));
				Route::any('details', array('uses' => 'MockupController@actionAdminMessagesDetails'));
			});
		});

		Route::group(array('prefix' => 'forum'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminForumDash'));
			Route::any('flagged-answers', array('uses' => 'MockupController@actionAdminForumFlaggedA'));
			Route::any('flagged-questions', array('uses' => 'MockupController@actionAdminForumFlaggedQ'));
			Route::group(array('prefix' => 'categories'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminForumCategories'));
				Route::any('permissions', array('uses' => 'MockupController@actionAdminForumCategoriesPermissions'));
			});
		});

		Route::group(array('prefix' => 'settings'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminSettings'));
		});


		Route::group(array('prefix' => 'intake'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminIntake'));
			Route::any('new-question', array('uses' => 'MockupController@actionAdminIntakeNewQuestion'));
			Route::any('edit-question', array('uses' => 'MockupController@actionAdminIntakeEditQuestion'));

			Route::group(array('prefix' => 'values'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminIntakeValues'));
				Route::any('types', array('uses' => 'MockupController@actionAdminIntakeValueTypes'));
				Route::any('groups', array('uses' => 'MockupController@actionAdminIntakeValueGroups'));
			
			});
		});




		Route::group(array('prefix' => 'permissions'), function() {
			
			Route::any('/', array('uses' => 'MockupController@actionAdminPermissions'));

			Route::group(array('prefix' => 'groups'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminPermissionsGroups'));
				Route::any('new', array('uses' => 'MockupController@actionAdminPermissionsGroupsNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminPermissionsGroupsEdit'));
			});

			Route::group(array('prefix' => 'rules'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminPermissionsRules'));
				Route::any('new', array('uses' => 'MockupController@actionAdminPermissionsRulesNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminPermissionsRulesEdit'));
			});
			
		});

		Route::group(array('prefix' => 'user'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminUser'));
			Route::any('suspended', array('uses' => 'MockupController@actionAdminUserSuspended'));
			Route::any('blacklisted', array('uses' => 'MockupController@actionAdminUserBlacklisted'));
			Route::any('edit', array('uses' => 'MockupController@actionAdminUserEdit'));
			Route::any('details', array('uses' => 'MockupController@actionAdminUserDetails'));
		});


		Route::group(array('prefix' => 'badges'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminBadges'));
			Route::any('types', array('uses' => 'MockupController@actionAdminBadgesTypes'));
			Route::any('activity', array('uses' => 'MockupController@actionAdminBadgesActivity'));
		});

		Route::group(array('prefix' => 'brands'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminBrands'));
			Route::any('edit', array('uses' => 'MockupController@actionAdminBrandsEdit'));
			Route::any('new', array('uses' => 'MockupController@actionAdminBrandsNew'));
			Route::any('details', array('uses' => 'MockupController@actionAdminBrandsDetails'));
		});


		Route::group(array('prefix' => 'billing'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminBilling'));
			Route::any('invoice', array('uses' => 'MockupController@actionAdminBillingInvoice'));
			Route::any('outstanding', array('uses' => 'MockupController@actionAdminBillingOutstanding'));
			

			Route::group(array('prefix' => 'authors'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminBillingAuthors'));
			});

			
			Route::group(array('prefix' => 'discounts'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminBillingDiscounts'));
				Route::any('details', array('uses' => 'MockupController@actionAdminBillingDiscountsDetails'));
			});

			Route::group(array('prefix' => 'subscriptions'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminBillingSubscriptions'));
				Route::any('details', array('uses' => 'MockupController@actionAdminBillingSubscriptionDetails'));
			});


			Route::group(array('prefix' => 'plans'), function() {
				Route::any('/', array('uses' => 'MockupController@actionAdminBillingPlans'));
				Route::any('new', array('uses' => 'MockupController@actionAdminBillingPlansNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminBillingPlansEdit'));
				Route::any('details', array('uses' => 'MockupController@actionAdminBillingPlanDetails'));
					Route::group(array('prefix' => 'features'), function() {
					Route::any('/', array('uses' => 'MockupController@actionAdminBillingPlanFeatures'));
				});
			});
		});


		Route::group(array('prefix' => 'taxonomy'), function() {
			Route::any('/', array('uses' => 'MockupController@actionAdminTaxonomy'));
			Route::group(array('prefix' => 'subcategory'), function() {
				Route::any('new', array('uses' => 'MockupController@actionAdminTaxonomySubCategoryNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminTaxonomySubCategoryEdit'));
			});	

			Route::group(array('prefix' => 'question'), function() {
				Route::any('new', array('uses' => 'MockupController@actionAdminTaxonomyQuestionNew'));
				Route::any('edit', array('uses' => 'MockupController@actionAdminTaxonomyQuestionEdit'));
			});	
		});


	});
	
	Route::any('test', array('prefix' => 'vision', 'uses' => 'MockupController@actionRobTest'));

	Route::any('example', array('uses' =>'MockupController@actionExample'));
	Route::any('admin/example', array('uses' =>'MockupController@actionAdminExample'));
});