<?php
    require('input.php');//外部ファイルの読み込み
    
    for($i=0; $i<100; $i++){
        if($data[$i]%3===0 && $data[$i]%5===0){
            echo "FizzBUzz".PHP_EOL;
        }else if($data[$i]%3===0){
            echo "Fizz".PHP_EOL;
        }else if($data[$i]%5===0){
            echo "Buzz".PHP_EOL;
        }else{
            echo $data[$i].PHP_EOL;
        }
    }
?>