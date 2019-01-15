<?php
    session_start();

    $username = "";
    $email = "";
    $errors = array();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



$db = mysqli_connect('localhost','root', '', 'registration');


    if(isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password2 = mysqli_real_escape_string($db, $_POST['password_2']);


        if (empty($username)) {
            array_push($errors, "Username is required!");

        }
        if (empty($email)) {
            array_push($errors, "Email is required!");

        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Enter a valid email!");
        }
        if (empty($password1)) {
            array_push($errors, "Password is required!");

        }
        if ($password1 != $password2) {
            array_push($errors, "The two passwords do not match!");
        }

        if (count($errors) == 0) {

            $doubleUsername = mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
            $doubleEmail = mysqli_query($db,"SELECT * FROM users WHERE email='$email'");
            if (mysqli_num_rows($doubleUsername) > 0) {
                array_push($errors, "Username already exists!");
            } elseif (mysqli_num_rows($doubleEmail) > 0) {
                array_push($errors, "Email already exists!");
            } else {
                $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789';
                $token = str_shuffle($token);
                $token = substr($token, 0,10);

                $password = md5($password1);
                $sql = "INSERT INTO users (username, email, password, isEmailConfirmed, token) VALUES ('$username', '$email', '$password', '0', '$token')";
                mysqli_query($db, $sql);


                include_once "PHPMailer-master/src/PHPMailer.php";

                $mail = new PHPMailer();
                $mail ->setFrom('SwedishWolves@confirmEmail.com');
                $mail ->addAddress($email, $username);
                $mail ->Subject = "Please verify Email";
                $mail ->isHTML(true);
                $mail ->Body = "Please click on the link below: <br><br><a href='http://localhost/Swedishwolves/confirm.php?email=$email&token=$token'>Confirm here</a>";

                if ($mail ->send())
                    header('location:confirmEmail');
                else
                    header('location:confirmEmailError');





            }



        }


    }

    if(isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);


        if (empty($username)) {
            array_push($errors, "Username is required");

        }
        if (empty($password)) {
            array_push($errors, "Password is required");

        }
        if (count($errors) == 0) {

            $password = md5($password);
            $sql = $db->query("SELECT * FROM users WHERE username='$username' AND password= '$password'");

            if ($sql->num_rows > 0) {
                $data = $sql->fetch_array();
                if($data['isEmailConfirmed'] == 1) {
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";

                    header('location: index');
                } else {
                    array_push($errors, "Please verify your email");
                }

            } else {
                array_push($errors, "wrong username/password combination");
            }




        }
    }


    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index');
    }





?>