<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="exercise2.php" method="post">
    
  <input type="text" name="username" placeholder="Enter Username"><br>
  <input type="password"  name="secretword" placeholder="Enter Your Secret Word"><br>
  <input type="email" name="email" placeholder="Enter Your Email"><br>
  <input type="text" name="age" placeholder="Enter Your Age"><br>
  <input type="text" name="fullname" placeholder="Enter Your Full Name"><br>
  <input type="text" name="address" placeholder="Enter Your Adress"><br>
  <textarea rows="4" name="customerComplaint" placeholder="Enter Your Customer Complaint"></textarea><br>
  <input type="submit" name="submit">
    
    
</form>

  <?php

if(isset($_POST['submit'])) {
  
  $username = $_POST['username'];
  $secretword = $_POST['secretword'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $fullname = $_POST['fullname'];
  $address = $_POST['address'];
  $customerComplaint = $_POST['customerComplaint'];
  

  
  
  
    
// <!-- $name = array("Edwin", "Benjito", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom");
    
//     $minimun = 5;
//     $maximun = 10;

// $username = $_POST['username'];
// $password = $_POST['password'];
    
//   if(strlen($username) < $minimun ) {
  
//       echo "Username has to be longer than five";
  
//   }  
    
//     if(strlen($username) > $maximun  ) {
  
//       echo "Username cannot be longer than 10 ";
  
//   }  
    
//     if(!in_array($username,$name)) {
    
//         echo " Sorry you are not allowed";
    
//     } else {
    
//     echo "Welcome";
//     }
    
    
    
    
    
// //echo "Hello" . $username;   
// //echo "Your Password is " . $password;

//  -->
}



?>


</body>
</html>