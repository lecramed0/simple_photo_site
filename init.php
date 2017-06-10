<?php
error_reporting(E_ALL); //change to 0 if somehow reporting
ini_set('display_errors', 0); //do not display errors
ini_set('log_errors', 1); //do log errors

//defining constants
define("SITEURL", 'http://photo_site.com'); //can use as the beginning part of hrefs
define("SITEINDEX", 'http://photo_site.com/index.php');
define('ROOTDIRECTORY', '/home/photo_site/public_html'); //define the root directory (use for php includes only, otherwise use www links)

$current_date = new DateTime();
$current_date_string = $current_date->format('Y-m-d H:i:s');
$current_year_string = $current_date->format('Y');
$current_month_string = $current_date->format('m');

require ROOTDIRECTORY.'/functions/functions.php';

//initializing $errors as an array
$errors = array();
?>
