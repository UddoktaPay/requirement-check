<?php

/*
 * Check minimum requirements.
 */

if (version_compare(PHP_VERSION, '7.4.0') < 0) {
	die("Current PHP version is " . phpversion() . "! PHP version required for running UddoktaPay is PHP 7.4. Please check and upgrade your current PHP version.");
}

if (!function_exists('ioncube_loader_version')) {
 	die("ionCube Loader function is missing! UddoktaPay requires ionCube Loader function to run, Please check and enable the extension or Contact with hosting provider.");
}

function GetIonCubeLoaderVersionForUddoktaPay()
{
	if (function_exists('ioncube_loader_version')) {
		$version = ioncube_loader_version();
		$a = explode('.', $version);
		$count = count($a);
		if ($count == 3) {
			return $version;
		} elseif ($count == 2) {
			return $version . ".0";
		} elseif ($count == 1) {
			return $version . ".0.0";
		}
		$version = implode('.', array_slice($a, 0, 3));
		return $version;
	}
	return 'Not Found!';
}

if (version_compare(GetIonCubeLoaderVersionForUddoktaPay(), '11.0.0') < 0) {
	die("Current ionCube Loader version is " . GetIonCubeLoaderVersionForUddoktaPay() . "! minimum ionCube Loader version required for running UddoktaPay is 11.0.0 or higher. Please check and upgrade your current ionCube Loader version or Contact with hosting provider.");
}

if(!extension_loaded('pdo')){
	die("PDO PHP extension missing! UddoktaPay requires PDO PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('mysqli')){
	die("Mysqli PHP extension missing! UddoktaPay requires Mysqli PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('curl')){
	die("cURL PHP extension missing! UddoktaPay requires cURL PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('fileinfo')){
	die("Fileinfo PHP extension missing! UddoktaPay requires Fileinfo PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('openssl')){
	die("Openssl PHP extension missing! UddoktaPay requires Openssl PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('zip')){
	die("ZIP PHP extension missing! UddoktaPay requires ZIP PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('bcmath')){
	die("BCMath PHP extension missing! UddoktaPay requires BCMath PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('ctype')){
	die("Ctype PHP extension missing! UddoktaPay requires Ctype PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('json')){
	die("JSON PHP extension missing! UddoktaPay requires JSON PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('mbstring')){
	die("Mbstring PHP extension missing! UddoktaPay requires Mbstring PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('xml')){
	die("XML PHP extension missing! UddoktaPay requires XML PHP extension to run, Please check and enable the extension.");
}
if(!extension_loaded('tokenizer')){
	die("Tokenizer PHP extension missing! UddoktaPay requires Tokenizer PHP extension to run, Please check and enable the extension.");
}

echo 'This server is ready to use UddoktaPay';
