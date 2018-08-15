<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
    
$connection = mysqli_connect('localhost', 'root', '123456', 'testdata');  
if(!$connection) {
    die("Database connection failed");
}
    
function readRows() {
    global $connection;
    $query = "SELECT * FROM costumers";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <pre>
        <?php     print_r($row); ?>

      </pre>
    <?php
        }  

}
    readRows();
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
