<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php $num = 0; ?>
  ようこそ．</br>
  <hr>
  <?php if($num <= 0): ?>
  在庫切れです．<br>

  <?php elseif($num <= 3): ?>
  在庫が僅少です．<br>

  <?php else: ?>
  在庫があります．<br>

  <?php endif; ?>

  <hr>
  ごゆっくりお過ごしください．<br>

</body>
</html>