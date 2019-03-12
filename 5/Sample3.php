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
    <tr bgcolor="#AAAAAA">
      <th>イメージ</th>
      <th>商品名</th>
    </tr>
    <?php
    for($i=0; $i<5; $i++){
      print "<tr>\n";
      print "<td><img style=\"width:100px\" src=\"{$i}.jpg\"/></td><td>商品{$i}</td>\n";
      print "</tr>\n";
    }

     ?>
  </table>

</body>
</html>