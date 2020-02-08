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
var_dump($_SERVER);
print "<hr/>";
print "SERVER_NAME " . $_SERVER["SERVER_NAME"];
print "<hr/>";
print "SERVER_ADDR " . $_SERVER["SERVER_ADDR"];
print "<hr/>";
print "SERVER_SOFTWARE " . $_SERVER["SERVER_SOFTWARE"];
print "<hr/>";
print "SERVER_PORT " . $_SERVER["SERVER_PORT"];
print "<hr/>";
print $_SERVER["DOCUMENT_ROOT"];
print "<hr/>";
print $_SERVER["PHP_SELF"];
print "<hr/>";
print "REMOTE_ADDR " . $_SERVER["REMOTE_ADDR"];
print "<hr/>";
print $_SERVER["HTTP_USER_AGENT"];
print "<hr/>";
print "SERVER_PROTOCOL " . $_SERVER["SERVER_PROTOCOL"];
print "<hr/>";
print "REQUEST_METHOD " . $_SERVER["REQUEST_METHOD"];
print "<hr/>";
print "REQUEST_URI " . $_SERVER["REQUEST_URI"];
print "<hr/>";

if($isset($_SERVER["HTTP_REFERER"])) {
    $r = $_SERVER["HTTP_REFERER"];
} else {
    $r = "";
    print $r;
}
?>
</body>
</html>