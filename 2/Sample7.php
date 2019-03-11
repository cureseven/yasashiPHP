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
  print <<< EOD
  <table border="2">
  <tr>
    <th>文字コード</th>
    <th>文字</th>
  </tr>
  <tr>
    <td>8進数101</td>
    <td>\101</td>
  </tr>
  <tr>
    <td>16進数61</td>
    <td>\x61</td>
  </tr>
  </table>

EOD;
   ?>

</body>
</html>