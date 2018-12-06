<?php require_once '../../core/includes.php';

if( !empty($_POST['username']) && !empty($_POST['password']) ){ //Form was submitted with usernames and passwords filled out

    $u = new User;

    //Check if username already exists
    $exists = $u->exists();

    if ( empty($exists) ){//If user does not exist
        //This will add someone to the data base and leave them logged in and active
        $new_user_id = $u->add();
        $_SESSION['user_logged_in'] = $new_user_id;
        header("Location: /users/edit.php");
        exit();
    }else{

        $_SESSION['create_acc_msg'] = '<p class="text-danger text-center">* Username already exists</p>';
        header("Location: /signup.php");
        exit();
    }


}


header("Location: /users/edit.php");
exit();
