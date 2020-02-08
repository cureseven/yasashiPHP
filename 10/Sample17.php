<?php

if(!isset($_SERVER["PHP_AUTH_USER"])){
    header("WWW-Authenticate: Basic realm=\"realm\"");
    header("HTTP/1.0 401 Unauthorized");
    exit("401 Unauthorized");
} else {
    if($_SERVER["PHP_AUTH_USER"] != "admin"){
        header("WWW-Authenticate: Basic realm=\"realm\"");
        header("HTTP/1.0 401 Unauthorized");
        exit("401 Unauthorized");
    }
}
?>
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
<select name="city" id="">
<?php
    $city = array("東京","名古屋","仙台","京都","広島");
    foreach ($city as $name => $value) {
        print "<option value=\"{$value}\">{$value}</option>";
    }
?>
</select>
</body>
</html>