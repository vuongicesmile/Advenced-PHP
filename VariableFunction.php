<?php
$st = "Hello";

$len = strlen($st);

echo $len, PHP_EOL;

$lenfunc = "strlen";

// nhận hàm rồi gọi call
$len = $lenfunc($st);

echo $len, PHP_EOL;