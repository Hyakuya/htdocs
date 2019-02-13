<?php
/**
 * Mall för listning av blogginlägg
 */
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf‐8" />
    <title><?php echo "{$blogpost['title']} - läxhjälpens blogg"; ?></title>
    <meta http‐equiv="X‐UA‐Compatible" content="IE=edge">
    <base href="/" />
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' />
    <link href="../html/css/laxhjalpen.css" rel="stylesheet" />
</head>
<body class="subpage">
<?php
require "masterhead.php";
require  "menu.php";

echo <<<MAIN
<div role="main">
    <article class="singleblogpost">
        <h2>{$blogpost['title']}</h2>
        <p><small>Postad {$blogpost['pubdate']} av {$blogpost['text']}</small></p>
        <div class="blogtext">
            {$blogpost['text']}
        </div>
    </article>
</div>
MAIN;

    require "footer.php";
    ?>

</body>

</html>

