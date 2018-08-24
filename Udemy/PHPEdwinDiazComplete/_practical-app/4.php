<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

<?php  

  // Step1: Define a function and make it return a calculation of 2 numbers

    function beleleu($n, $m) 
    {
      $suma = $n + $m;
      return $suma;
    }

    $test = beleleu(15, 21);

    echo $test;

    echo "<br>";

  
    //	Step 2: Make a function that passes parameters and call it using parameter values

  
    $test = beleleu(15, 895);

  
    echo $test;

    echo "<br>";

  
    //	Step 2: Make a function that passes parameters and call it using parameter values

  
    $test = beleleu(15, $test);

  
    echo $test;
    echo "<br>";

    function Aurevoir($rivederci) 
    {
      echo $rivederci;
    }

    Aurevoir("La revedere amigo");
?>





  </article>
  <!--MAIN CONTENT-->


  <?php include "includes/footer.php" ?>