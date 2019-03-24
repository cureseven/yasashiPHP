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
  $product[0] = "鉛筆";
  $product[1] = "消しゴム";
  $product[2] = "定規";
  $product[3] = "コンパス";
  $product[4] = "ボールペン";
   ?>
   <table border="2">
     <tr bgcolor="#AAAAAA">
       <th>番号</th>
       <th>商品名</th>
     </tr>
     <?php
     foreach ($product as $id => $value) {
       print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
     }
      ?>
   </table>

</body>
</html>