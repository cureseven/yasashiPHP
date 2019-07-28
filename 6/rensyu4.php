<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $dialy = [
            ["8月1日","東京に行きました"],
            ["8月2日","今日は晴れでした"],
            ["8月5日","明日から休暇です"],
            ["8月7日","帰省します"],
            ["8月8日","到着しました"],
        ];
        $dialy2 = [
            "day1" => "test1",
            "day2" => "test2",
            "day3" => "test3",
        ];

    ?>
    <table border="2">
        <tr bgcolor="#AAAAAA">
            <th>日付</th>
            <th>タイトル</th>
        </tr>
        <?php
            foreach ($dialy as $d) {
                echo ("<tr>");
//                echo implode($d);
                foreach ($d as $value){
                    echo ("<td>{$value}</td>");
                }
            }
        ?>
    </table>

    <table border="2">
        <tr bgcolor="#AAAAAA">
            <th>日付</th>
            <th>タイトル</th>
        </tr>
        <?php
        foreach ($dialy2 as $d => $t) {
            echo ("<tr><td>{$d}</td><td>{$t}</td></tr>");
        };
        ?>
    </table>

</body>
</html>