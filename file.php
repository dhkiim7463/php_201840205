<?php

echo "파일 목록을 출력합니다 .";
$path = "./";  //글로벌 함수이다 전역 변수
files($path); // 전역 변수

function files($path)  //지역변수
{
$files = scandir("./");
//print_r($files);
for ($i=0;$i<count($files);$i++) { 
    if($files[$i] == ".." || $files[$i] == ".git"){ 
        continue;
    }
    if(is_dir($files[$i])) {
        echo "<b>".$files[$i]. "<b><br>";
        files($path.$files[$i].DIRECTORY_SEPARATOR);
    }else{
        echo  "".$files[$i]. "<br>";
    }
    
}
}