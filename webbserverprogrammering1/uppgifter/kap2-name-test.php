<?php
/**
 *  A webbsite that counts characters in a name.
 *
 *  It filters input in a from a POST and makes a varible with namedata.
 *  counting characters and even reverses it. and gives
 *  an output.
 * php version 7
 *
 * @category Course
 *
 * @package Omoss
 *
 * @author Hyakuya <limpan.naslund@hotmail.com>
 *
 * @license Hyakuya dev team
 *
 * @link http://localhost/webbserverprogrammering1/uppgifter/kap2-name-test.php
 */

/**
 * Utf8_strrev()
 * Makes it into utf8.
 *
 * @param String $str string input
 *
 * @return string in utf8
 */
function Utf8_strrev($str) 
{
    preg_match_all('/./us', $str, $temp_arr);
    return join('', array_reverse($temp_arr[0]));
}

$submitted_name =
    filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);

$namedata = false;
if (!empty($submitted_name)) {
    $submitted_name = trim($submitted_name);
    $output_name = htmlspecialchars($submitted_name, ENT_QUOTES);
    $charcount = mb_strlen($submitted_name);
    $name_reversed = utf8_strrev($submitted_name);
    $name_reversed = htmlspecialchars($name_reversed, ENT_QUOTES);
    $namedata = true;
}

header("Content-type: text/html; charset=utf-8");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Name Test</title>
    <style>
        body {
            font-family: sans-serif;

        }
    </style>
</head>
<body>
    <h1>Chapter 2.3: Name test</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <p>
              <label for="name">What's your name old chap?</label>
              <input type="text" name="name" id="name"
                     placeholder="ex. Darious Tanz" />
          </p>
          <p>
              <input type="submit" value="Test namn"/>
          </p>
    </form>
<?php
if ($namedata) {
    echo <<<DATA
    <dl>
        <dt>Name:</dt>
        <dd>{$output_name}</dd>
        <dt>Total letters including spaces:</dt>    
        <dd>{$charcount}</dd>
        <dt>Your name in reverse:</dt>
        <dd>{$name_reversed}</dd>
    </dl>
DATA;

}
?>
</body>
</html>
