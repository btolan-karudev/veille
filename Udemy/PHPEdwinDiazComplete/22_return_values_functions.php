<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
function addNumbers($number1, $number2){
$sum = $number1 + $number2;
 
return $sum;
    
    
} 
  
echo addNumbers(48, 89);
  
  $resultat = addNumbers(48, 189);
  
  echo "<br>";
  
  echo $resultat;
  echo "<br>";

$result = addNumbers(34,64);

echo $result;

echo "<br>";
    
$result = addNumbers(100, $result);

echo $result;

echo "<br>";
    
$result = addNumbers(10000, $result);


echo $result;
    
?>


</body>
</html>