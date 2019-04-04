<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$test = array(22,80,75,60,50);
sort($test);
?>
<h3>昇順</h3>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>番号</th>
        <th>点数</th>
    </tr>
    <?php
    foreach ($test as $id => $value){
        print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
    }
    rsort($test);
    ?>
</table>

<h3>降順</h3>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>番号</th>
        <th>点数</th>
    </tr>
    <?php
    foreach ($test as $id => $value) {
        print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
    }
    ?>

</body>
</html>