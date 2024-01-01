<?php
// hide all error in fontend
error_reporting(0);

// Set error log file and enable error logging
// ini_set('error_log', "/php__error.txt");
// ini_set('log_errors', 'on');

// // Set error reporting level (E_ALL includes all types of errors)
// // error_reporting(E_ALL);

// // Your code
// echo $k;

// custom error
function custom_error_handler($sev, $msg, $fils, $line) {
	echo "error : {$sev}  {$msg} {$fils} {$line}";
}

set_error_handler("custom_error_handler");
// echo  $k;
ini_get('error_log');
