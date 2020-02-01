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
// パターンを用意
$ptr5 = array("Apple", "GoodBye", "ThankYou");
$ptr6 = array("PHP", "^PHP", "PHP$", "^PHP$");
$ptr7 = array("[012]", "[0-3]", "[^012]");
$ptr8 = array("P*", "P+", "P?", "P{3}");
$ptr = array("(PHP)+", "PHP|HPH");

// 検索対象文字列
$str5 = array("Hello", "GoodBye", "ThankYou");
$str6 = array("PHP", "PHPP", "PHPPP", "PPHP", "PHPPHP");
$str7 = array("0", "1", "2", "3", "");
$str8 = array("H", "PP", "PPP", "PPPP");
$str = array("PH", "PHP", "HPH", "PHPHP");

foreach ($ptr as $valueptr) {
    foreach ($str as $valuestr) {
        print "\$valueptr=" . $valueptr . "</br>";
        print "\$valuestr=" . $valuestr . "</br>";
        $mt = preg_match("/" . $valueptr . "/", $valuestr) ? "o" : "x";
        print $mt  . "</br>";
    }
}

?>
</body>
</html>