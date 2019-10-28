<?php

class daelim
{
        public function __construct()
        {
            echo __CLASS__ . "이 생성이 되었습니다.<br>";
          $this->hello();
        }
        
        public function hello()
        {
            echo "학교가 너무 높아요..";
        }
}

class food extends daelim
{
    public function menu()
    {
        echo "맛이 없어용";
    }
    public function hello()
    {
        echo "학교가 너무 멀어요..";
    }
}

$obj1 = new food; //인스턴스 생성할 때 new 사용
echo "<br>";
$obj1 ->menu();
//여기에 프로그햄 많이 작성...