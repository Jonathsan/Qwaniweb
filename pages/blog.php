<!DOCTYPE html>
<head>
    <title>Let's Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../scripts/css/style.css">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../media/favicon/favicon-16x16.png">
    <link rel="manifest" href="../media/favicon/site.webmanifest">
    </head>
    <body>
    <nav class="w-full nav flex flex-col lg:flex-row items-center px-4 py-2 justify-between bg-primary-color text-white">
        <div class="flex flex-row w-full justify-between items-center">
            <div class="nav-brand nav-logo w-1/3">
                <div class="brand-logo-container w-full">
                    <a href="../index.html" class="">
                        <img src="../media/logos/qwani-logo.png" class="w-1/2 lg:w-1/4" alt="">
                    </a>
                </div>
            </div>
            <div class="nav-item text-xl font-medium text-centers flex flex-row space-x-5 items-center w-auto">
                <div class="nav-item text-xl font-medium text-center">
                    <a href="../index.html" >Home</a>
                </div>
                <div class="nav-item text-xl font-medium text-center">
                    <a href="about-page.html" >
                        About Us
                    </a>
                </div>
                <div class="nav-item text-xl font-medium text-center">
                    <a href="book-details.html" >Publication</a>
                </div>
                <div class="nav-item text-xl font-medium text-center">
                    <a href="contact-us-page.html" >Contact Us</a>
                </div>
                <div class="nav-item text-xl font-medium text-center">
                    <a href="qwani-team-page.html" >Team</a>
                </div>
                <div class="nav-item text-xl font-medium text-center">
                    <a href="authors-page.html" >Writers</a>
                </div>
                <div class="nav-item text-xl font-medium text-center">
                    <a href="events-page.html" >Events</a>
                </div>
                <div class="nav-search hidden flex-row flex items-center bg-highlight-color rounded space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input type="text" name="" id="" class="bg-highlight-color w-28 rounded text-black outline-none bg-transparent" required placeholder="Search">
                    <button class="nav-search-btn text-black bg-secondary-color p-2 rounded-r">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <section class="hero px-4 py-4 w-full px-40">   
        <div class="hero-heading my-8">
            <span class="text-6xl font-bold">
                Welcome to our blog
            </span>
        </div>
        <div class="hero-body">
            
        </div>
    </section>
    <div class="footer-container bg-primary-color text-white px-4 py-6 w-full">
        <footer class="flex flex-col lg:flex-row lg:justify-between space-y-10 lg:space-y-0 w-full items-start h-full items-center lg:items-start">
            <div class="footer-group flex flex-row items-center justify-around w-full">
                <div class="footer-section-brand items-center w-2/3 lg:w-1/4 flex flex-col h-full space-y-3 lg:space-y-4">
                    <div class="footer-logo flex justify-center">
                        <a href="../index.html" class="footer-logo flex justify-center">
                            <img src="../media/logos/qwani-logo.png" class="w-5/6" alt="">
                        </a>
                    </div>
                    <div class="footer-section-body flex flex-col items-center">
                        <span>
                            QWANI
                        </span>
                        <span class="text-sm">
                            All Rights reserved 2023
                        </span>
                    </div>
                    <div class="footer-section-footer flex flex-row space-x-10 my-4">
                        <div class="member-social-icon">
                            <a href="https://www.instagram.com/qwanibok/">
                                <img src="../media/social-media-icons/instagram.png" class="w-8" alt="">
                            </a>
                        </div>
                        <div class="member-social-icon">
                            <a href="https://twitter.com/qwanibok">
                                <img src="../media/social-media-icons/twitter.png" class="w-8" alt="">
                            </a>
                        </div>
                        <div class="member-social-icon">
                            <a href="mailto:qwanitrust@gmail.com">
                                <img src="../media/social-media-icons/gmail.png" class="w-8" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-section-subscribe w-2/3 lg:w-1/4 flex flex-col h-5/6 space-y-3 lg:space-y-4 items-center lg:items-start">
                    <div class="footer-section-title">
                        <span class="flex flex-row items-center w-full space-x-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-base">
                                    Stay up to date with Qwani
                                </span>
                            </div>
                        </span>
                    </div>
                    <div class="footer-section-body flex flex-col space-y-3 w-full items-center lg:items-start">
                        <div class="footer-section-input">
                            <input type="email" name="subscribe" id="subscribe" class="w-full outline-none focus:outline-white focus:outline-offset-2 p-2 bg-transparent border-b-2 placeholder:text-white text-white" required placeholder="Enter your email address">
                        </div>
                        <div>
                            <button class="subscribe-btn bg-important-color p-2 rounded-lg">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-group flex flex-row items-center justify-around w-full">
                <div class="footer-section-company w-2/3 lg:w-1/4 flex flex-col h-5/6 space-y-3 lg:space-y-4 items-center lg:items-start">
                    <div class="footer-section-title">
                        <span class="text-2xl font-medium">
                            Qwani
                        </span>
                    </div>
                    <div class="footer-section-body">
                        <div class="footer-section-links text-lg">
                            <a href="qwani-team-page.html" >Team</a>
                        </div>
                        <div class="footer-section-links text-lg">
                            <a href="authors-page.html" >Writers</a>
                        </div>
                        <div class="footer-section-links text-lg">
                            <a href="events-page.html" >Events</a>
                        </div>
                        <div class="footer-section-links text-lg">
                            <a href="book-details.html" >Publication</a>
                        </div>
                    </div>
                </div>
                <div class="footer-section-support w-2/3 lg:w-1/4 flex flex-col h-5/6 space-y-3 lg:space-y-4 items-center lg:items-start">
                    <div class="footer-section-title">
                        <span class="text-2xl font-medium">
                            Support
                        </span>
                    </div>
                    <div class="footer-section-body">
                        <div class="footer-section-links text-lg">
                            <a href="contact-us-page.html" >Contact Us</a>
                        </div>
                        <div class="footer-section-links text-lg">
                            <a href="about-page.html" >About Us</a>
                        </div>
                        <div class="footer-section-links text-lg">
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
