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
<h2>2階のご案内</h2>
<a href="Sample7_1.php">1階</a>
<?php
if(!isset($_SESSION["date"])) {
    print "<hr/>\n";
    print "<a href=\"Sample7_1.php\">1階からご覧ください</a>\n";
} else {
    print "{$_SESSION["date"]}に入店されました";
}
?>
</body>
</html>