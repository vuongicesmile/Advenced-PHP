<?php

$name = "NQV";

// Để sử dụng đc biến trong hàm ẩn danh cần khai báo use
// mới sử dụng được biến toàn cục
$hello = function () use($name) {
  return "Hello $name \n";
};


echo $hello(); //  Hello
// còn trong arrow func thì ngầm định sử dụng đc luôn
$welcome = fn () => "Welcome to $name \n";
echo $welcome();

$add = fn($a , $b) => $a + $b;

echo $add(5,6), PHP_EOL
?>