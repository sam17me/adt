<?php 
require_once("../classes/mainClass.php");
$dataIn = $_REQUEST['criterion'];
//echo $dataIn;


// make database connection here.
$conn = new mysqli("localhost", "merrell", "47$!lver", "adt"); 


// create an instance of the mainClass
$rubrics = new mainClass;

//call the  get_discriptor function from mainClass
$rubrics->get_discriptor($dataIn);

?>
