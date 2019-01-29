<?php
if(isset($x) AND !is_numeric($x)) {
    array_push($errors, "First number is blank");
}
if(isset($y) AND !is_numeric($y)) {
    array_push($errors, "Second number is blank");
}
if(!is_numeric($x) AND !empty($x)) {
    array_push($errors, "You can't use letters for the first number");
}
if(!is_numeric($y) AND !empty($y)) {
    array_push($errors, "You can't use letters for the second number");
}
if(!is_string($op)) {
    array_push($errors, 'You need to chose what calculation');
}
if ($op =='d' AND $y == 0) {
    array_push($errors, "Can't divide it by zero");
}

if(count($errors) == 0) {
    if($op == 'a') {
        $answer = addition($x,$y);
    }
    if($op == 's') {
        $answer = subtraction($x,$y);
    }
    if($op == 'm') {
        $answer = multiplication($x,$y);
    }
    if($op == 'd') {
        $answer = division($x,$y);
    }
}
?>