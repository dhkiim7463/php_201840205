<?php

//Interface를 이용한 클래스 제작
abstract class greeting{  //추상 클래스
    abstract public function hello();

    public function pages(){
        echo "페이지 출력";
    }
}

class daelim extends greeting{
    public function hello(){
        echo "그냥 해...<br>";
    }
}

$obj = new daelim;
$obj->hello();
$obj->pages();