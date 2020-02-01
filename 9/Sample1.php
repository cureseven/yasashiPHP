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
$product1 = array("pencil", "eraser", "ruler");
$product2 = array("pen", "eraser", "rubber");
$product3 = array("鉛筆", "消しゴム", "ボールペン");

foreach ($product3 as $value){
    echo "mb_strlen" . mb_strlen($value) . "<br/>";
    echo "strlen" . strlen($value) . "<br/>";
}

foreach ($product1 as $value) {
    foreach ($product2 as $value2){
        print $value2 . "の長さは" . strlen($value2) . です . "</br>";
        if(strcmp($value,$value2) == 0){
            $mt = "o";
        } else {
            $mt = "x";
        }
        print $value . "と" . $value2 . "->" . $mt . "</br>";
    }
}
echo "大文字に変換→" . strtoupper($product1[0]) . "</br>";
echo "小文字に変換→" . strtolower("AAAAAAAA") . "</br>";
echo "逆順" . strrev("abcdefg") . "</br>";
echo "文字列の一部を取り出す" . substr("abcdefg", 0, 3);
?>
</body>
</html>