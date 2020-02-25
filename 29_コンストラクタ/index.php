<?php
class Menu {
    public $name;
    // コンストラクタを定義
    public function __construct() {
        echo "1つのメニューが作られました";
    }
    public function hello() {
        echo '私は'.$this->name.'です';
    }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();
