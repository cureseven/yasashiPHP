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
$score = array(80,60,22,50,75);
$max = 0;

?>
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>番号</th>
        <th>点数</th>
    </tr>
    <?php
    foreach ($score as $id => $value) {
        if ($max < $score[$id]) {
            $max = $score[$id];

            print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
        }
    }
    ?>
</table>
<?php
print "<br/>最高点は{$max}です．<br/>\n";
?>

</body>
</html>