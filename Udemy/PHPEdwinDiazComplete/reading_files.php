<?php 

$file = "lulu.txt";

if($handle = fopen($file, "r")) {
  
 echo $content = fread($handle, filesize($file)); //chaque bitr est egal a un character
  fclose($handle);
} else {
  
  echo "Le fischier ne peut pas etre ecrit";
}


?>