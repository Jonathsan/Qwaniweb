<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/database.php';
require_once '../lib/helpers.php';

session_start();

// createAdminUser($conn, 'QwaniAdmin', 'qwanitrust@gmail.com', 'qw@nitrust2023.');

// echo $_SESSION['success'];
// unset($_SESSION['success']);


createBlogPost($conn,'Science Moto Moto','Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic officia praesentium, cum, possimus iste ad tenetur porro quos adipisci cupiditate tempore delectus ea magnam reprehenderit quibusdam eaque veniam soluta quod.', 5, "Science Moto Moto.png");

echo $_SESSION['success'];
unset($_SESSION['success']);
?> 


