<?php 

//if (조건) 실행; 
$money = 1000; 
if ($money) {
    echo "콜라";
    echo "음료수 사먹는다.";
}else if ($money < 1000) {
    echo "빵 사먹는다.";
}
else {
echo "못먹는다.";

}