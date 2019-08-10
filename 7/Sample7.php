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
$product = array(array(100,5),array(20,16),array(25,40));
?>

<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>単価</th>
        <th>個数</th>
        <th>小計</th>
    </tr>
    <?php

    for($i = 0; $i < 3; $i++) {
        $p = $product[$i][0];
        $n = $product[$i][1];
        $t = total($p, $n);
        print "<tr><td>{$p}円</td><td>{$n}個</td><td>{$t}円</td></tr>\n";
    }

    function total ($pr,$n){
        return $pr * $n;
    }
    ?>
</table>

</body>
</html>