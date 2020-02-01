<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サンプル</title>
</head>
<body>
<?php
create_headline("商品納期のご案内",1);
print "在庫があります場合は３営業日以内にお届けいたします。<br/>\n";

print "在庫がない場合は24時間以内に納期のご連絡をいたします。<br/>\n";

create_headline("商品送料のご案内",2);

print "全国一りつ1000円にて発送致しております。<br/>\n";

function create_headline($head, $num){
print "<h$num>{$head}</h$num>";
print "<hr/>";
}
?>
</body>
</html>