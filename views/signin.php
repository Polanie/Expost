<?php  require_once("../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../elements/html_head.php");
    require_once("../elements/nav.php");
?>


        <div id="signin-page">
            <div class="container">
                <div id="inside-signin-page">
                        <div class="row">
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-5">
                                <div id="black-signin">
                                <h2>Welcome Back!</h2>
                                    <form action="/users/login.php" method="post">
                                       <div class="form-group material-form-group">
                                           <input class="form-control material-type" type="text-white" name="username" required>
                                           <label>Username</label>
                                       </div>
                                       <div class="form-group material-form-group">
                                           <input class="form-control" type="password" name="password" required>
                                            <label>Password</label>
                                       </div>
                                       <input class="btn " type="submit" value="Submit">
                                       <h4>Don't have an account yet?
                                    <a class="nav-link material-nav-link" href="/signup.php">SignUp</a></li></h4>
                                   </form>
                                </div><!-- #black-signin -->
                                </div><!-- .col-sm-5 -->
                        </div><!-- .row -->
                    </div><!-- .inside-home-page -->
                </div><!-- .container -->
            </div><!-- .home-page -->

<?php require_once("../elements/footer.php");
