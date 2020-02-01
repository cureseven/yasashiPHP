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
$a = 0;

print "変数\$aが使えます。<br/>\n";
print "変数\$aの値は{$a}です。<br/>\n";

funcB();
funcC();

function funcB() {
    $b = 1;

    print "<hr/>\n";
    print "funcB関数では変数\$bが使えます。<br/>\n";
    print $b;
//    print $a;
}
?>
</body>
</html>