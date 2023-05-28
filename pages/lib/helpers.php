<?php 
session_start();
require_once '../../models/blog-genre-model.php';


function createTest($conn, $test_name){
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO tlb_test(test_name) VALUES(?)");

    // set parameters and execute
    $stmt->bind_param("s", $test_name);
    $stmt->execute();

    if($stmt->affected_rows == 1){
        $_SESSION['success'] = 'New test successful.';
    }

    $stmt->close();
    $conn->close();
}
function createBlogGenre($conn, $genreName, $genreIcon){
    $stmt = $conn->prepare("INSERT INTO tlb_blog_genre(genre_name, genre_icon) VALUES(?, ?)");

    // set parameters and execute
    $stmt->bind_param("ss", $genreName, $genreIcon);
    $stmt->execute();

    if($stmt->affected_rows == 1){
        $_SESSION['success'] = 'New genre added successfully.';
    }

    $stmt->close();
    $conn->close();
}
function fetchAllBlogGenres($conn){
    $stmt = $conn->prepare("SELECT * FROM tlb_blog_genre");
    $stmt->execute();

    $result = $stmt->get_result();
    $records = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    $allGenres = array();
    foreach($records as $record){
        // Store each of the variable of the blog genre in its own variable	 	
        $genreName = $record['genre_name'];
        $genreIcon = $record['genre_icon'];
        $genreId = $record['blog_genre_id'];
        $isDeleted = $record['is_deleted'];
        $genrePosts = $record['genre_posts'];
        $dateCreated = $record['date_created'];

        $blogGenre = new BlogGenreModel($genreName, $genreIcon, $genreId, $isDeleted, $genrePosts, $dateCreated);
        array_push($allGenres, $blogGenre);
    }

    return $allGenres;
}
function createBlogPost($conn, $postTitle, $postBody, $postGenre, $postMedia){
    $stmt = $conn->prepare("INSERT INTO tlb_blog_post(post_title, post_body, post_author, post_genre, post_media) VALUES(?, ?, ?, ?, ?)");

    $user = 1;

    // Set parameters and execute
    $stmt->bind_param("ssiis", $postTitle, $postBody, $user, $postGenre, $postMedia);
    $stmt->execute();

    if ($stmt->affected_rows == 1) {
        $_SESSION['success'] = 'New blog post added successfully.';
    }
    else{
        echo $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
function createAdminUser($conn, $username, $email, $password){
    //TODO: Implement random verification code and send it via email.
    //$randomCode = rand(9999,100000);
    
    $stmt = $conn->prepare("INSERT INTO `tlb_user`(`username`, `email`, `password`) VALUES (?, ?, ?)");

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // set parameters and execute
    $stmt->bind_param("sss", $username, $email, $hashedPassword);
    $stmt->execute();

    if($stmt->affected_rows == 1){
        $_SESSION['success'] = 'New user has been created successfully.';
    }

    $stmt->close();
    $conn->close();
}
function logError($message, $errorType) {
    $logFile = "../../error-log.txt";  // Specify the log file path and name with .txt extension
    $timestamp = date("[Y-m-d H:i:s]");  // Add a timestamp to the log entry

    // Format the log entry with the timestamp and error message
    $logEntry = $errorType . " - " . $timestamp . " - " . $message . PHP_EOL;

    // Append the log entry to the log file
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}