<?php
require_once '../lib/helpers.php';
require_once '../config/constants.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    logError($conn->connect_error, $databaseError);
    http_response_code(500);
    include('../admin/error-pages/500.php');
    exit;
}

?>