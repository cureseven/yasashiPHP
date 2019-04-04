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
$city1 = array("東京","大阪","京都");
$city2 = array("神戸","名古屋","福岡");

$world = array_merge($city1,$city2);

print "<table border=\"2\">\n";
print "<tr bgcolor=\"#AAAAAA\">\n";
print "<th>順位</th>\n";
print "<th>点数</th>\n";
print "</tr>\n";

foreach ($world as $i => $value){
    print "<tr><td>{$i}</td><td>{$value}</td></tr>\n";
}
?>
</table>

</body>
</html>