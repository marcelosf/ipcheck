<?php

global $allowed;
global $redirect;





/**
*
* Allowed IP Addresses
*
*/
 $allowed  = [

 	
	'123.45.3.4',
	'10.',
        '192.168'

];


/**
* Redirect page.
* 
* If the visitor IP address does not match, its browser
* will redirect to this page.
*/
$redirect = 'http://www.iag.usp.br';


