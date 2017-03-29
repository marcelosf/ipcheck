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
			
			if ($this->matchIP($ip)) {
                            
                            return true;
                            
                        }

		}

		return false;

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

		foreach ($allowed_parts as $key => $value) {
			
			if ($value !== $remote_parts[$key]) 
                        {
                            
                            return false;
                            
                        }

                }
                
		return true;

	}


}