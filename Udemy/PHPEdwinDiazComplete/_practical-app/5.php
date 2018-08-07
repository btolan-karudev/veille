<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 

//Step1: Use a pre-built math function here and echo it

$math = 4.8;
 
    echo floor($math);
    
 echo   rand (15, 19);

	//Step 2:  Use a pre-built string function here and echo it
$test = "Bonjour a tous et a toutes";
  
 echo "<br>";
    echo strlen($test);

	//Step 3:  Use a pre-built Array function here and echo it
$arr = [95, 85, 935, 753, 154, 1, 254, 5];
    echo "<br>";
    
    echo max($arr);
	
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php" ?>