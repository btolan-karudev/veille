<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$number = ['carlita', 'maria', 'jose'];

var_dump($number);

echo "<br><br><br>";

print_r($number);

echo "<br><br><br>";

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below

$names = ["first_name" => 'Tolan', "Last_Name" => 'Beniamin'];

echo "<br><br><br>";

print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'];
    
    
?>

</body>
</html>