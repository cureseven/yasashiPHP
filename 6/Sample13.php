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
$city = array("東京","名古屋","京都","大阪","福岡");

extract($city, EXTR_PREFIX_ALL,"c");
?>

<h3>変数で表示する</h3>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>都市名</th>
    </tr>
    <?php
    print "<tr><td>{$c_0}</td></tr>\n";
    print "<tr><td>{$c_1}</td></tr>\n";
    print "<tr><td>{$c_2}</td></tr>\n";
    print "<tr><td>{$c_3}</td></tr>\n";
    print "<tr><td>{$c_4}</td></tr>\n";

    $world = compact("c_0", "c_1","c_2","c_3","c_4");
    ?>
</table>
<h3>配列で表示する</h3>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>番号</th>
        <th>都市名</th>
    </tr>
    <?php
    foreach ($world as $id => $value){
        print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
    }
    ?>
</table>
</body>
</html>