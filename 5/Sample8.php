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
  $ch = 0;
  for($i=0; $i<5; $i++){
    for($j=0; $j<5; $j++){
      if($ch == 0){
        print "<img src=\"{$ch}.jpg\" style=\"width:50px;\"/>";
        $ch = 1;
      }
      else{
        print "<img src=\"{$ch}.jpg\" style=\"width:50px;\"/>";
        $ch = 0;
      }
    }
    print "<br />\n";
  }
   ?>

</body>
</html>