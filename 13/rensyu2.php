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
<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>タイトル</th>
        <th>解説</th>
        <th>日付</th>
    </tr>
    <?php
    $doc = simplexml_load_file("Sample.rss");

    foreach ($doc->channel->item as $list) {
        print "<tr>";

        print "<td>";
        print "<a href=\"\"";
        print $list->link;
        print "\">";
        print $list->title;
        print "</a>";
        print "</td>";

        print "<td>" . $list->description . "</td>";
        print "<td>" . $list->pubDate . "</td>";

        print "</tr>";
    }
    ?>
</table>
</body>
</html>