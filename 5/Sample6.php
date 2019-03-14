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
  print "<hr />\n";

  $i = 0;

  do{
    print "商品{$i}を表示します．<br />\n";
    $i++;
  }while($i < 5);

  print "<hr />\n";
  print "商品は以上です．<br />\n";
   ?>

</body>
</html>