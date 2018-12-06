<?php require_once '../../core/includes.php';

if( !empty($_POST['title'])  && !empty($_POST['description']) ){//Form was submitted

    //Add new projects to dB
    $p = new Project;
    
    $p->add();

}


header("Location: /projects/");
