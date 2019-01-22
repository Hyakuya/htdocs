<?php
/**
 *
 *
 *
 */

function utf8_strrev($str) {
    preg_match_all('/./us', $str, $temp_arr);
    return join('', array_reverse($temp_arr[0]));
}

$submitted_name = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);

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
    <h1>Avsnitt 2.3: Nametest</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <p>
              <label for="name">Vad heter du?</label>
              <input type="text" name="name" id="name"
                     placeholder="ex. Åke Svensson" />
          </p>
          <p>
              <input type="submit" value="Testa namnet"/>
          </p>
    </form>
<?php
if ($namedata) {
    echo <<<DATA
    <dl>
        <dt>Name</dt>
        <dd>{$output_name}</dd>
        <dt>Antal tecken ( inklusive ev. mellanslag i mitten</dt>
        <dd>{$charcount}</dd>
        <dt>Namnet backlänges</dt>
        <dd>{$name_reversed}</dd>
    </dl>
DATA;

}
?>
</body>
</html>
