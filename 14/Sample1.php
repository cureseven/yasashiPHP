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
<h2>商品のご選択</h2>
<form action="http://localhost:8888/14/Sample1.php" method="post">
    <input type="text" name="product">
    <input type="submit" value="送信">
</form>
<?php
    try {
        if (isset($_POST["product"])) {
            if ($_POST["product"] == "")
                throw new Exception("入力してください");
            else
                print "「{$_POST["product"]}」をお買い上げいただきました<br/>\n";
        }
    } catch (Exception $e) {
        print $e->getMessage();
    }
?>
</body>
</html>