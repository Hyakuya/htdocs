<?php
/**
 * Simple website that does dice rolls
 * php version 7
 * 
 * @category Course
 * 
 * @package Dice
 * 
 * @author Hyakuya <limpan.naslund@hotmail.com>
 * 
 * @license Hyakuya dev team
 * 
 * @link http://localhost/webbserverprogammering1/uppgifter/dice.php 
 */


/**
 * Function that gets 2 random numbers and returns an array with them
 * 
 * @return array numbers
 */
function Roll_dice() 
{
    $diceNumbers = array();

    for ( $a = 0; $a <= 2; $a++ ) {
        array_push($diceNumbers, rand(1, 6));
    }
    
    return $diceNumbers;
}

 

header("Content-type: text/html; charset=utf-8");
?>


<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8"/>
    <title>Dice</title>
    <style>
        body {
            font-family: sans-serif;
            
        }
        div {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border:1px solid black;
            background:white;
            border-radius: 0 0 10px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Roll dice</h1>
        <?php
        for ( $a = 0; $a <= 4; $a++ ) {
             $diceNumbers = roll_dice();
                echo "<p> First dice is {$diceNumbers[0]} and second dice is {$diceNumbers[2]}</p>";
        }
        ?>
        <INPUT TYPE="button" onClick="history.go(0)" VALUE="Roll Again">
   </div>
</body>
</html>