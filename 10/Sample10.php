<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$fm = array("hours", "minutes", "seconds", "year", "mon", "month", "mday", "wday", "weekday");
$dt = getdate();

var_dump($dt);
foreach ($fm as $f) {
    print $f  . "<dt/>\n";
    print $dt[$f];
    print "<hr/>";
}
?>
</body>
</html>