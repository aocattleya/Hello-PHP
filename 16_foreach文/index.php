<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

  <?php

  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

  foreach ($scores as $key => $value) {
      echo $key . 'は' . $value . '点です。';
  } ?>

</body>

</html>