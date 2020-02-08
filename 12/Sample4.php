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
<form action="http://localhost:8888/12/Sample4.php" method="post">
    ファイル名 <input type="text" name="title"><br>
    <textarea name="content" id="" cols="30" rows="10">
    <?php
        if (isset($_POST["title"]) && file_exists($_POST["title"])) {
            $fp = fopen($_POST["title"], "r");
            while (!feof($fp)) {
                print fgets($fp);
            }
            fclose($fp);
        }
    ?>
    </textarea><br>
    <input type="submit" value="読み込み">
</form>
</body>
</html>