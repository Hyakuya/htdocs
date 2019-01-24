<?php
/**
 * [Med en mening förklaras denna fil innehåller och gör]
 *
 * [Med några meningar förklaras det i mer detalj.]
 */

include('math.php');

if (!empty($_GET['op'])) {
    $op = filter_input(INPUT_GET, 'op', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($_GET['x'])) {
        $x = filter_input(INPUT_GET, 'x', FILTER_SANITIZE_SPECIAL_CHARS);
        if (!empty($_GET['y'])) {
            $y = filter_input(INPUT_GET, 'y', FILTER_SANITIZE_SPECIAL_CHARS);
            if($op == 'a') {
                $answer = addition($x,$y);
            }
            else if($op == 's') {
                $answer = subtraction($x,$y);
            }
            else if($op == 'm') {
                $answer = multiplication($x,$y);
            }
            else if($op == 'd') {
                $answer = division($x,$y);
            }
        }
    }
}

header("Content-type: text/html; charset=utf-8");
?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8"/>
    <title>[Varierande sidtitel som du hittar på själv]</title>
    <style>
        body {
            font-family: sans-serif;
            /* + tillägg du vill göra för att göra sidan lite snyggare */
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <p>
        <label for="name">First number</label>
        <input type="text" name="x" id="x"
               placeholder="ex. 10" />
        <label for="name">Secound number</label>
        <input type="text" name="y" id="y"
               placeholder="ex. 5" />
    </p>
    <p>
        <input type="radio" name="op" value="a">add
        <input type="radio" name="op" value="s">Subtract
        <input type="radio" name="op" value="m">Multiply
        <input type="radio" name="op" value="d">divide
    </p>
    <p>

        <input type="submit" value="Calculate"/>
    </p>
</form>
<?php
if (!empty($answer)) {
    echo "<p> $answer </p>";
}
?>
</body>
</html>
