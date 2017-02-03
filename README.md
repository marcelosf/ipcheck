# Remote Address Check

## Description
 
This library aims to provide the access control in web pages against the visitor's IP address.

It's a very simple library, and can even be used like an exemple on how to control the access against IP Remote adresses.

## Configuration

Allowed IP addresses may to be informed on ip.congfig.php as follows:


* allowed:
 An array of allowed IP address. It's not necessary to specify the full address.

```
 $allowed  = [

 	
	'192.168'

]; 

``` 
This configuration allow access to all IP addresses prefixed with 192.168.

* redirect: If the visitor's IP address is not allowed, than it's browser will be redirected to the URL informed here.

```
$redirect = '<url to redirect>';

```
