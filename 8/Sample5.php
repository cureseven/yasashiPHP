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
$pr = new Person("佐藤", 21);

echo $pr->getname() . "\n";
echo $pr->getage() . "\n";

$usr = new User("cureseven",24,"cc@dd,ff",1234567);
echo $usr->getname();

class Person {
    protected $name = "姓名";
    protected $age = 20;
    public function __construct($nm, $ag)
    {
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

class User extends Person{
    private $adr = "xx@xx.xx";
    private $tel = 123456789;

    public function __construct($nm, $ag, $ad, $tl)
    {
        parent::__construct($nm, $ag);
        $this->adr = $ad;
        $this->tel = $tl;
    }
    public function getname(){return "会員：" . $this->name;}
    public function gettel(){return $this->tel;}
    public function getadr(){return $this->adr;}
}
?>
</body>
</html>