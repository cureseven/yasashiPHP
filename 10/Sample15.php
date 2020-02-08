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
<form action="http://localhost:8888/10/Sample15.php" method="post">
    タイトル：<input type="text" name="sbj"><br>
    宛先：<input type="text" name="to"><br>
    <textarea name="msg" id="" cols="50" rows="10"></textarea><br>
    <input type="submit" value="送信">
</form>

<?php
if(isset($_POST["to"]))
    $to = $_POST["to"];
if(isset($_POSST["sbj"]))
    $sbj = $_POST["sbj"];
else
    $sbj = null;
if(isset($_POST["msg"]))
    $msg = $_POST["msg"];
else
    $msg = null;

$hbr = "Content-Type: text/plain;charset=ISO-2022-JP";

mb_language('ja');

$sbj = mb_convert_encoding($sbj,"JIS", "UTF-8");
$msg = mb_convert_encoding($msg,"JIS", "UTF-8");

if(isset($_POST["to"])){
    if(mb_send_mail($to, $sbj, $msg, $hbr))
        print "送信しました\n";
    else
        print "送信に失敗しました\n";
}
?>
</body>
</html>