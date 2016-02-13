#!/bin/bash
# This script is used to easily rebuild the application
#
# Run it :
# bash scripts/post-build.sh

# Include functions
source /var/lib/jenkins/jobs/BizGym/workspace/scripts/functions.sh

# Register sigint handler
trap quit_gracefully SIGINT

# Go to the build directory
say_loud "Start building" "BUILD"
cd /var/www/BizGym/

say_info "Refreshing vendor" "BUILD"
rm composer.lock
rm vendor -r
set_composer

say_info "Get latest snapshoot" "BUILD"
git status
git pull origin master

say_info "Updating..." "BUILD"
php composer.phar install --quiet
php artisan migrate:application --env=staging --refresh=true

say_info "Synchronize revision" "BUILD"
git push origin master

say_info "Checking php service"
ps auxww | grep php

say_loud "Finished" "BUILD"