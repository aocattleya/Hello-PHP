<!-- data.phpを読み込み  -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Café aocattleya</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="menu-wrapper container">
        <h1 class="logo">Café aocattleya</h1>
        <div class="menu-items">
            <?php foreach ($menus as $menu) : ?>
                <h3 class="menu-item-name"><?php echo $menu->name ?></h3>
            <?php endforeach ?>

        </div>
    </div>
</body>

</html>