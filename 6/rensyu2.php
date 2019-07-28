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
            <th>番号</th>
            <th>点数</th>
        </tr>
        <tr>
            <?php
            $score = [80,60,22,50,75];
            $count = 0;
            foreach ($score as $id => $value) {
                echo ("<tr><td>$id</td><td>$value</td></tr>");
                if ($value >= 70) {
                    $count++;
                }
            }
            ?>
        </tr>
    </table>
    <?php
    echo ("<p>70点以上の学生は" . $count . "人です。</p>");
    ?>

</body>
</html>