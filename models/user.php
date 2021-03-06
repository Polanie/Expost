<?php
class User extends Db {


    function get_by_id($id){

        $id = (int)$id;

        $sql = "SELECT * FROM users WHERE id = '$id'";

        $user = $this->select($sql)[0];

        return $user;


    }

    function add(){
        $username = trim($this->data['username']);
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password, timezone) VALUES ('$username', '$password','$timezone')";
        $user_id = $this->execute_return_id($sql);
        return $user_id;
        $timezone = trim($this->data['timezone']);

    }

        function exists(){

            $username = $this->data['username'];
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $user = $this->select($sql);
            return $user;
        }

        function login(){

            $_SESSION = array(); //Empty session to start efresh

            //Get the user's details from the db and store it in a variables
            $username = $this->data['username'];
            $sql = "SELECT * FROM users WHERE username ='$username'";

            $user = $this->select($sql)[0];

            // Check if the password from the form matches from db

            if( password_verify($_POST['password'], $user['password']) ){

                $_SESSION['user_logged_in'] = $user['id'];

            }else{ //Login attempt failed.
                $_SESSION['login_attempt_msg'] = '<p class="text-danger">* Incorrect username and /or password</p>';
            }

        }
        function edit(){

            $id = (int)$_SESSION['user_logged_in'];
            $username = trim($this->data['username']);
            $password = password_hash(trim($this->data['password']), PASSWORD_DEFAULT);
            $firstname = trim($this->data['firstname']);
            $lastname = trim($this->data['lastname']);
            $bio = trim($this->data['bio']);
            $timezone = trim($this->data['timezone']);


            if( !empty(trim($_POST['password'])) ){ //New Password entered

                $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', bio='$bio', timezone='$timezone' WHERE id='$id'";

            }else{//No new password entered
                $sql = "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname', bio='$bio', timezone='$timezone'
                WHERE id='$id'";
            }


            $this->execute($sql);
        }
}
