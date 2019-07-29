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

        buy("鉛筆");
        buy("消しゴム");

        function buy ($pr)
        {
            print "<hr/>\n";
            print "商品「{$pr}」をお買い上げいただきました。";
            print "<hr/>\n";
        }
    ?>
</body>
</html>