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
$pr1 = new Person("佐藤", 21);
$pr2 = new Person("渡邊",24);

echo $pr1->getname() . "\n";
echo $pr1->getage() . "\n";

echo $pr2->getname() . "\n";
echo $pr2->getage() . "\n";

echo Person::$count;

class Person{
    private $name = "姓名";
    private $age = 20;
    // クラス全体に1つの値
    public static $count = 0;

    public function __construct($nm, $ag)
    {
        Person::$count++;

        $this->name = $nm;
        if($ag>=20 && $ag<=60) {
            $this->age = $ag;
        } else {
            $this->age = -1;
        }
    }
    public function getname(){return $this->name;}
    public function getage(){return $this->age;}
}
?>
</body>
</html>