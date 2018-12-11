<?php  require_once("../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../elements/html_head.php");
    require_once("../elements/nav.php");
?>


    <div class="home-page img-fluid">
        <div class="container">
            <div class="inside-home-page">
                    <div class="black-view">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="image-logo">
                                    <img class="img-fluid" src="/assets/images/exhibitpostw.png" alt="exhibitpost logo">
                                </div>
                            </div>
                        </div><!-- .row -->
                        <h1>An free online art forum that allows artists to post and exhibit!</h1>
                        <div class="home-lower-nav">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="button btn-link" role="button"><a class="nav-link" href="/projects/index.php">Explore</a></li>
                                    </ul>
                                </div><!-- .col-sm-4 -->
                                <div class="col-sm-4">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="button btn-link" role="button"><a class="nav-link" href="/signup.php">Sign-Up</a></li>
                                    </ul>
                                </div><!-- .col-sm-4 -->
                                <div class="col-sm-4">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="button btn-link" role="button"><a class="nav-link" href="/signin.php">Sign-In</a></li>
                                    </ul>
                                </div><!-- .col-sm-4 -->
                            </div><!-- .row -->
                        </div><!--.home-lower-nav -->
                    </div><!-- .black-view -->
                </div><!-- .inside-home-page -->
            </div><!-- .container -->
        </div><!-- .home-page -->


<?php require_once("../elements/footer.php");
