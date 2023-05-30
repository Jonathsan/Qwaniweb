<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/database.php';
require_once '../lib/helpers.php';
require_once '../config/constants.php';

session_start();

//TODO: Make the code below resuable

// Creating a blog post
if (isset($_POST["create-blog-post-btn"])) {
    // Store the values in variables for easier retrieval
    $blogPostTitle = $_POST["blog-post-title"];
    $blogPostBody = $_POST["blog-post-body"];
    $blogPostMedia = $_FILES["blog-post-media"];
    $blogPostGenre = $_POST["blog-post-genre"];

    if (empty($blogPostMedia["name"])) {
        // File is empty
        $_SESSION['success'] = "Blog post has been added successfully";
        createBlogPost($conn,$blogPostTitle,$blogPostBody,$blogPostGenre, NULL);
    } 
    
    elseif ($blogPostMedia["size"] == 0) {
        // File has a size of zero
        $_SESSION['fail'] = "Sorry, there was an error uploading the media";
        logError($zeroSizeFile, $blogPostError);
    } 
    
    elseif ($blogPostMedia["error"] !== UPLOAD_ERR_OK) {
        $_SESSION['fail'] = "Sorry, there was an error uploading the media";
        logError($blogPostMedia["error"], $arbitraryError);
    } 
    
    else {
        $targetDir = "../../media/uploads/blog-media/";
        $targetFile = $targetDir . $blogPostTitle . '.' . pathinfo($blogPostMedia["name"], PATHINFO_EXTENSION);
        $newFileName = $blogPostTitle . '.' . pathinfo($blogPostMedia["name"], PATHINFO_EXTENSION);

        $uploadOk = 1;

        // Check if image file is a valid image
        $check = getimagesize($blogPostMedia["tmp_name"]);
        if ($check === false) {
            $_SESSION['fail'] = "File is not an image.";

            logError($notImage, $blogPostError);
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
            $_SESSION['fail'] = "Sorry, file already exists.";

            logError($alreadyExists, $blogPostError);
            $uploadOk = 0;
        }

        // Check file size
        if ($blogPostMedia["size"] > 500000) {
            $_SESSION['fail'] = "Sorry, your file is too large.";

            logError($fileTooLarge, $blogPostError);
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk === 0) {
            $_SESSION['fail'] = "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($blogPostMedia["tmp_name"], $targetFile)) {
                // Create new genre in the DB
                createBlogPost($conn,$blogPostTitle,$blogPostBody,$blogPostGenre, $newFileName);

                $_SESSION['success'] = "Blog post has been added successfully";

                echo $_SESSION['success'];
            } else {
                $_SESSION['fail'] = "Sorry, there was an error creating the blog post";

                logError($fileUploadFailed." - ". error_get_last(), $blogPostError);
            }
        }
    }
    header("Location: create-blog-post.php");
}

// Below is the code for creating and uploading the genre icon and adding it to the database
if (isset($_POST["create-genre-btn"])) {
    // Upload the genre icon
    $genreName = $_POST['genre-name'];
    $targetDir = "../../media/uploads/genre-icons/";
    $targetFile = $targetDir . $genreName . '.' . pathinfo($_FILES["genre-icon"]["name"], PATHINFO_EXTENSION);
    $newFileName = $genreName . '.' . pathinfo($_FILES["genre-icon"]["name"], PATHINFO_EXTENSION);

    echo $newFileName;
    $uploadOk = 1;

    // Check if image file is a valid image
    $check = getimagesize($_FILES["genre-icon"]["tmp_name"]);
    if ($check === false) {
        $_SESSION['fail'] = "File is not an image.";

        logError($notImage, $blogGenreError);
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $_SESSION['fail'] = "Sorry, file already exists.";

        logError($alreadyExists, $blogGenreError);
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["genre-icon"]["size"] > 500000) {
        $_SESSION['fail'] = "Sorry, your file is too large.";

        logError($fileTooLarge, $blogGenreError);
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk === 0) {
        $_SESSION['fail'] = "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["genre-icon"]["tmp_name"], $targetFile)) {
            // Create new genre in the DB
            createBlogGenre($conn,$genreName,$newFileName);

            $_SESSION['success'] = "Genre has been created successfully";
        } else {
            $_SESSION['fail'] = "Sorry, there was an error creating the genre";
            
            logError($fileUploadFailed." - ". error_get_last(), $blogGenreError);
        }
    }

    header("Location: create-blog-post.php");
}
?>
