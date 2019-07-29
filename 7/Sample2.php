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
    buy();

    print ("もう1回商品を購入します。<br/>\n");

    buy();

    function buy(){
        print "<hr/>\n";
        print "商品をお買い上げいただきました。<br/>\n";
        print "<hr/>\n";
    }
?>

</body>
</html>