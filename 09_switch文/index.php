<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

  <?php
  $num = 50;
  $remainder = $num % 3;

  switch ($remainder) {
      case 0:
          echo '大吉です。';
          break;

      case 1:
          echo '中吉です。';
          break;

      case 2:
          echo '小吉です。';
          break;

      default:
          echo '凶です。';
          break;
  } ?>

</body>

</html>