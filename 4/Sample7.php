<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  $num = 10;

  print "ようこそ<br />\n";
  print "<hr />\n";

  switch($num){
    case 0:
    print "在庫切れです．<br />\n";
    break;
    case 1:
    case 2:
    case 3:
    print "在庫が僅少です．<br />\n";
    break;

    default:
    print "在庫があります．<br />\n";
    break;
  }

  print "<hr />\n";
  print "ごゆっくりお過ごしください．<br />\n";
   ?>

</body>
</html>