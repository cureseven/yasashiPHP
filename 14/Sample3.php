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
<h2>商品のご選択</h2>
<form action="http://localhost:8888/14/Sample3.php" method="post">
    <input type="text" name="product">
    <input type="submit" value="送信">
</form>
<?php
    try {
        if(isset($_POST["product"])) {
            if($_POST["product"] == '')
                throw new NoInputException;
            elseif (strlen($_POST["product"])>10)
                throw new TooLongException;
            else
                print "「{$_POST["product"]}」をお買い上げいただきました<br>\n";
        }
    } catch (NoInputException $e) {
        print $e . "入力をお願いします";
    } catch (TooLongException $e) {
        print $e . "正しい商品名をお願いします";
    }

    class NoInputException extends Exception {
        function __toString()
        {
            return "商品名が入力されていません";
        }
    }

    class TooLongException extends Exception {
        function __toString()
        {
            print __FUNCTION__;
            return "商品名が長すぎます";
        }
    }
    // Sample4
    print __LINE__;
    print __FILE__;
?>
</body>
</html>