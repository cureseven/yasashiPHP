<?php
require "Car.php";
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
$car1 = new Car(1234,25.5);
$car2 = new Car(2345,30.5);
echo $car1->getNumber() . PHP_EOL;
echo $car1->getGasorline() . PHP_EOL;

echo "----" . PHP_EOL;

echo $car2->getNumber() . PHP_EOL;
echo $car2->getGasorline() . PHP_EOL;
?>
</body>
</html>