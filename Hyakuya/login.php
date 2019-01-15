<?php include('server.php') ?><!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" type="text/css" href="mainstyle.css">    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">    <link rel="manifest" href="favicon/site.webmanifest">    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">    <meta name="msapplication-TileColor" content="#da532c">    <meta name="theme-color" content="#ffffff">    <title>Hyakuya</title></head><body>    <div>        <a href="index"><img id="logo" src="pictures/banner.png" ></a>    </div>    <nav>        <ul>            <a href="index"><li>Home</li></a>            <a href="videos"><li>Videos</li></a>            <a href="discord"><li>Discord</li></a>            <?php                if(isset($_SESSION['username'])) {                    ?>                <?php                } else {                ?>                    <a href="login"><li>Login</li></a>                    <a href="register"><li>Register</li></a>                <?php                }            ?>            <div id="loggedinscreen">                <?php if (isset($_SESSION["username"])): ?>                    <p id="loggintext">Logged in as <strong><?php echo $_SESSION['username'];?></strong><a href="index.php?logout='1'" style="color:#af0000;"> Logout</a></p>                <?php endif ?>            </div>        </ul>        <div class="handle">Menu</div>    </nav>    <div class="content">    <div id="login">        <h2>Login</h2>        <form method="post" action="login">            <?php include('errors.php'); ?>            <div class="input-group">                <label>Username</label>                <input type="text" name="username">            </div>            <div class="input-group">                <label>Password</label>                <input type="password" name="password">            </div>            <div class="input-group">                <button type="submit" name="login" class="btn">Login</button>            </div>            <p>                Not yet a member? <a id="signInButton" href="register.php">Register</a>            </p>        </form>    </div>    </div>    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    <script>        $('.handle').on('click' , function(){           $('nav ul').toggleClass('showing');        });    </script></body></html>