#!/bin/bash
# This script is used to cleanup application build
#
# Run it :
# bash scripts/jenkins-post-build.sh

# Include functions
source /var/lib/jenkins/jobs/BizGym/workspace/scripts/functions.sh

# Register sigint handler
trap quit_gracefully SIGINT

# Go to the build directory
say_loud "Cleanup..." "BUILD"
cd /var/lib/jenkins/jobs/BizGym/workspace

say_info "Refreshing vendor" "BUILD"
rm composer.lock
rm vendor -r

say_loud "Finished" "BUILD"