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
<form action="http://localhost:8888/10/Sample16.php" method="post">
    <textarea name="product" id="" cols="40" rows="5"></textarea><br>
    <input type="submit" value="送信">
</form>
<?php
if(isset($_POST["product"])) {
    $newproduct = htmlspecialchars($_POST["product"]);
    print "「{$newproduct}」をお買い上げいただきました<br>\n";
}
?>
</body>
</html>