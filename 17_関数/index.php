<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

  <?php

  $str = 'progate';

  // $strの長さ
  echo strlen($str);
  echo '<br>';

  $array = array('HTML', 'CSS', 'PHP');

  // $arrayの要素数
  echo count($array);
  echo '<br>';

  // 10から15までのランダムな数字
  echo rand(10, 15); ?>

</body>

</html>