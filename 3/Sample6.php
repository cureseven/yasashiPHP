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
  $product = "消しゴム";
  $num = 10;
  $price = 50;
  $total = $price * $num;
  $total = $total - 100;
   ?>
   <table border="2">
     <tr>
       <th>内容</th>
       <th>金額</th>
     </tr>
     <?php
     print "<tr><td>品名</td><td>{$product}</td></tr>\n";
     print "<tr><td>単価</td><td>{$price}円</td></tr>\n";
     print "<tr><td>個数</td><td>{$num}こ</td></tr>\n";
     print "<tr><td>計</td><td>{$total}円(ただし100円引き)</td></tr>"
      ?>
   </table>
</body>
</html>