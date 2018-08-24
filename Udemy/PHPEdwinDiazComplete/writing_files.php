<?php 

$file = "lulu.txt";


if($handle = fopen($file, "w")) {
  
  fwrite($handle, 'Je suis fou de php et lulu est en train de faire du jquerry');
  fclose($handle);
  
  
} else {
  
  echo "Le fischier ne peut pas etre ecrit";
}





  
  


?>