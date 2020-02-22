<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

  <?php

  function hello()
  {
      echo 'Hello, world!';
  }

  hello();
  echo '<br>';

  function printRectangleArea($height, $width)
  {
      echo $height * $width;
  }

  printRectangleArea(5, 10); ?>

</body>

</html>