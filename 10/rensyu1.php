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
<h2>店内のご案内</h2>
<hr>
<?php
    if (!isset($_POST["name"])){
        $name = $_SESSION["name"];
        $_SESSION["name"] = $name;
    }
    if (!isset($_SESSION["name"])){
        print "<form action=\"http://localhost:8888/10/rensyu1.php\" method=\"post\">";
        print "<p>お客様のお名前をどうぞ<input type=\"text\" name=\"name\"/></p>";
        print "<input type=\"submit\" value=\"送信\">";
        print "</form>";
    } else {
        echo "<p>{$_SESSION["name"]}さん、いらっしゃいませ</p>";
    }
?>
</body>
</html>