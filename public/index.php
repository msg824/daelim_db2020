<?php
echo "안녕하세요.";

// include "../loading.php";
include "../vendor/autoload.php";

// 클래스의 객체를 생성
$obj = new \Modules\Minsung\Hello;
$obj->greeting();