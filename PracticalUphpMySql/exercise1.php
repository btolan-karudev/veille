<?php
$user = "Kelvin Hart";
$city = "Dubai";
$month = "Avril";
$year = 2016;
$tail = 5;
$age = 51;

$userDetail = ['name'=>'Kelvin Hart', 'city'=>'Dubai', 'date'=>2016];
//$userDetails = mysqli_fetch_array[$userDetail];
echo $userDetail['city'];
echo "<br>";

if ($age >= 18 && $age <= 49) {
  echo "Bienvenu";
  echo "<br>";
} else if ($age < 17) {
  echo "votre parents svp";
  echo "<br>";
} else if ($age > 50) {
  echo "dans votre voiture svp";
  echo "<br>";
} else {
  echo "Votre age est interdit";
  echo "<br>";
}





?>