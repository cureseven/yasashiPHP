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
    $curdir = opendir(".");

    while ($name = readdir($curdir)) {
        $status = stat($name);
        print $name . "：";
        print "最終アクセスが" . date("Y/m/d h:i:s",$status[8]) . ", 最終修正時刻が" . date("Y/m/d h:i:s",$status[9]) . ", 作成時刻が" . date("Y/m/d h:i:s",$status[10]) . ", サイズが" . $status[11] . "<br>";
    }

?>
</body>
</html>