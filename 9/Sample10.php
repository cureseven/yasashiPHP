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
$str = array("Sample.xml", "Sample.exe", "test.php", "index.html");
foreach ($str as $value) {
    $rpvalue = preg_replace("/\.(xml|html|php)$/", ".txt", $value);
    print "変換前：" . $value . "　変換後：" . $rpvalue . "<br>";
}
?>

</body>
</html>