<?php
require_once('menu.php');

class Drink extends Menu
{
  // $typeというprivateなプロパティを定義
  private $type;

  // getTypeメソッドを定義
  public function getType()
  {
    return $this->type;
  }

  // setTypeメソッドを定義
  public function setType($type)
  {
    $this->type = $type;
  }
}
