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
  $num = 2;

  print "ようこそ．</br>\n";
  print "<hr />\n";

  if($num <= 0){
    print "在庫切れです．<br />\n";
    print "在庫数は{$num}です．\n";
  }elseif ($num <= 3) {
    print "在庫が僅少です．<br />\n";
  }
  else{
    print "在庫があります．<br />\n";
  }

  print "<hr />\n";
  print "ごゆっくりお過ごしください．"
   ?>

</body>
</html>