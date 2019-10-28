<?php

session_start();  
$_SESSION["username"] = ""; //세션에다가 값을 대입  

// login.php 파일에서 loginup.php 파일로 갔다가 오면

//http는 상세값이 없다. 
//[]는 슈퍼 변수를 의미한다. loginup,php는 값을 저장하는 역할이고, login.php는 저장된 값을 읽는 것이다.
//쿠키는 사용자의 컴퓨터에 저장된다.

setcookie("mynum","", time()+(86400*30),"/");   // mynum은 쿠키의 변수명, 201840205은 쿠키의 값이다.
//지울때는 값을 안주면 됨 