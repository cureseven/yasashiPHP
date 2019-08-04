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
$product = "鉛筆";
$price = 50;
$num = 10;

$total = buy($product, $price, $num);

print "合計{$total}円です。<br />\n";

function buy($pr, $pc ,$nm) {
    print "<hr />\n";
    print "商品{$pr}を{$pc}円で{$nm}個お買い上げいただきました。<br/>\n";

    $tt = $pc * $nm;

    print "<hr/>\n";

    return $tt;

}
?>

</body>
</html>