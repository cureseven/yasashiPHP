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
if(!isset($_SESSION["date"])) {
    $_SESSION["date"] = date("h:i:s");
    print "初めてのお越しですね。<br/>" . PHP_EOL;
} else {
    print "{$_SESSION["date"]}に入店されました。<br/>" . PHP_EOL;
}
print "<hr/>\n";
print "<a href=\"Sample7_2.php\">2階へどうぞ</a>";
?>
</body>
</html>