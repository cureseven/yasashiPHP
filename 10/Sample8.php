<?php setcookie("count",true); ?>
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
<h2>入店のご案内</h2>
<hr>
<?php
if (!isset($_COOKIE["count"])) {
    print "初めてのお越しですね。<br/>\n";
} else {
    print "毎度ありがとうございます<br/>\n";
}
?>

</body>
</html>