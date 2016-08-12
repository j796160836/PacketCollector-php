<?php
require_once("http_request.php");
$file_path = "./files/data.txt";

$http_request = new http_request();
$response = $http_request->raw();
$response .= "---\n\n";

file_put_contents($file_path, $response, FILE_APPEND | LOCK_EX);
?>