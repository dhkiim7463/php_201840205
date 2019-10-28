<?php
// include "class01.php";
// include "class02.php";
include "autoload.php";
//greeting();

$obj1 = new left;

$obj1->daelim();
$obj1->greeting();
$obj1->name = "대림이";
$proprty = "name";

echo $obj1->$proprty."입니다.<br>";
echo "영어 코드는 =".$obj1::ENGLISH."<br>";
$obj2 = new right;
$obj2->name = "대숙이";

echo "\n<br>";
$result = $obj2->greeting();
var_dump($result);
echo "\n<br>";

$obj2->daelim(  );
$result->daelim();

//메소드 체인
echo "---<br>";
$obj2 ->greeting()->daelim();
$obj2->greeting()->daelim()->foo()->bar();  //this 3개

echo "---<br>";
echo foo::$aaa; //인스턴그 하지 않은 정적클래스에서 슽정적으로 할거면 달라 표시 

foo::hello();