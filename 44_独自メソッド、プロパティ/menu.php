<?php
class Menu
{
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;
    // クラスプロパティ$countのアクセス権をprivateに、初期値を0
    private static $count = 0;

    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        // クラスプロパティcountの値に1を足す。
        self::$count++;
    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getOrderCount()
    {
        return $this->orderCount;
    }

    public function setOrderCount($orderCount)
    {
        $this->orderCount = $orderCount;
    }

    public function getTaxIncludedPrice()
    {
        return floor($this->price * 1.08);
    }

    public function getTotalPrice()
    {
        return $this->getTaxIncludedPrice() * $this->orderCount;
    }

    // getCountというクラスメソッドを追加
    public static function getCount()
    {
        return self::$count;
    }
}
