<?php session_start(); ?>
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
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 1;
    print "初めてのお越しですね。</br>";
} else {
    $_SESSION["count"]++;
    print $_SESSION["count"] . "回目のお越しですね。<br/>";
}
?>
</body>
</html>