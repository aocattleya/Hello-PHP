<?php
class Menu {
    public $name;
    public function hello() {
        echo '私は'.$this->name.'です';
    }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();