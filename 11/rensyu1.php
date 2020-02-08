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
$db = new PDO("sqlite:fdb.php","","");
$db->exec("DROP TABLE IF EXISTS fruits");
$db->exec("CREATE TABLE fruits(id INTEGER PRIMARY KEY, name STRING, price INTEGER )");

$insert = array(
    "INSERT INTO fruits (name, price) VALUES('みかん', 80);",
    "INSERT INTO fruits (name, price) VALUES('イチゴ', 60);",
    "INSERT INTO fruits (name, price) VALUES('りんご', 22);",
    "INSERT INTO fruits (name, price) VALUES('桃', 50);",
    "INSERT INTO fruits (name, price) VALUES('くり', 75);",
);

foreach ($insert as $i) {
    $db->exec($i);
}

$where = '';
if ($_POST["ref"] == "few") {
    $where = " WHERE price <= 30";
}
$qry = "SELECT * FROM fruits" . $where;

$datas = $db->query($qry);

while ($value = $datas->fetch()) {
    print "id=" . $value["id"] . ", name=" . $value["name"] . ", price=" . $value["price"] . "<br>";
}
?>

<form action="http://localhost:8888/11/rensyu1.php" method="post">
    <input type="radio" name="ref" value="all"
        <?php
            if(!isset($_POST["ref"]) || $_POST["ref"] != "few") {
                print "checked;";
            }
        ?>>全件表示
    <input type="radio" name="ref" value="few"
        <?php
            if(isset($_POST["ref"]) && $_POST["ref"] == "few") {
                print "checked";
            }
        ?>>安いの表示
    <input type="submit" value="表示">
</form>
</body>
</html>