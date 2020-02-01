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
$a = 5;
print "1番目の数値は{$a}です。<br/>\n";
$b = 10;
print "2番目の数値は{$b}です。<br/>\n";
mini($a,$b);

function mini($x,$y){
    if($x<$y){
        print "最小値は{$x}です。<br/>\n";
    }else{
        print "最小値は{$y}です。<br/>\n";
    }
}

?>
</body>
</html>