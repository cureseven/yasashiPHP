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
    printf("<tr><td>10進整数</td><td>%d</td></tr>",18);
    printf("<tr><td>2進整数</td><td>%b</td></tr>",18);
    printf("<tr><td>8進整数</td><td>%o</td></tr>",18);
    printf("<tr><td>16進整数</td><td>%x</td></tr>",18);
    printf("<tr><td>不動点小数点数(3桁)</td><td>%.3f</td></tr>",3.14);
    printf("<tr><td>不動点小数点数(6桁)</td><td>%.6f</td></tr>",3.14);
    printf("<tr><td>文字列</td><td>%s</td></tr>","Hello");

EOD;
     ?>
  </table>
</body>
</html>