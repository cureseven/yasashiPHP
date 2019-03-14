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
      <th>iの値</th>
      <th>jの値</th>
    </tr>
    <?php
    for($i=0; $i<5; $i++){
      for($j=0; $j<3; $j++){
        print "<tr><td>$i</td><td>{$j}</td></tr>\n";
      }
    }
     ?>
  </table>

</body>
</html>