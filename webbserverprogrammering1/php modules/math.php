<?php
/**
 * File with math functions
 * php version 7
 *
 * @category Course
 *
 * @package Math
 *
 * @author Hyakuya <limpan.naslund@hotmail.com>
 *
 * @license Hyakuya dev team
 *
 * @link http://localhost/webbserverprogammering1/php%20moduels/math.php
 */

/**
 * Function for addition.
 *
 * @param float|int $addendOne first number
 * @param float|int $addendTwo second number
 *
 * @return mixed Answer
 */
function addition($addendOne, $addendTwo) 
{
    return $addendOne + $addendTwo;
}

/**
 * Function for subtraction.
 *
 * @param float|int $minuend    first number
 * @param float|int $subtrahend second number
 *
 * @return mixed Answer
 */
function subtraction($minuend, $subtrahend) 
{
    return $minuend - $subtrahend;
}

/**
 * Function for multiplication.
 *
 * @param float|int $multiplicand first number
 * @param float|int $multiplier   second number
 *
 * @return float|int Answer
 */
function multiplication($multiplicand, $multiplier) 
{
    return $multiplicand * $multiplier;
}

/**
 * Function for division.
 *
 * @param float|int $numerator   first number
 * @param float|int $denominator second number
 *
 * @return float|int|null Answer
 */
function division($numerator, $denominator) 
{
    if ($denominator == 0) {
        return null;
    } else {
        return $numerator / $denominator;
    }

}