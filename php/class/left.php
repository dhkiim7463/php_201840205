<?php
/**
 * 변수 + 함수 = 캡슐화
 * 함수 => 메소드
 * 변수 => 프로퍼티
 * 
 */

class left{
    public $name;
    const ENGLISH = "en";
    public function greeting()
    {
        
        //메소드
    echo "left hello<br>";
    }
    public function daelim(){
        echo "대림대학교<br>";
        return $this;
    }
    public function foo(){
        echo "너는 바보야<br>";
        return $this;
    }
    public function bar(){
        echo "나도 바보야<br>";
        return $this;
    }
} 