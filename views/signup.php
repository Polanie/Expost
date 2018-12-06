<?php  require_once("../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../elements/html_head.php");
    require_once("../elements/nav.php");
?>


    <div id="signup-page">
        <div class="container">
            <div id="inside-signup-page">
                    <div class="row">
                        <div class="col-sm-3">

                        </div>
                            <div class="col-sm-6">
                                <div id="black-signup-page">
                                <h2>Sign Up</h2>
                                    <?= !empty($_SESSION['create_acc_msg']) ? $_SESSION['create_acc_msg'] : '' ?>
                                        <form action="/users/add.php" method="post">

                                               <div class="form-group material-form-group">
                                                   <input class="form-control material-type" type="username" name="username" required>
                                                    <label>Username</label>
                                               </div>
                                               <div class="form-group material-form-group">
                                                   <input class="form-control" type="password" name="password" required>
                                                    <label>Password</label>
                                               </div>
                                               <input class="btn material-btn" type="submit"  value="Submit">

                                       </form>
                                </div><!--#black-signup-page -->
                        </div><!-- .col-sm-8 -->
                    </div><!-- .row -->
                </div><!-- .inside-home-page -->
            </div><!-- .container -->
        </div><!-- .home-page -->

<?php require_once("../elements/footer.php");
