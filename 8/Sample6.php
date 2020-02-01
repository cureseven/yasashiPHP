<?php
    include "MyClass.php";
?>
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
$usr1 = new User("cureseven",23,"aaa@gg.cc",21345678);
echo $usr1->getname() . PHP_EOL;
echo $usr1->getage() . PHP_EOL;
echo $usr1->gettel() . PHP_EOL;
echo $usr1->getadr() . PHP_EOL;
?>
</body>
</html>