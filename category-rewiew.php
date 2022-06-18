<?php
                         include '_database/database.php';
session_start();

                         ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Category rewiew</title>

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

</head>

<body class="bg-light single-post style-default style-rounded" >

<!-- onmousedown='return false;'    onselectstart='return false;' -->
<!-- Preloader -->

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
                    <a href="#" class="sidenav__menu-url">Bosh sahifa</a>

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
                <!-- <li>
                <li>
                    <a href="#" class="sidenav__menu-url">Language</a>
                    <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i
                            class="ui-arrow-down"></i></button>
                    <ul class="sidenav__menu-dropdown">
                        <li> <a href="#" class="sidenav__menu-url">UZ</a></li>
                        <li> <a href="#" class="sidenav__menu-url">ENG</a> </li>
                        <li><a href="#" class="sidenav__menu-url">RU</a> </li>
                    </ul>
                </li>
                </li> -->



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
                                srcset="img/1.png 1x, img/1.png " alt="logo">
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

                                <!-- <li class="nav__dropdown">
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

        <!-- Breadcrumbs -->
        <div class="container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="index.php" class="breadcrumbs__url">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="categories.php" class="breadcrumbs__url">Categories</a>
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current">
                    <?php  ?>
                </li>
            </ul>
        </div>

        <div class="main-container container" id="main-container">

<!-- Content -->
<div class="row">

    <!-- post content -->
    <div class="col-lg-8 blog__content mb-72">
        <div class="content-box">

            <!-- standard post -->
            <article class="entry mb-0">
                <?php
        include '_database/database.php';
$ddd=$_GET['category'];
       
             $sql = "SELECT * FROM category where Name ='".$ddd."' ";

             $result = $conn->query($sql);
         
                         if ($result->num_rows > 0) {
       // output data of each row
       while($rws = $result->fetch_assoc()) {
          ?>    

                <div class="single-post__entry-header entry__header">
                    <h1 class="single-post__entry-title">
                        <?php echo $rws['Name'] ?> </h1>

                </div>
                <!-- end entry header -->


                <div style="padding-right: 10px;">



                    <div class="entry__article">
                        <p><?php echo $rws['Description'] ?></p>

                        <!-- <div class="entry__tags">
                            <i class="ui-tags"></i>
                            <span class="entry__tags-label">Tags:</span>
                            <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
                        </div> -->


                    </div>
                    <!-- end entry article -->
                </div>
                <!-- end entry article wrap -->
                <div class="title-wrap title-wrap--line title-wrap--pr">
                </div>


                <!-- Prev / Next Post -->


                <!-- Author -->
                <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                    <div class="row card-row">

<?php                          $sql = "SELECT * FROM article where Category='".$ddd."'";

$result = $conn->query($sql);
         
if ($result->num_rows > 0) {
// output data of each row
while($rws = $result->fetch_assoc()) {
?>              <div class="col-md-6">


                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="single-post.php?tema=<?php echo $rws['Article_id']?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="img/categories/<?php echo $rws['Category'] ?>/<?php echo rand(1,4) ?>.jpg"
                                                class="entry__img lazyload" alt="">
                                        </div>
                                    </a>

                                    <a href="categories.php"
                                        class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?php echo $rws["Category"] ?></a>
                                </div>
                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="single-post.php?tema=<?php echo $rws['Article_id']?>"
                                                value="<?php echo $rws["Theme"] ?>"
                                                name="request"><?php echo $rws["Theme"] ?></a>

                                        </h2>
                                     
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#"><?php echo $rws["Author"] ?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?php echo $rws["Data_published"] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p class="Qisqa_opisaniya"></p>
                                    </div>
                                </div>
                            </article>

                        </div>
                        <?php }  } else {
  echo "0 results";
}?>

                    </div>
                </div>
                

                <!-- Related Posts -->
                <section class="section mb-0">
                    <div class="title-wrap title-wrap--line title-wrap--pr">
                        <h3 class="section-title">editors picks</h3>
                    </div>

                    <!-- Slider -->
                    <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                        <?php  
             $sql = "SELECT * FROM article ORDER BY Article_id  asc limit 4";

             $result = $conn->query($sql);
         
             if ($result->num_rows > 0) {
             // output data of each row
             while($rws = $result->fetch_assoc()) {
             ?>             <article class="entry thumb thumb--size-1">
                            <div class="entry__img-holder thumb__img-holder"
                                style="background-image: url('img/categories/<?php echo $rws["Category"] ?>/<?php echo rand(1,4) ?>.jpg');">
                                <div class="bottom-gradient"></div>
                                <div class="thumb-text-holder">
                                    <h2 class="thumb-entry-title">
                                        <a href="single-post.php?tema=<?php echo $rws['Article_id']?>"><?php echo $rws["Theme"] ?></a>
                                    </h2>
                                </div>
                                <a href="single-post.php" class="thumb-url"></a>
                            </div>
                        </article>
                        <?php }  } else {
  echo "0 results";
} ?>

                    </div>
                    <!-- end slider -->

                </section>
            </article>
            <!-- end standard post -->

            <!-- Comments -->
            <?php }  } else {
  echo "0 results";
}?>

        </div>
        <!-- end content box -->
    </div>
    <!-- end post content -->

    <!-- Sidebar -->
    <aside class="col-lg-4 sidebar sidebar--right">

        <!-- Widget Popular Posts -->
        <aside class="widget widget-popular-posts">
            <h4 class="widget-title">Popular Posts</h4>
            <ul class="post-list-small">
                <li class="post-list-small__item">
                    <?php  
$sql = "SELECT * FROM article ORDER BY Article_id  asc limit 4";
$result = $conn->query($sql);
         
if ($result->num_rows > 0) {
// output data of each row
while($rws = $result->fetch_assoc()) {
?>  
                    <article class="post-list-small__entry clearfix" style="padding-bottom: 4px;">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                                <a href="single-post.php?tema=<?php echo $rws['Article_id'] ?>">
                                    <img data-src="img/categories/<?php echo $rws["Category"] ?>/<?php echo rand(1,4) ?>.jpg"
                                        src="img/empty.png" alt=""
                                        class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="single-post.php?tema=<?php echo $rws['Article_id'] ?>"><?php echo $rws["Theme"] ?></a>
                            </h3>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="#"><?php echo $rws["Author"] ?></a>
                                </li>
                                <li class="entry__meta-date">
                                    <?php echo $rws["Data_published"] ?>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <?php } }  else {
  echo "0 results";
} ?>
                </li>

            </ul>
        </aside>


</div>
<!-- end content -->
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
                               
                            </aside>
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="adress ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d594.9322342948559!2d69.26886255922855!3d41.28121478600739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8abebdb4e609%3A0x3b3c4fbc2fe831bd!2sNational%20Institute%20of%20Fine%20art%20and%20Design!5e0!3m2!1suz!2s!4v1614273732731!5m2!1suz!2s"
                                    width="400" height="200" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
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
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.newsTicker.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
<!-- Copied from https://deothemes.com/envato/deus/html/single-post.html by Cyotek WebCopy 1.8.0.620, 30 декабря 2019 г., 6:28:59 -->

</html><?php $conn->close();
?>