
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

 
  <form action="6.php" method=POST>
    <input type="text" name="user">
    <input type="password" name="pass">
    <input type="submit" name="submit" placeholder="Send me home">
    
  </form>



</body>
</html>

	<?php  
  
 

/*  Step1: Make a form that submits one value to POST super global */
 if (isset($_POST["submit"])) {
   $user = $_POST["user"];
   echo "Ton nom est: " ."'".$user."'";
   echo "<br>";
   $pass = $_POST["pass"];
   echo "Ton mot de passe est: " ."'".$pass."'";
   
 }
  

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>