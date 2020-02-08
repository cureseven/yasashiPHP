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
var_dump($_POST);
if (isset($_POST["insert"])) {
    $ipd = $_POST["insproduct"];
    $ipc = $_POST["insprice"];
    $qry = "INSERT INTO product(name, price) VALUES(:ipd, :ipc)";

    $stmt = $db->prepare($qry);
    $stmt->bindParam(":ipd", $ipd);
    $stmt->bindParam(":ipc", $ipc);
    $stmt->execute();
} elseif (isset($_POST["delete"])) {
    $did = $_POST["delid"];
    var_dump($did);
    $qry = "DELETE FROM product WHERE id = :did";
    $stmt = $db->prepare($qry);
    $stmt->bindParam(":did",$did);
    $stmt->execute();
}
$qry = "SELECT * FROM product";
$data = $db->query($qry);
?>
<h2>商品登録</h2>
<form action="http://localhost:8888/11/Sample8.php" method="post">
    商品名<input type="text" name="insproduct"><br>
    値段<input type="text" name="insprice"><br>
    <input type="submit" name="insert" value="追加">
<h2>商品一覧</h2>
<?php
while ($value = $data->fetch()) {
    print "<input type=\"radio\" name=\"delid\" value='{$value["id"]}'>";
    print "id=" . $value["id"] . ", name=" . $value["name"] . ", price=" . $value["price"] . "<br/>\n";
}
$db = null;
?>
<input type="submit" name="delete" value="削除">
</form>
</body>
</html>