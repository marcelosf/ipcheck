<?php

include_once 'ipcheck.class.php';
include_once 'ip.config.php';


class Remote {

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