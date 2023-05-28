<?php 
    require_once '../config/database.php';
    require_once '../lib/helpers.php';
    require_once '../../models/blog-genre-model.php';

    session_start();
?>

<!DOCTYPE html>
<head>
<title>Create Blog Post</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="../../scripts/css/style.css">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="../../media/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../media/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../media/favicon/favicon-16x16.png">
<link rel="manifest" href="../../media/favicon/site.webmanifest">
</head>
<body class="w-full h-screen overflow-hidden">
    <section class="admin-dash flex flex-row w-full h-full">
        <div class="w-1/6 side-bar bg-primary-color h-full flex flex-col">
            <div class="dashboard-brand p-4">
                <img src="../../media/logo/qwani-logo.png" alt="">
            </div>
            <div class="dashboard-link flex justify-center items-center p-4">
                <a href="#" class="text-2xl text-white">View Blog Post</a>
            </div>
            <div class="dashboard-link flex justify-center items-center p-4 selected-dashlink">
                <a href="#" class="text-2xl text-white">Create Blog Post</a>
            </div>
            <div class="dashboard-link flex justify-center items-center p-4">
                <a href="#" class="text-2xl text-white">Logout</a>
            </div>
        </div>
        <div class="w-5/6 p-6 main-dashboard-area overflow-auto flex flex-row h-full">
            <div class="w-2/3 flex flex-col">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="my-3 w-11/12 py-2.5 flex flex-row bg-green-100 text-green-800 text-2xl items-center font-medium px-2.5 py-0.5 dark:bg-green-900 dark:text-green-300 rounded-lg">
                        <div class="success-icon">
                            <svg aria-hidden="true" fill="currentColor" class="w-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="">
                                <?php echo $_SESSION['success'] ?>
                            </span>
                        </div>
                    </div>
                    <?php unset($_SESSION['success']) ?>
                <?php endif ?>
                <?php if (isset($_SESSION['fail'])): ?>
                    <div class="my-3 w-11/12 py-2.5 flex flex-row bg-red-100 text-red-800 text-2xl items-center font-medium px-2.5 py-0.5 dark:bg-red-900 dark:text-red-300 rounded-lg">
                        <div class="success-icon">
                            <svg aria-hidden="true" fill="currentColor" class="w-10" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="">
                                <?php echo $_SESSION['fail'] ?>
                            </span>
                        </div>
                    </div>
                    <?php unset($_SESSION['fail']) ?>
                <?php endif ?>
                <div class="dashboard-area-title">
                    <span class="text-6xl font-bold">
                        Add blog post
                    </span>
                </div>
                <div class="create-post-form my-10">
                    <form action="./create-blog-post-backend.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group flex flex-col w-full mb-4">
                            <div class="form-label">
                                <span class="text-3xl lg:text-xl font-medium">
                                    Blog Post Title
                                </span>
                            </div>
                            <div class="form-input w-full my-2">
                                <input type="text" required placeholder="Enter post title here" required name="blog-post-title" class="w-full lg:w-11/12 p-4 lg:p-3 placeholder:text-3xl lg:placeholder:text-base rounded-lg bg-highlight-color outline-none">
                            </div>
                        </div>
                        <div class="form-group flex flex-col w-full mb-4">
                            <div class="form-label">
                                <span class="text-3xl lg:text-xl font-medium">
                                    Blog Post
                                </span>
                            </div>
                            <div class="form-input w-full my-2">
                                <textarea required placeholder="Enter the post body here" required name="blog-post-body" autocomplete="off" class="overflow-y-auto resize-none h-96 w-11/12 p-4 lg:p-3 placeholder:text-3xl lg:placeholder:text-base rounded-lg bg-highlight-color outline-none"></textarea>
                            </div>
                        </div>
                        <div class="form-group flex flex-col w-full mb-4">
                            <div class="form-label">
                                <span class="text-3xl lg:text-xl font-medium">
                                    Blog Media (Photos)
                                </span>
                            </div>
                            <div class="form-input w-full my-2">
                                <!-- TODO: Allow multiple media uploads -->
                                <input type="file" name="blog-post-media" id="blog-post-media" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group flex flex-col w-full mb-4">
                            <div class="form-label">
                                <span class="text-3xl lg:text-xl font-medium">
                                    Select Post Genre
                                </span>
                            </div>
                            <div class="form-input w-full my-2">
                                <select name="blog-post-genre" required id="blog-post-genre" required class="w-full lg:w-11/12 p-4 lg:p-3 placeholder:text-3xl lg:placeholder:text-base rounded-lg bg-highlight-color outline-none">
                                    <?php foreach (fetchAllBlogGenres($conn) as $genre): ?>
                                        <option value="<?php echo $genre->getGenreId(); ?>">
                                            <?php echo($genre->getGenreName()); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="w-full flex justify-center my-2">
                            <button class="bg-important-color lg:p-2 w-1/2 text-white rounded-lg lg:text-xl p-4 text-4xl" name="create-blog-post-btn">Add blog post</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-1/3 h-full space-y-4">
                <div class="w-full bg-primary-color text-white rounded-lg px-4 py-4 flex flex-col">
                    <div class="dashboard-area-title">
                        <span class="text-3xl font-bold">
                            Add New Genre
                        </span>
                    </div>
                    <div class="create-genre-form my-4">
                        <form action="create-blog-post-backend.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group flex flex-col w-full mb-4">
                                <div class="form-label">
                                    <span class="text-3xl lg:text-xl font-medium">
                                        Genre Name
                                    </span>
                                </div>
                                <div class="form-input w-full my-2">
                                    <input type="text" required placeholder="Enter genre name here" name="genre-name" class="w-full lg:w-11/12 p-4 lg:p-3 placeholder:text-3xl lg:placeholder:text-base rounded-lg bg-highlight-color outline-none">
                                </div>
                            </div>
                            <div class="form-group flex flex-col w-full mb-4">
                                <div class="form-label">
                                    <span class="text-3xl lg:text-xl font-medium">
                                        Genre Icon
                                    </span>
                                </div>
                                <div class="form-input w-full my-2">
                                    <input type="file" name="genre-icon" id="genre-icon" required accept="image/*">
                                </div>
                            </div>
                            <div class="w-full flex justify-center my-2">
                                <button class="bg-important-color lg:p-2 w-2/3 text-white rounded-lg lg:text-xl p-4 text-4xl" name="create-genre-btn">Add genre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="../../scripts/js/main.js"></script>
</html>