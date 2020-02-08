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
$fp = fopen("test/test.csv", "r");
while (!feof($fp)) {
    $str = fgetcsv($fp);
    if (is_array($str)) {
        var_dump($str);
        foreach ($str as $value) {
            print $value . "<br>";
        }
    }
}
fclose($fp);
?>
</body>
</html>