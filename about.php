
<?php
                         include '_database/database.php';
session_start();
                         ?>
<html lang="en">
<!-- Copied from https://deothemes.com/envato/deus/html/about.html by Cyotek WebCopy 1.8.0.620, 30 декабря 2019 г., 6:28:59 -->

<head>
    <title> About journal</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='../../../css-1.css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>
    <style>
    a.teg{
        text-decoration: none;
    }
    </style>

</head>

<body class="style-default style-rounded">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>

    <!-- Sidenav -->
    <header class="sidenav" id="sidenav">

        <!-- close -->
        <div class="sidenav__close">
            <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
        </div>

        <!-- Nav -->
        <nav class="sidenav__menu-container">
            <ul class="sidenav__menu" role="menubar">
                <li>
                    <a href="#" class="sidenav__menu-url">Home</a>

                </li>
                <li>
                    <a href="categories.php" class="sidenav__menu-url">Categories</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">Archive</a>
                </li>
                <li>
                    <a href="about.php" class="sidenav__menu-url">About journal</a>
                </li>
                <li>
                    <a href="contact.php" class="sidenav__menu-url">Contact us</a>
                </li>
                <li>
                    <!-- <li>
                        <a href="#" class="sidenav__menu-url">Language</a>
                        <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                        <ul class="sidenav__menu-dropdown">
                            <li> <a href="#" class="sidenav__menu-url">UZ</a></li>
                            <li> <a href="#" class="sidenav__menu-url">ENG</a> </li>
                            <li><a href="#" class="sidenav__menu-url">RU</a> </li>
                        </ul>
                    </li> 
                </li>-->



            </ul>
        </nav>

        <div class="socials sidenav__socials">
            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                <i class="ui-google"></i>
            </a>
            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
        </div>
    </header>
    <!-- end sidenav -->


    <main class="main oh" id="main">

        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <!-- Top menu -->
                    <div class="col-lg-6">
                        <ul class="top-menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Socials -->
                    <div class="col-lg-6">
                        <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>
                            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                            </a>
                            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end top bar -->


        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
            <span class="nav-icon-toggle__box">
              <span class="nav-icon-toggle__inner"></span>
            </span>
          </button>

                        <!-- Logo -->
                        <a href="index.php" class="logo">
                            <img style="padding-top:3px" class="logo__img" src="img/1.png"
                                srcset="img/1.png 1x, img/1.png" alt="logo">
                        </a>

                        <!-- Nav-wrap -->
                        <nav class="flex-child nav__wrap d-none d-lg-block">
                            <ul class="nav__menu">

                                <li class="nav_dropdown ">
                                    <a href="index.php">Home</a>

                                </li>
                                <li class="nav_dropdown">
                                    <a href="categories.php">Categories</a>
                                </li>
                               
                                <li class="nav_dropdown">
                                    <a href="#">Archives</a>
                                </li>

                                <li class="nav_dropdown">
                                    <a href="about.php">About journal</a>
                                </li>
                                <li class="nav_dropdown">
                                    <a href="contact.php">Contact us</a>
                                </li>
<!-- 
                                <li class="nav__dropdown">
                                    <a href="#">language</a>
                                    <ul class="nav__dropdown-menu">
                                        <li><a href="#">UZ</a></li>
                                        <li><a href="#">ENG</a></li>
                                        <li><a href="">RU</a></li>

                                    </ul>
                                </li> -->

                            </ul>
                            <!-- end menu -->
                        </nav>
                        <!-- end nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <div class="nav__right-item nav__search">
                                <form role="search" method="post" action="search-result.php" class="search-form relative">
                                    <input type="search" name="search1" class="widget-search-input mb-0" placeholder="Search an article">
                                    <button type="submit" name=submit class="widget-search-button btn btn-color"><i class="ui-search widget-search-icon"></i></button>
                                </form>
                            </div>

                        </div>
                        <!-- end nav right -->

                    </div>
                    <!-- end flex-parent -->
                </div>
                <!-- end container -->

            </div>
        </header>
        <!-- end navigation -->

   <br>

        <div class="main-container container" id="main-container">
            <!-- post content -->
            <div class="blog__content mb-72">
                <h1 class="page-title">About <blockquote>Scientific and practical journal of "Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Bekhzod"</blockquote></h1>
                <img src="img/content/about/about_bg.jpg" class="page-featured-img">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="entry__article">
                            <p>   The scientific and practical journal of "Bulletin of the National Institute of Fine Arts and Design named after Kamoliddin Behzod"
                             has been publishing since 2020. </p>

                            <p>The magazine aims to promote the country's scientific and creative achievements in the field of art
                              education and culture, and also aims to cover the news and problems in these areas. Moreover, there will be articles in the sections of 
                              "Fine Arts",
                             "Applied Art", "Design", "History of Art and Museum Business", "Young Researchers", "Review and Art History".</p>

            

                            <p> The following requirements are imposed upon the  articles submitted to the journal:</p>
                            <p>- Abstract (Uzbek, Russian, English)</p>
                            <p>- Keywords (Uzbek, Russian, English)</p>
                            <p>- The text of the article should be written in Times New Roman, size 14, spacing 1.5</p>
                            <p>- References will be given in the text</p>
                            <p>- Articles should be 8-10 pages</p>
                            <p>- A 3x4 photo of the author must be attached to the article</p>
                            <p><b>Articles for the journal are accepted in the following areas:</b></p>

                            <?php
                      $sql = "SELECT * FROM category";
$result = $conn->query($sql);
      
                    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 ?> 
                <h2 class="entry__title">
                                        <a href="category-rewiew.php?category=<?php echo $row['Name'] ?>"><?php echo $row['Name'] ?></a>
                                     </h2>

<?php } } else {
  echo "0 results";
}

?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end post content -->
        </div>
        <!-- end main container -->

        <!-- Footer -->
        <footer class="footer footer--dark">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget-logo">
                                <h4 class="widget-title ">
                                    Our adress:
                                    <p>Mironshoh 123, Mirobod district,<br> Tashkent, Uzbekistan</p>
                                    <p>Buses: <br> <b> 2,12,80,140</b></p>


                            </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <aside class="widget widget_nav_menu">
                                <h4 class="widget-title">Useful Links</h4>
                                <ul>
                                <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="categories.php">Categories</a></li>
                                    <li><a href="#">Archive</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                               
                                </ul>
                            </aside>
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="adress ">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d594.9322342948559!2d69.26886255922855!3d41.28121478600739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8abebdb4e609%3A0x3b3c4fbc2fe831bd!2sNational%20Institute%20of%20Fine%20art%20and%20Design!5e0!3m2!1suz!2s!4v1614273732731!5m2!1suz!2s"
                                    width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main>
    <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/owl-carousel.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/twitterFetcher_min.js"></script>
    <script src="js/jquery.newsTicker.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
<!-- Copied from https://deothemes.com/envato/deus/php/about.html by Cyotek WebCopy 1.8.0.620, 30 декабря 2019 г., 6:28:59 -->

</html>