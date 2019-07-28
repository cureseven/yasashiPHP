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
    <table border = 2>
        <tr>
            <td>変換前</td>
            <td>
                <?php
                $beforestr = ["a","l","g","e","b","r","a"];
                foreach ($beforestr as $id => $value){
                    echo ($value);
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>変換後</td>
            <td>
                <?php
                foreach ($beforestr as $id => $value){
                    if ($value == "a"){
                        echo "b";
                    } else {
                        echo $value;
                    }
                }
                ?>
            </td>
        </tr>

    </table>

</body>
</html>