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
$product = array("鉛筆", "消しゴム", "定規", "コンパス", "ボールペン");
?>
<h2>商品のご選択</h2>
<form action="http://localhost:8888/10/Sample5.php" method="post">
    <?php
    foreach ($product as $value){
        print "<input type=\"radio\" name=\"product\" value=\"{$value}\"";
        if ($id == 0) print "checked";
        print "/>";
        print $value;
    }
    ?>
    <input type="submit" value="送信"/>
</form>

<?php
if (isset($_POST["product"])) {
    print "「{$_POST["product"]}」をお買い上げいただきました。<br/>\n";
}
?>
</body>
</html>