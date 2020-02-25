<?php
class Menu {
  // $nameというプロパティを定義
  public $name;
}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入
$curry->name = 'CURRY';

// $pastaのnameプロパティに'PASTA'を代入
$pasta->name = 'PASTA';

echo $curry->name;
echo '<br>';
echo $pasta->name;
