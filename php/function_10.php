<?php

include "function_11.php";  //함수를 선언한다.
include "function_11.php"; //함수 중복 처리한다.
//호출하자!! 
list($name, $num)  = daelim("대림이" , 201840205);     //변수는 $로 시작하고 숫자는 쓸수없다.
// $name <--- $name[0]
//$num <--- $name[1]
//print_r ($name);
echo $name[0] . "=" . $name[1];



