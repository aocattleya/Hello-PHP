<?php
require_once('menu.php');

class Food extends Menu
{
  // $spicinessというprivateなプロパティを定義
  private $spiciness;

  // 親クラスの__constructをオーバーライド
  public function __construct($name, $price, $image, $spiciness)
  {
    parent::__construct($name, $price, $image);
    $this->spiciness = $spiciness;
  }

  // getSpicinessメソッドを定義
  public function getSpiciness()
  {
    return $this->spiciness;
  }
}
