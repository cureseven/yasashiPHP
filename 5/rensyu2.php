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
    for($i=1; $i<=9; $i++){
      print "<tr>\n";
      for($j=1; $j<=9; $j++){
        $ans = $i * $j;
        print "<td>{$ans}</td>\n";
      }
      print "</tr>\n";
    }
     ?>
  </table>
</body>
</html>