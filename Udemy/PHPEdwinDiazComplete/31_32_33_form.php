<?php 

if(isset($_POST['submit'])) {
    
$name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom");
    
    $minimun = 5;
    $maximun = 10;

$username = $_POST['username'];
$password = $_POST['password'];
    
//   if(strlen($username) < $minimun ) {
  
//       echo "Username doit etre 6 characteres minimum";
  
//   }  
  
    
//     if(strlen($username) > $maximun  ) {
  
//       echo "Username ne doit pas depasser 9 charaxters ";
  
//   }  
    
    if(!in_array($username,$name)) {
    
        echo " Desole vous n etes pas sur la liste";
    
    } else {
    
    echo "Welcome";
    }
    
    
//   echo "Oui ca functione";  
    
    
// echo "Hello " . $username;   
// echo "Your Password is " . $password;


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="31_32_33_form.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username">
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
    
    
</form>



</body>
</html>