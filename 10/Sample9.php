<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
$fm = array("c", "y/m/d", "D", "F", "h:i:s");
foreach ($fm as $f){
    print date($f) . "<br/>\n";
}
?>
</body>
</html>