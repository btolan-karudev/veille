<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">
    <?php 

$id = 25569;
$button = "Clickez ici";
    
    
?>


    <a href="9.php?id=<?php echo $id;?>">
      <?php echo $button;?>
    </a>
  <?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
    
    
    if(isset($_GET["id"])) {
      echo "<br>";
    //  print_r($_GET);
      echo $_GET['id'];
    }
    
    $name = "SomeName";
    $value = 777;
    $expiration = time() + (60*60*24*365*2);
    setcookie($name,$value,$expiration);
    $timez = time();
    echo "<br>";
    echo "Votre cookie est valable " . (( $expiration - $timez )/(60*60*24)) . " jours";
	
    echo "<br>";
    session_start();

    $_SESSION['bonjiorno'] = "Buna ziua camarades";
    echo $_SESSION['bonjiorno'];
	?>



  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php" ?>