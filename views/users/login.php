<?php require_once '../../core/includes.php';

if( !empty($_POST['username']) && !empty($_POST['password'])){

    $u = new User;
    $u->login();
}

header("Location: /projects/");
//This code directs the login page to the projects folder
