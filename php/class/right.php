<?php

class right
{
    public $name;
    public function greeting()
    {
         echo "right hello<br>". $this->name ."<br>";
         return $this; // this는 선언 된 
    }
    public function daelim(){
        echo "대림대학교";
    }
}