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
<form enctype="multipart/form-data" action="http://localhost:8888/10/Sample14.php" method="post">
    ファイル：<input type="file" name="myfile"/><br>
    <input type="submit" value="送信">
</form>
<?php
if(isset($_FILES["myfile"]["tmp_file"])) {
    $filename = "./uploaded_" . $_FILES["myfile"]["name"];
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $filename)) {
        print "送信しました<br/>\n";
    } else {
        print "送信に失敗しました<br/>\n";
    }
}
?>
</body>
</html>