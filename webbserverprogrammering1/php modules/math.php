<?php
function addition($addendOne, $addendTwo) {
    return $addendOne + $addendTwo;
}
function subtraction($minuend, $subtrahend) {
    return $minuend - $subtrahend;
}
function multiplication($multiplicand, $multiplier) {
    return $multiplicand * $multiplier;
}

function division($numerator, $denominator) {
    if ($denominator == 0) {
        return null;
    } else {
        return $numerator / $denominator;
    }

}