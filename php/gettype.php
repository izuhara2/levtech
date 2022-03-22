<?php
    $str="文字列";//文字列型
    $int_number=221;//整数型
    $arr=array(0,1,2,3);//配列型
    $boo=true;//論理型
    $null=null;//null型
    
    echo gettype($str).PHP_EOL;
    echo gettype($int_number).PHP_EOL;
    echo gettype($arr).PHP_EOL;
    echo gettype($boo).PHP_EOL;
    echo gettype($null).PHP_EOL;
?>