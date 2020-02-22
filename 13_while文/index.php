<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $i = 2;

  while ($i <= 100) {
      if ($i % 2 == 0) {
          echo $i;
          echo '<br>';
      }
      $i++;
  } ?>

</body>
</html>
