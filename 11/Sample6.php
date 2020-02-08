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
$pw = "";

$db = new PDO($dbname, $usrname, $pw);

$word = null;

if (isset($_POST["word"])) {
    $word = $_POST["word"];
}

$qry = "SELECT * FROM product WHERE name LIKE :word";
$word = "%" . $word . "%";
$stmt = $db->prepare($qry);
$stmt->bindParam(":word", $word);
$stmt->execute();

while ($value = $stmt->fetch()) {
    $id = $value["id"];
    $name = $value["name"];
    $price = $value["price"];

    print "id=" . $id . ", name=" . $name . ", price=" . $price;
}
$db = null;
?>
<form action="http://localhost:8888/11/Sample6.php" method="post">
    <input type="text" name="word">
    <input type="submit" value="検索">
</form>
</body>
</html>