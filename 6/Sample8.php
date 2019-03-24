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
array_push($city,"長崎","鹿児島");
array_pop($city);
array_unshift($city,"札幌","仙台");
array_shift($city);
unset($city[2]);
?>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>番号</th>
        <th>都市名</th>
    </tr>
    <?php
    foreach ($city as $id => $value){
        print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
    }
    ?>
</table>
</body>
</html>