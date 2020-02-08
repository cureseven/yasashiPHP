<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        th{
            height: 10px;
            width: 70px;
            background-color: #AAAAAA;
        }
        td {
            font-family: Verdana;
            font-size: 15px;
            height: 50px;
            width: 70px;
        }
        td.today{
            font-size: 25px;
            font-weight: bold;
            background-color: #AAAAAA;
        }
    </style>
</head>
<body>
<?php
$tm = time();
$dt = getdate($tm); // 現在時刻
$fm = mktime(0,0,0,$dt["mon"],1,$dt["year"]); // 月初
$fw = date("w",$fm); // 月初曜日 0(日曜)~6(土曜)
$ld = date("t",$tm); // 月終日

$wd = array("日","月","火","水","木","金","土");

print "<h2>" . $dt["month"] . "," . $dt["year"] . "</h2>";

print "<table border =\"2\">";

//カレンダーのheadを作る
print "<tr>";
foreach ($wd as $value) {
    print "<th>{$value}</th>";
}
print "</tr>";
// カレンダーのbodyを作る
print "<tr>";
// 月初の空欄を作る
for ($i=0; $i<$fw;$i++) {
    print "<td></td>";
}
//var_dump($fw);
var_dump($i);
var_dump($value);
// foreachやifを抜けても変数に値のこってるぞ

// 中身を作る
for($j=1; $j<$ld; $j++) {
    if($j == $dt["mday"]) {
        print "<td class=\"today\">{$j}</td>";
    } else {
        print "<td>{$j}</td>";
    }
    if (($j+$i)%7 == 0) {
        print "</tr><tr>";
    }
}

print "</tr>";
print "</table>";
?>
</body>
</html>