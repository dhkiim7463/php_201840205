<?php
$files = scandir(".");
print_r($files);
for($i=0; $i<count($files);$i++){
    if($files[$i] == ".") continue;
    if($files[$i] == "..") continue;
    echo "파일명=".$files[$i]."\n";
}