<?php
class Menu
{
    public $name;
  // helloメソッドを定義
    public function hello()
    {
        echo '私はMenuクラスのインスタンスです';
    }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
// $curryに対してhelloメソッドを呼び出し
$curry->hello();

echo '<br>';
// $pastaに対してhelloメソッドを呼び出し
$pasta->hello();
