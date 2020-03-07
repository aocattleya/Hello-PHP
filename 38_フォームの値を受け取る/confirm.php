<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>aocattleya</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php foreach ($menus as $menu) : ?>
      <!-- 変数$orderCountに$_POSTで受け取った値を代入 -->
      <?php $orderCount = $_POST[$menu->getName()] ?>
      <p class="order-amount">
        <!-- $menuのゲッターを用いてnameプロパティを表示 -->
        <?php echo $menu->getName() ?>
        x
        <!-- $orderCountを表示 -->
        <?php echo $orderCount ?>
        個
      </p>
    <?php endforeach ?>
  </div>
</body>

</html>