<?php

    function redirect() {
        header('location:register');
        exit();
    }


    if(!isset($_GET['email']) || !isset($_GET['token'])) {
        redirect();
    } else {
        $db = mysqli_connect('localhost','root', '', 'registration');

        $email = $db->real_escape_string($_GET['email']);
        $token = $db->real_escape_string($_GET['token']);

        $sql = $db ->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");

        if($sql->num_rows > 0) {
            $db->query("UPDATE users SET isEmailConfirmed=1, token='' WHERE email='$email'");
            header('location:confirmedEmail');
            exit();
        } else {
            redirect();
        }

    }
?>