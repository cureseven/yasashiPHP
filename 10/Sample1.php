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
$city = array("東京","広島","山口","宮城");
?>
<h2>出発地のご案内</h2>
<form action="">
    <select name="city">
        <?php
        foreach ($city as $name => $value) {
            print "<option value={$value}>{$value}</option>";
        }
        ?>
    </select>
</form>
</body>
</html>