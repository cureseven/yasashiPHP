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
$dbname = "sqlite:pdb.db";
$usrname = "";
$psword = "";

$db = new PDO($dbname, $usrname, $psword);
$db->exec("DROP TABLE IF EXISTS product");
$db->exec("CREATE TABLE product(id INTEGER PRIMARY KEY, name STRING, price INTEGER )");

$qry = array(
    "INSERT INTO product (name, price) VALUES('鉛筆', 80)",
    "INSERT INTO product (name, price) VALUES('消しごむ', 20)",
    "INSERT INTO product (name, price) VALUES('定規', 180)",
    "INSERT INTO product (name, price) VALUES('ボールペン', 300)"
);

foreach ($qry as $value) {
    $db->exec($value);
}
$qry = "SELECT * FROM product";
$data = $db->query($qry);
while ($value = $data->fetch()){
//    var_dump($value);
    $id = $value["id"];
    $name = $value["name"];
    $price = $value["price"];
    echo "id=" . $id . "<br/>\n";
    echo "name=" . $name . "<br/>\n";
    echo "price=" . $price . "<br/>\n";
}
$db = null;
?>
</body>
</html>