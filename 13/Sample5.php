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
<form action="http://localhost:8888/13/Sample5.php" method="post">
    <input type="text" name="url">
    <input type="submit" value="送信">
</form>
<?php
    if (isset($_POST["url"])) {
        $doc = simplexml_load_file($_POST["url"]);

        print "<center>";
        print "<h1>{$doc->channnel->title}</h1>";
        print $doc->channel->description;
        print "<hr>";
        print "</center>";

        foreach ($doc->channel->item as $list) {
            print $list->link . "<br>";
            print $list->description . "<br>";
            print $list->pubDate;
        }
    }
?>
</body>
</html>