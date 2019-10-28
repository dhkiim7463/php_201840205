<?php

$a = 5;
echo "start = " . $a . "<br>";

function num(){

    echo "num = " . $GLOBALS['a'] . "<br>";

    $GLOBALS['a'] = 6;
}

num();
echo "end = " . $a . "<br>";

echo $_SERVER['REQUEST_URI'];  //서버에 대한 정보를 준다 