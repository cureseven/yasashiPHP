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

$pr1 = new Person();
$pr1->name = "鈴木";
$pr1->age = "56";

$pr2 = new Person();
$pr2->name = "佐藤";
$pr2->age = 38;

print $pr1->getage();
print $pr1->getname();
print $pr2->getage();
print $pr2->getname();
class Person{
    public $name = "姓名";
    public $age = 20;

    function getname(){return $this->name;}
    function getage(){return $this->age;}
}
?>
</body>
</html>