<?php
class Menu
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
}

$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');
?>

<p><?php echo $curry->name ?></p>
<p><?php echo $pasta->name ?></p>