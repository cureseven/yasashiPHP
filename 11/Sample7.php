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
$qry = "SELECT * FROM product ORDER BY price";

if (isset($_POST["sort"]) && $_POST["sort"] == "desc") {
    $qry = $qry . " DESC";
}
var_dump($qry);
print "<hr>";
$stmt = $db->prepare($qry);
$stmt->execute(); // 実行

while ($value = $stmt->fetch()) {
    print "id=" . $value["id"] . ", name=" . $value["name"] . ", price=" . $value["price"] . "<br/>\n";
}
$db = null;
?>
<form action="http://localhost:8888/11/Sample7.php" method="post">
    <input type="radio" name="sort" value="asc"
        <?php
        if (!isset($_POST["sort"]) || $_POST["sort"] != "desc") {
            print "checked;";
        }
        ?>>昇順
    <input type="radio" name="sort" value="desc"
        <?php
        if (isset($_POST["sort"]) && $_POST["sort"] == "desc") {
            print "checked;";
        }
        ?>>降順
    <input type="submit" value="並べ替え">
</form>
</body>
</html>