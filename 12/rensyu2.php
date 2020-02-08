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
$fp = fopen("test/data.txt", "r");

while (!feof($fp)) {
    $num = fgets($fp);
    for ($i=0; $i<$num; $i++) {
        print "*";
    }
    print $num . "<br>";
}
fclose($fp);
?>
</body>
</html>