<?php

include_once 'ipcheck.class.php';
include_once 'ip.config.php';


class Remote {


	/**
	*
	* This function will be used to control the page access against the Visitor's IP.
	* It must be called on every page that has restrict IP access.
	*
	*/
	static function validate() {

		global $allowed;

		global $redirect;

		$ipcheck = new IPCheck($allowed);

		$check = $ipcheck->checkIPs();

		if (!$check) {

			header('Location:' . $redirect);

		}

	}

}