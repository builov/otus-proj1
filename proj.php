<?php

require_once 'vendor/autoload.php';
//(()()()()))((((()()()))(()()()(((( )))))))
//echo $argv[1];

try {	
	echo (MyLib::check_str($argv[1])) ? 'It`s ok' : 'String has error';	
} catch (Exception $e) {
	echo 'Error: ' . $e->getMessage();
}