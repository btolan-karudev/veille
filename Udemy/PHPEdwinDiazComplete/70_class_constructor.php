<?php 

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
  
    function __construct(){
    
     echo $this->wheels = 10;
        
    
    } 
    
    

}

$bmw = new Car();
echo "<br>";

$truck = new Car();
echo "<br>";

$semi = new Car();
echo "<br>";

$dacia = new Car();
?>