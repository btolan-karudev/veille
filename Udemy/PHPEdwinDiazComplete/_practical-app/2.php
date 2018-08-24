<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        $number1 = 10;
        $number2 = 20;

        $sum = $number1 + $number2;
        echo "La somme de deux nobres est egale a : " . $sum . " !";

        echo "<br><br><br>";

        $numbers = [10, 20, 30];
        print_r($numbers);

        echo "<br><br><br>";

        $namesNumber = ['Benjito' => 10, 'Carlito' => 20, 'Maria' => 30];
        print_r($namesNumber);

        echo "<br><br><br>";
        // echo assoc array avec la cle
        echo $namesNumber['Maria'];


        ?>


    </article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>