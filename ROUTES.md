# Routes

Please ensure we are consistent with the names of the routes and action names.  e.g.

/admin/module/type/{:num}/action
Actions = delete, edit, new

## SaaS-Application

### Auth

+ auth/login
+ auth/logout
+ auth/register
+ auth/activate
+ auth/activate_resend
+ auth/password_confirm/(:any)
+ auth/password_forgot

## SaaS-Group
Users & Groups & Brands

### Users

+ admin/user/suspended |Suspended due to login attempts
+ admin/user/blacklist |Blacklisted due to dueschbaggery
+ admin/user |Manage User CRUD

+ user/profile/brand/(:num)/change |Change active rband

+ user/profile/manage |Basic Management
+ user/profile/manage/password |Change Passwrod
+ user/profile/manage/image |Change Image
+ user/profile/social |Social Media Routes
+ user/profile/delete |Delete or Archive 
+ user/profile |Profile Overview

#### API 

+ api/profile/(:any)


### Groups
+ admin/user/(:num)/group/action |Group Actions
+ admin/user/(:num)/group |Group List

### Brands
+ admin/brand/(:num)/action |Actions
+ admin/brand

### Contributors
+ admin/contributor

### Affiliate
+ admin/affiliate


## SaaS-CRON

+ admin/cron/log/type/raw |Raw Cron Data
+ admin/cron/log/type |Type of Cron Log
+ admin/cron/log |Log Overview
+ admin/cron |Cron Settings


## SaaS-Notify 

// Notifications
+ admin/notify/manual |Manually send email
+ admin/notify/group |Notification Groups
+ admin/notify/template |Email Templates
+ admin/notify/map |Dictionary Objects
+ admin/notify/notification |Notifcation Emails
+ admin/notify |Overview

// Reports
+ admin/notify/report |Report on Email Usage

// User Preference Update
+ user/settings/notify/update |Update Frequency Preference
+ user/settings/notify |List of Notification Groups


## SaaS-Message

### Admin Messages
+ admin/alert

+ user/messages/admin-alert

+ user/message/new
+ user/message/{:num}/action
+ user/message/


## SaaS-Profiler

// Intake Questions
+ admin/profiler/question/{:num}/answer |Answers to Questions
+ admin/profiler/question/ |Intake Questions
+ admin/profiler/group/ |Question Groups
+ admin/profiler/ |Brand Profile Intake Overview

// Taxonomy
+ admin/profiler/taxonomy/item |Taxonomy Groups
+ admin/profiler/taxonomy/group |Taxonomy Groups
+ admin/profiler/taxonomy |Formerly Definitions


## SaaS-Billing

Billing (Subscription,One-Time Purchase)
// Subscription Plans
+ + admin/billing/subscribe/tier |Subscription Level Tiers
+ admin/billing/subscribe/option |Subscription Options (Features in Package Tier)
+ admin/billing/subscribe/planmeta |Add Features to Plan Packages
+ admin/billing/subscribe/plan |List of Plans

// Discount Codes
+ admin/billing/subscribe/discount

// Reports
+ admin/billing/report/discount |History of Discounts Used
+ admin/billing/report/plan |Analytics of Plan Usage
+ admin/billing/report/payment |Recent Payments

+ admin/billing/subscribe |Overview of Subscription Packages


## SaaS-Knowledge

Document Management
// Manage Known Dictionary (combine with taxonomy)
+ admin/knowledge/dictionary |Identified Terms held in Dictionary

+ admin/knowledge/document/(:num)/chapter/(:num)/action |Chapter
+ admin/knowledge/document/(:num)/text/(:num)/action |Text
+ admin/knowledge/document/(:num)/action |Actions
+ admin/knowledge/document


## SaaS-Badges
The purpose of the badge module is to allow for designations.  

Administrative control needs to see all badges with the ability to define the types (achievement, special occasion, brand specific, etc.).  A route should also be created to manually manage user badges.

+ admin/badge | Manage Badges
+ admin/user/{:num}/badges


From a user endpoint need the ability to see what badges
+ user/{user slug}/badges


## saas-train |Training/webinars
+ admin/train/training |Webinars, 
+ admin/train/types |Type Management
+ admin/train


# Biz Gym Specific

## bizgym-swot
+ admin/swot/consumer
+ admin/swot/consumer

Dashbaord
dashboard
dashboard/error


Setup
setup/brand
setup/brand/create
setup/brand/intake
setup/brand/social
setup/brand/subscribe

dashboard/brand/billing
dashboard/brand/invite/claim
dashboard/brand/invite/new
dashboard/brand/invite
