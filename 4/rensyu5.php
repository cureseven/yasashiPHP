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
  $score = 5;
  print "成績は{$score}です．";
  switch($score) {
    case 1:
      print "もっと頑張りましょう．<br />\n";
      break;

    case 2:
      print "もう少し頑張りましょう．<br />\n";
      break;

    case 3:
      print "さらに上を目指しましょう．<br />\n";
      break;

    case 4:
      print "大変よくできました．<br />\n";
      break;

    case 5:
      print "大変優秀です．<br />\n";
      break;

    default:
      print "error <br />\n";
      break;
  }

   ?>

</body>
</html>