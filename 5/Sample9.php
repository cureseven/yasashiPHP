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
  $stop = 3;
  print "商品{$stop}までしか販売しておりません．<br />\n";
  print "<hr />\n";

  for($i=0; $i<5; $i++){
    print "商品{$i}を表示します．<br />\n";
    if($i == $stop)
      break;
  }

  print "<br />\n";
  print "商品は以上です．<br />\n";
   ?>

</body>
</html>