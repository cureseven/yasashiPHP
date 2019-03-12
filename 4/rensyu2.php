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
  $num1 = 1;
  $num2 = 4;
  if($num1 == $num2){
    print "二つの数は同じ値です．<br />\n";
  }
  elseif($num1 > $num2){
    print "{$num2}より{$num1}の方が大きい値です．<br />\n";
  }
  elseif($num1 < $num2){
    print "{$num1}より{$num2}の方が大きい値です．<br />\n";
  }
  else{
    print "error <br />\n";
  }
   ?>

</body>
</html>