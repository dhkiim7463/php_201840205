<?php
if(defined(TEST)) {
    echo "상수가 존재";
}else {
    define("TEST", "테스트 입니다.");
}
echo TEST;