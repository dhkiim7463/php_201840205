<?php

$arr = ['apple' => "사과", 'banana' => "바나나"];
print_r($arr);

$str = json_ecode($arr);
echo $str;