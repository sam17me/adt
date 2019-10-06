<?php 
require_once("../classes/mainClass.php");
$dataIn = $_REQUEST['criterion'];
//echo $dataIn;


// make database connection here.
$conn = new mysqli("localhost", "merrell", "47$!Lver", "adt"); 

if ($result = $conn->query("SELECT `alpha`.`code` FROM `alpha` where `discriptor` LIKE '$dataIn%';")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    $result->close();
}

/**** Test

// create an instance of the mainClass
$rubrics = new mainClass;

//call the  get_discriptor function from mainClass
$rubrics->get_discriptor($dataIn);

****/
?>
