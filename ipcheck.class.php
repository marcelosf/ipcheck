<?php


/**
* IP Adreess check.
*
*/
class IPCheck {
	
	// Allowed addresses
	private $allow = array();

	// Visitor's IP address.
	private $remote;

	// Class constructor.
	public function __construct($allow) {

		$this->allow = $allow;

		$this->remote = $_SERVER['REMOTE_ADDR'];

	}

	
	/**
	*
	* Check if the Visitor's IP address is able to access the page.
	*
	*/
	public function checkIPs () {

		$validation = true;

		foreach ($this->allow as $key => $ip) {
			
			$validation = ($this->matchIP($ip) && $validation);

		}

		return $validation;

	}


	/**
	* Compare the visitor's IP address against the IP adresses filled
	* on ip.config.php file.
	*
	* Return: boolean.
	*/
	private function matchIP($allowed) {

		$remote_parts = explode('.', $this->remote);

		$allowed_parts = explode('.', $allowed);

		$test = true;

		foreach ($allowed_parts as $key => $value) {
			
			$test = (($value === $remote_parts[$key]) && $test);

			$t = $test ? 1 : 0;

		}

		return $test;

	}


}