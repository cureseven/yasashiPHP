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
      <th>身長</th>
      <th>体重</th>
    </tr>
    <tr>
      <?php
      $length = 165.2;
      $weight = 52.5;
      print "<td>{$length}</td>";
      print "<td>{$weight}</td>";
       ?>
    </tr>

  </table>

</body>
</html>