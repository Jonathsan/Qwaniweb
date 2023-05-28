<?php
// class Database{
//     function connect() {
//         require_once './database.php';

//         // Create connection
//         $conn = new mysqli($servername, $username, $password, $dbname);
    
//         // Check connection
//         if ($conn->connect_error) {
//             die("Connection failed: " . $conn->connect_error);
//         }

//         return $conn;
//     }
// }


require_once './database.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);