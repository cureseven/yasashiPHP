<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="2">
    <?php
    for($i=1; $i<=10; $i++){
      if($i % 2){
        print "<tr bgcolor=\"#AAAAAA\"><td>商品{$i}を表示します．</td></tr>\n";
      }else{
        print "<tr><td>商品{$i}を表示します．</td></tr>\n";
      }
    } ?>
  </table>

</body>
</html>