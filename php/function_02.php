<?php 


//함수선언
function hello($name="**",int $a,int $b):int
{
    $sum = $a + $b;
        echo "반가워요".$name . "=" . $sum. "<br>";
        //반환값
        return $sum;

}

//함수 호출
$user = "대남이";
hello($user,'1',"2");
echo "합계는 = ".$s;

//자바 스크립트 : 함수 인자 값 없이 호출 가능 
// php 불가능