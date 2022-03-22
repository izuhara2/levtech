<?php
    class Animal{
        public $cry = "bowbow!";
        
        function bow(){
           echo $this->cry.PHP_EOL;
        }
    }
    
    $animal1 = new Animal();
    $animal1->bow();
    
    /*dog class*/
    class dog extends Animal{
        public $cry = "わんわんｗ！";
    }
    
    $dogcry=new dog();
    $dogcry->bow();
    
    /*cay class*/
    class cat extends Animal{
        public $cry = "にゃー";
    }
    
    $catcry=new cat();
    $catcry->bow();
?>
