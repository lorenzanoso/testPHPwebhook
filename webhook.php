<?php
// convert JSON to PHP
$data = json_decode($_REQUEST['rawRequest'], true);
// write data to a file
file_put_contents('webhook_test.txt', print_r($data, true), FILE_APPEND);
?>
