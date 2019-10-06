<?php 
require_once("../classes/mainClass.php");
$dataIn = $_REQUEST['criterion'];
echo $dataIn;

// create an instance of the mainClass
$rubrics = new mainClass;

//call the  get_discriptor function from mainClass
$rubrics->get_discriptor($dataIn);
?>
