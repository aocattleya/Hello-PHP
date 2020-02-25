<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <!-- 変数$totalPaymentを定義し、数値の0を代入 -->
    <?php $totalPayment = 0 ?>

    <?php foreach ($menus as $menu) : ?>
      <?php
      $orderCount = $_POST[$menu->getName()];
      $menu->setOrderCount($orderCount);
      // $totalPaymentに、$menuのgetTotalPriceメソッドで得た値を足す。
      $totalPayment += $menu->getTotalPrice();

      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    <!-- $totalPaymentを表示 -->
    <h3>合計金額: <?php echo $totalPayment ?>円</h3>
  </div>
</body>

</html>