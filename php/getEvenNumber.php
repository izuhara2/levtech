<?php
    echo "ファイル名".$argv[0].PHP_EOL;
    
    if($argv[1]%2 === 0){
        echo $argv[1]."は偶数です".PHP_EOL;
    }else{
        echo $argv[1]."は奇数です".PHP_EOL;
    }
?>