<?php

require_once 'vendor/autoload.php';
//echo $argv[1];

$str = file_get_contents($argv[1]);

try {	
	echo (MyLib::check_str($str)) ? 'It`s ok' : 'String has error';	
} catch (Exception $e) {
	echo 'Error: ' . $e->getMessage();
}