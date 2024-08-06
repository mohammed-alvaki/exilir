<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--aos library-->
    <link rel="icon" href="imgs/icon.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/registeration.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/blankpage.css">
    <link rel="stylesheet" href="css/alumni.css">
    <link rel="stylesheet" href="css/404.css">
    <link rel="stylesheet" href="css/news.css">
    <title>Contact Page</title>
</head>

<body>


    <main class="position-relative">

       <?php
       include "header.php";
       ?>

        <!-- -------------image start-------------- -->

        <div class="bg-part">
            <div class="inner-part">
                <div class="container text-white">
                    <h2 class="fw-bold" data-aos="fade-up">Contact</h2>
                    <div data-aos="fade-up" data-aos-delay="100"><a href="index.php"
                            class="text-decoration-none text-reset fw-bold fs-3">Home </a><span class="fs-3">
                            >> Contact</span></div>
                </div>
            </div>
        </div>
        <!-- -------------image end-------------- -->


        <!-- ----------contact start------------ -->
        <div class="contact bg-light">
            <div class="offices px-4 px-sm-0">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-12 col-lg-4 p-3 p-xl-5 mb-4 mb-lg-0 bg-white rounded">
                            <h2 class="fw-bold" data-aos="fade-up">Melbourne office</h2>
                            <p data-aos="fade-up" data-aos-delay="200">121 King Street,<br>
                                Melbourne 1200,<br>
                                Australia</p>
                        </div>
                        <div class="col-12 col-lg-4 p-3 p-xl-5 mb-4 mb-lg-0 bg-white rounded">
                            <h2 class="fw-bold" data-aos="fade-up">Sydney Office</h2>
                            <p data-aos="fade-up" data-aos-delay="200">62 Collins Street West,<br>
                                Sydney 3000,<br>
                                Australia</p>
                        </div>
                        <div class="col-12 col-lg-4 bg-white p-3 p-xl-5 rounded">
                            <h2 class="mb-4 fw-bold" data-aos="fade-up">Socials</h2>
                            <div class="icons" data-aos="fade-up" data-aos-delay="200">
                                <ul class="list-unstyled mt-3 d-flex">
                                    <li class="list-item me-3">
                                        <a href="" class="list-link text-decoration-none text-white">
                                            <span class="text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="#ffffff"
                                                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-item me-3">
                                        <a href="" class="list-link text-decoration-none text-white">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#ffffff"
                                                        d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-item me-3">
                                        <a href="" class="list-link text-decoration-none">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="#ffffff"
                                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-item me-3">
                                        <a href="" class="list-link text-decoration-none">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path fill="#ffffff"
                                                        d="M386.1 228.5c1.8 9.7 3.1 19.4 3.1 32C389.2 370.2 315.6 448 204.8 448c-106.1 0-192-85.9-192-192s85.9-192 192-192c51.9 0 95.1 18.9 128.6 50.3l-52.1 50c-14.1-13.6-39-29.6-76.5-29.6-65.5 0-118.9 54.2-118.9 121.3 0 67.1 53.4 121.3 118.9 121.3 76 0 104.5-54.7 109-82.8H204.8v-66h181.3zm185.4 6.4V179.2h-56v55.7h-55.7v56h55.7v55.7h56v-55.7H627.2v-56h-55.7z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -------------map start-------------- -->

            <div class="map-content mt-5 mb-5">
                <div class="container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d35068.90580285712!2d28.954526402477743!3d41.01083683026603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2str!4v1719946566130!5m2!1sen!2str"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="
                    my-3 bg-white p-3 p-sm-5 rounded"></iframe>
                </div>
            </div>
            <!-- -------------map end-------------- -->


            <!-- -------------form start-------------- -->
            <div class="form-content px-3 px-sm-0">
                <div class="container p-3 p-sm-5 bg-white rounded">
                    <h2 class="fw-bold mb-3">Write to us</h2>

                    <form action="">
                        <input type="text" placeholder="Your Name" class="p-2 mb-4 w-100 rounded">
                        <input type="email" placeholder="Email" class="p-2 mb-4 w-100 rounded">
                        <textarea name="" placeholder="Enter your descriptions here..." id=""
                            class="py-3 px-2 w-100 rounded" rows="10"></textarea>
                        <a href="" type="button" class="py-2 px-4 fw-bold text-white mt-4 text-decoration-none">Send
                            Now</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- -------------form end-------------- -->


        <!-- ---sign up start--- -->
        <div class="sign-up">
            <div class="container">
                <div class="row px-3">
                    <div class="form-part p-4 p-sm-5 col-12 col-lg-6 d-flex flex-column justify-content-center">
                        <h2 class="fw-bold text-white">Sign up for email alerts</h2>
                        <p class="text-white mb-5 fs-5">Stay current with our latest insights</p>
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-lg-8 pb-3 pb-lg-0">
                                    <input type="email" class="rounded p-3 w-100" placeholder="Enter Email Here">
                                </div>
                                <div class="col-12 col-lg-4">
                                    <button type="submit" class="btn btn-warning p-3 fw-bold w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="text-part col-12 col-lg-5 ms-lg-auto px-0 pt-5 pb-4 py-lg-0 mt-lg-4">
                        <div class="row">
                            <div class="info col-6">
                                <ul class="list-unstyled">
                                    <li class="list-item"><a href="contact.php"
                                            class="list-link text-decoration-none text-white fw-bold fs-6">Contact
                                            Us</a></li>
                                    <li class="list-item"><a href=""
                                            class="list-link text-decoration-none text-white fw-bold fs-6">FAQ</a></li>
                                    <li class="list-item"><a href=""
                                            class="list-link text-decoration-none text-white fw-bold fs-6">Privacy
                                            Policy</a>
                                    </li>
                                    <li class="list-item"><a href=""
                                            class="list-link text-decoration-none text-white fw-bold fs-6">Terms of
                                            Use</a>
                                    </li>
                                    <li class="list-item"><a href=""
                                            class="list-link text-decoration-none text-white fw-bold fs-6">Global
                                            Office</a>
                                    </li>
                                    <li class="list-item"><a href=""
                                            class="list-link text-decoration-none text-white fw-bold fs-6">Local
                                            Office</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="social-media  col-6 col-sm-5 ms-sm-auto col-md-4 ms-md-auto  
                        col-lg-6 ms-lg-auto">
                                <ul class="list-unstyled mt-3">
                                    <li class="list-item mb-4">
                                        <a href="https://www.linkedin.com"
                                            class="list-link text-decoration-none text-white">
                                            <span class="text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="#ffffff"
                                                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                                </svg>
                                            </span>
                                            <p class="text-white ">Linkedin</p>
                                        </a>
                                    </li>
                                    <li class="list-item mb-4">
                                        <a href="https://www.twitter.com"
                                            class="list-link text-decoration-none text-white">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#ffffff"
                                                        d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                                                </svg>
                                            </span>
                                            <p class="text-white ">Twitter</p>
                                        </a>
                                    </li>
                                    <li class="list-item mb-4">
                                        <a href="https://www.facebook.com" class="list-link text-decoration-none">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="#ffffff"
                                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                                </svg>
                                            </span>
                                            <p class="text-white ">Facebook</p>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="https://www.google.com" class="list-link text-decoration-none">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path fill="#ffffff"
                                                        d="M386.1 228.5c1.8 9.7 3.1 19.4 3.1 32C389.2 370.2 315.6 448 204.8 448c-106.1 0-192-85.9-192-192s85.9-192 192-192c51.9 0 95.1 18.9 128.6 50.3l-52.1 50c-14.1-13.6-39-29.6-76.5-29.6-65.5 0-118.9 54.2-118.9 121.3 0 67.1 53.4 121.3 118.9 121.3 76 0 104.5-54.7 109-82.8H204.8v-66h181.3zm185.4 6.4V179.2h-56v55.7h-55.7v56h55.7v55.7h56v-55.7H627.2v-56h-55.7z" />
                                                </svg>
                                            </span>
                                            <p class=" text-white ">Google</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---sign up end--- -->



        <!-- ----footer start--- -->
        <footer>
            <div class="container">
                <div class="row p-4 mx-0">
                    <div class="col-12 col-md-6 text-center mb-3 mb-md-0 fw-bold">&copy; Copyright 2024 Elixir Inc.
                    </div>
                    <div class="col-12  col-md-6 text-center fw-bold">
                        Designed by Mohammed Alvaki
                    </div>
                </div>
            </div>
        </footer>
        <!-- ----footer end--- -->
    </main>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>