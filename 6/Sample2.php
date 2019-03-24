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
  $stock["みかん"] = 80;
  $stock["いちご"] = 60;
  $stock["りんご"] = 22;
  $stock["もも"] = 50;
  $stock["くり"] = 57;
   ?>
  <table border="2">
    <tr bgcolor="#AAAAAA">
      <th>在庫状況</th>
    </tr>
  <?php
  print "<tr><td>みかんは{$stock["みかん"]}個です．</td></tr>\n";
  print "<tr><td>いちごは{$stock["いちご"]}個です．</td></tr>\n";
  print "<tr><td>りんごは{$stock["りんご"]}個です．</td></tr>\n";
  print "<tr><td>ももは{$stock["もも"]}個です．</td></tr>\n";
  print "<tr><td>くりは{$stock["くり"]}個です．</td></tr>\n";
   ?>
  </table>

</body>
</html>