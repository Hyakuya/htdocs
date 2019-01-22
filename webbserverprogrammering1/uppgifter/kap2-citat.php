<?php
/**
 * [Med en mening förklaras denna fil innehåller och gör]
 *
 * [Med några meningar förklaras det i mer detalj.]
 */

$all_quotes = array(
    "“It’s just pathetic to give up on something before you even give it a shot.” – Reiko Mikami",
    "“The ticket to the future is always open.” – Vash The Stampede",
    "“Life is not a game of luck. If you wanna win, work hard.” – Sora",
    "“A teacher doesn’t give up on her students just because things get tough.” – Harumi Kiyama",
    "“Whatever you do, enjoy it to the fullest. That is the secret of life.” – Rider",
    "“If you can’t find a reason to fight, then you shouldn’t be fighting.” – Akame"
);

$random_key = array_rand($all_quotes);
$quotes = $all_quotes[$random_key];

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
echo "<p lang=\"en\">{$quotes}</p>\n";
?>
</body>
</html>
