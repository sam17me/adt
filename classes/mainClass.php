<?php

/**
* mainClass contains all the methods and parameter for use on the site.
*
*This class contains several methods necessary to get data from the database and make 
* comparisons to user criterion.
*
*@author Merrell Gilbert
*@version $Revision 1.1
**/

class mainClass {


/* Gets the Alpha discriptor code */
function get_discriptor($queryParam){


if ($result = $conn->query("SELECT `alpha`.`code` FROM `alpha` where `discriptor` LIKE '$dataIn%';")) {
    
        $row =   $result->fetch_assoc();
	echo $row['code'];


    /* free result set */
    $result->close();
}

$conn->close;
}  // end function get_discriptor

} // end class

?>
