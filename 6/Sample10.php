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
$stock = array("みかん"=>80,"いちご"=>60,"りんご"=>22,"もも"=>50,"くり"=>75);
?>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>商品名</th>
        <th>個数</th>
    </tr>
    <?php
    while (list($name, $value) = each($stock)){
        print "<tr><td>{$name}</td><td>{$value}個</td></tr>\n";
    }
    ?>
</table>
</body>
</html>