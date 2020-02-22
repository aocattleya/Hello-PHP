<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    $x = 1071;
  if ($x % 3 == 0 && $x % 7 == 0) {
      echo 'xは3の倍数かつ7の倍数です。';
  } elseif ($x % 3 == 0) {
      echo 'xは3の倍数ですが7の倍数ではありません。';
  } elseif ($x % 7 == 0) {
      echo 'xは7の倍数ですが3の倍数ではありません。';
  } else {
      echo 'xは7の倍数でも3の倍数でもありません。';
  } ?>

</body>
</html>
