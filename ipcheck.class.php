<?php


/**
*	Classe para tratamento de IPS
*/
class IPCheck {
	
	// Endereços permitidos
	private $allow = array();

	// Endereço de IP do visitante.
	private $remote;

	// Construtor da classe.
	public function __construct($allow) {

		$this->allow = $allow;

		$this->remote = $_SERVER['REMOTE_ADDR'];

	}

	// Checa se o IP do visitante confere com a lista de IPS
	public function checkIPs () {

		$validation = true;

		foreach ($this->allow as $key => $ip) {
			
			$validation = ($this->matchIP($ip) && $validation);

		}

		return $validation;

	}


	/**
	* Compara o endereço do visitante com 
	* o endereço permitido.
	* Retorno: boolean.
	*/
	private function matchIP($allowed) {

		$remote_parts = explode('.', $this->remote);

		$allowed_parts = explode('.', $allowed);

		$test = true;

		foreach ($allowed_parts as $key => $value) {
			
			$test = (($value === $remote_parts[$key]) && $test);

			$t = $test ? 1 : 0;

			// printf('allowed: %s, remote: %s, test: %s<br>', $value, $remote_parts[$key], $t);

		}

		return $test;

	}


}