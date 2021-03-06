#!/bin/bash
function quit {
	if [ -z "$1" ]
		then
		msg="Something goes wrong!"
	else
		msg=$1
	fi
	say_error "$msg"
	exit
}

function quit_gracefully {
	quit "Aborted!"
}

function _say {
	# Capture label arg
	if [ "" == "$4" ]
		then
		LABEL="INSTALL_"$3
	else
		LABEL=$4"_"$3
	fi
	echo "$(tput bold)$(tput setaf $2)[$LABEL] $1"
	echo -en '\e[0m';
}

function say_loud {
	_say "$1" 5 PHASE "$2"
}

function say_ok {
	_say "$1" 2 OK "$2"
}

function say_info {
	_say "$1" 4 INFO "$2"
}

function say_warning {
	_say "$1" 3 WARNING "$2"
}

function say_error {
	_say "$1" 1 ERROR "$2"
}

function check_package {
	say_info "Checking for $1" "$2"
	PKG_OK=$(dpkg-query -W --showformat='${Status}\n' $1|grep "install ok installed")
	if [ "" == "$PKG_OK" ]; then
		say_warning "$1 is not installed yet, installing..." "$2"
		sudo apt-get install $1
	else
		say_ok "$1 installed" "$2"
	fi
}

function ensure_system {
	check_package apache2
	check_package php5
	check_package libpcre3-dev
}

function ensure_phar {
	say_info "Checking for Phar module before installing Composer"
	PHAR_OK=$(php -m|grep "Phar")
	if [ "" == "$PHAR_OK" ]; then
		say_warning "Phar is not loaded!"
		say_info "Installing..."
		sudo apt-get install php-pear php5-dev 
		sudo pecl install phar
		sudo service apache2 restart
	else
		say_ok "Phar loaded!"
	fi
}

function ensure_curl {
	say_info "Checking for cURL module before installing Composer"
	CURL_OK=$(php -m|grep "curl")
	if [ "" == "$CURL_OK" ]; then
		say_warning "cURL is not loaded!"
		say_info "Installing..."
		sudo apt-get install php-pear php5-dev php5-curl
		sudo pecl install curl
		sudo service apache2 restart
	else
		say_ok "cURL loaded!"
	fi
}

function set_composer {
	curl -s http://getcomposer.org/installer | php
}