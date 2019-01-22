<?php
ini_set('display_errors', true);
$a = array("foo" => "bar");
error_reporting(E_ERROR);
echo $a["foo"];
echo $a[foo];
echo "<hr />";
error_reporting(E_ALL);
echo $a["foo"];
echo $a[foo];