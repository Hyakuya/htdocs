<?php
/**
 * [Med en mening förklaras denna fil innehåller och gör]
 *
 * [Med några meningar förklaras det i mer detalj.]
 */

date_default_timezone_set('Europe/stockholm');
setlocale(LC_ALL, "sv_SE", "Swedish");

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
<h1>[Varierande rubrik som du hittar på själv]</h1>
<?php
echo "<p>" . strftime("%c") . "</p>\n";
?>
</body>
</html>
