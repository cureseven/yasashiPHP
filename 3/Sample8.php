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
      <th>文字列</th>
    </tr>
    <?php
    $msg1 = "こんにちは";
    $msg2 = "さようなら";
    $msg3 = "また明日";

    print "<tr><td>".$msg1.$msg2."</td></tr>\n";
    print "<tr><td>".$msg2.$msg3."</td></tr>\n";
    print "<tr><td>".$msg1.$msg3."</td></tr>\n";
    var_dump($msg1);
     ?>
  </table>

</body>
</html>