<?php
class Menu {
    public $name;
    public function __construct($name) {
    // nameプロパティに引数の$nameを代入
        $this->name = $name;
    }
    public function hello() {
        echo '私は'.$this->name.'です';
    }
}

// new Menu()の引数に'CURRY'
$curry = new Menu('CURRY');
// new Menu()の引数に'PASTA'
$pasta = new Menu('PASTA');

$curry->hello();
echo '<br>';
$pasta->hello();
