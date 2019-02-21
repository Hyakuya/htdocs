<?php
/**
 * It does calculations with an userinterface and query string.
 *
 * Using a module for funciton. gets parameters from a form,
 * filter the input and use the functions and displays the answer.
 * using a modue for functions gets parameters from query string filters
 * the input and use the functions and display the answer.
 * php version 7
 *
 * @category Course
 *
 * @package Calc
 *
 * @author Hyakuya <limpan.naslund@hotmail.com>
 *
 * @license Hyakuya dev team
 *
 * @link http://localhost/webbserverprogammering1/php%20moduels/calc.php
 */

require 'math.php';

$errors = array();


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $op = filter_input(INPUT_POST, 'op', FILTER_SANITIZE_SPECIAL_CHARS);
    $x = filter_input(INPUT_POST, 'x', FILTER_SANITIZE_SPECIAL_CHARS);
    $y = filter_input(INPUT_POST, 'y', FILTER_SANITIZE_SPECIAL_CHARS);
    include 'errorAndCalc.php';
} else if (!empty($_GET['op']) AND !empty($_GET['x']) AND !empty($_GET['y']) ) {
    $op = filter_input(INPUT_GET, 'op', FILTER_SANITIZE_SPECIAL_CHARS);
    $x = filter_input(INPUT_GET, 'x', FILTER_SANITIZE_SPECIAL_CHARS);
    $y = filter_input(INPUT_GET, 'y', FILTER_SANITIZE_SPECIAL_CHARS);
    include 'errorAndCalc.php';
}

header("Content-type: text/html; charset=utf-8");
?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8"/>
    <title>Simple calculator</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: grey;
        }
        form {
            width: 60%;
            margin: 0 auto;
            padding: 2%;
            border:1px solid black;
            background:white;
            border-radius: 0 0 10px 10px;
            text-align: center;
        }
        #answer {
            text-align: center;
            border: 1px solid black;
            margin-left: 25%;
            margin-right: 25%;
        }
        .error {
            width: 92%;
            margin: 0 auto;
            padding: 10px;
            border:1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align:left;
        }
    </style>
</head>
<body>
<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2>Simple calculator xD</h2>
        <p>
            <label for="name">Number one</label>
            <input type="text" name="x" id="x"
                   placeholder="" />

        </p>
        <p>
            <label for="name">Number two</label>
            <input type="text" name="y" id="y"
                   placeholder="" />
        </p>
        <p>
            <input type="radio" name="op" value="a">Add
            <input type="radio" name="op" value="s">Subtract
            <input type="radio" name="op" value="m">Multiply
            <input type="radio" name="op" value="d">Divide
        </p>
        <p>

            <input type="submit" value="Calculate"/>
        </p>
        <div id="answer">
            <p>Your answer:</p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (count($errors) == 0) {
            echo "<p> $answer </p>";
        }
    } else if (!empty($_GET['op']) AND !empty($_GET['x']) AND !empty($_GET['y'])) {
        if (count($errors) == 0) {
            echo "<p> $answer </p>";
        }
    }
    ?>
    <?php
    if (count($errors) > 0) : ?>

    <div class="error">
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error;?></p>
        <?php endforeach ?>
    </div>

    <?php endif ?>
        </div>
    </form>

</div>

</body>
</html>
