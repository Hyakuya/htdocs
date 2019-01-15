<?php include('server.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>Swedish wolves</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div>
    <a href="index"><img id="logo" src="pictures/banner.jpg" ></a>
</div>

<nav>
    <ul>
        <a href="index"><li>Home</li></a>
        <a href="discord"><li>Discord</li></a>
        <a href="guildinfo"><li>Guild info</li></a>
        <?php
        if(isset($_SESSION['username'])) {
            ?>

            <?php
        } else {
            ?>
            <a href="login"><li>Login</li></a>
            <a href="register"><li>Register</li></a>
            <?php
        }
        ?>

        <div id="loggedinscreen">
            <?php if (isset($_SESSION["username"])): ?>
                <p id="loggintext">Logged in as <strong><?php echo $_SESSION['username'];?></strong><a href="index.php?logout='1'" style="color:#af0000;"> Logout</a></p>
            <?php endif ?>
        </div>

    </ul>
    <div class="handle">Menu</div>
</nav>

<div id="login">
    <h2>Something went wrong, try again!</h2>



</div>
<div id="footer">

    <p id="footertext">Made by Hyakuya © <?php echo date("Y"); ?> </p>


</div>
    <script>
        $('.handle').on('click' , function(){
            $('nav ul').toggleClass('showing');
        });
    </script>
    <script src="javascript.js"></script>
</body>
</html>
