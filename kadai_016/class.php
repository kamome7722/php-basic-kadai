<?php
//クラスを定義する
class Food{
//プロパティを定義する
private $name;
private $price;
//メソッドの定義
public function show_height(int $height) {
  $this->height = $height;
}
//コンストラクタの作成
public function __construct(string $name, int $price) {
  $this->name = $name;
  $this->price = $price;
}
}

//クラスを定義する
class Animal{
//プロパティを定義する
private $name;
private $height;
private $weight;
//メソッドの定義
public function show_height(int $height) {
  $this->height = $height;
}
//コンストラクタの作成
public function __construct(string $name, int $height, int $weight) {
  $this->name = $name;
  $this->height = $height;
  $this->weight = $weight;
}
}

//インスタンス化する
$food = new Food('potato', 250);
print_r($food);
$animal = new Animal('dog', 60, 5000);
print_r($animal);
?>