<?php
require_once '../../core/includes.php';

$u = new User;

if( !empty($_POST) ){  //Form was submitted
    $u->edit();
    header('Location: /users/edit.php');
    exit();
}

$user = $u->get_by_id($_SESSION['user_logged_in']);


$title = 'Edit Profile';
require_once '../../elements/html_head.php';
require_once '../../elements/nav.php';



?>

    <div id="edit-background">
        <div class="container">
            <div id="edit-white">
                <div class="row">
                    <div class="col-sm-4">
                        <div id="update-info">
                            <h4>User Name: <?=$user['username']?></h4>
                            <h4>First Name: <?=$user['firstname']?></h4>
                            <h4>Last Name: <?=$user['lastname']?></h4>
                            <h4>Bio: <?=$user['bio']?></h4>
                            </div>
                    </div>
                        <div class="col-sm-6">
                            <h2>Update Personal Info</h2>
                                <form method="post">

                                    <div class="form-group">
                                        <input class="form-control material-edit-form-group" type="text" name="username" value="<?=$user['username']?>"required>
                                        <label>Username</label>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control material-edit-form-group" type="password" name="password" value"" placeholder="Leave empty to keep same password">
                                        <label>Password</label>
                                    </div>
                                    <h4>Profile Info</h4>

                                    <div class="form-group">
                                        <input class="form-control material-edit-form-group" type="text" name="firstname" value="<?=$user['firstname']?>"required>
                                        <label>First Name</label>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control material-edit-form-group" type="text" name="lastname" value="<?=$user['lastname']?>"required>
                                        <label>Last Name</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <textarea class="form-control" name="bio" required><?=$user['bio']?></textarea>
                                    </div>
                                    <input class="btn material-btn" type="submit"  value="Update">
                                </form>
                        </div><!-- .col-sm-6 -->
                    </div><!-- row -->
            </div><!-- edit-white -->
        </div><!-- .container -->
</div><!-- #edit-background -->



<?php require_once '../../elements/footer.php';
