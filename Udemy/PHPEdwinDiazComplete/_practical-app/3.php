<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <?php  

//   Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

if (false) {
  echo "I love PHP if<br>";
} elseif (false) {
  echo "I love php ELSIF<br>";
} else {
  echo "I really love PHP if elseif else<br>";
}


    
    
 

// 	Step 2: Make a forloop  that displays 10 numbers
  
  for($counter = 0; $counter <= 10; $counter++){

    echo $counter . "<br>" ;

}


// 	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 $numero = 951;

switch($numero > 100) {

    case 951:
    echo "it is 34";
    break;
    case 456:
    echo "is it 34";
    break;
    case 753:
    echo "is it 34";
    break;
    case 7553:
    echo "is it 34";
    break;
    case 959:
    echo "is it 24";
    break;

    default : 
    echo "we could not find anything";
    break;


}

	
?>






  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php" ?>