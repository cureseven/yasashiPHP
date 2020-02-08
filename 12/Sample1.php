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
$status = stat("Sample1.php");

foreach ($status as $name => $value) {
    print $name . " " . $value . "<br/>";
}

print "<hr>";

// Sample2
$curdir = opendir(".");

while ($name = readdir($curdir)) {
    print $name . "<br/>";

    // Sample3
    $isd = is_dir($name) ? "Directory" : "File";
    $isw = is_writable($name) ? "o" : "x";
    $isr = is_readable($name) ? "o" : "x";
    print "isdir? " . $isd . "<br>";
    print "is_writable? " . $isw . "<br>";
    print "is_readable? " . $isr . "<br>";
}
closedir($curdir);

?>
</body>
</html>