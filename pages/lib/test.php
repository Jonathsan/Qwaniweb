<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO tlb_test(test_name) VALUES(?)");
$stmt->bind_param("s", $test_name);

// set parameters and execute
$test_name = "Test no. 1";
$stmt->execute();

$test_name = "Test no. 2";
$stmt->execute();

$test_name = "Test no. 3";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?> 