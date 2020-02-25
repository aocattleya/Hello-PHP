<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Café Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="menu-wrapper container">
        <h1 class="logo">Café Progate</h1>
        <div class="menu-items">
            <?php foreach ($menus as $menu) : ?>
                <div class="menu-item">
                    <!-- imageプロパティのゲッターを用いて表示 -->
                    <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
                    <!-- nameプロパティのゲッターを用いて表示 -->
                    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
                    <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>