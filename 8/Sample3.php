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
$pr = new Person();
$pr->setname("鈴木");
$pr->setage(24);

echo $pr->getname();
echo $pr->getage();

class Person
{
    private $name = "姓名";
    private $age = 20;

    public function setname($nm){
        $this->name = $nm;
    }
    public function setage($ag){
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