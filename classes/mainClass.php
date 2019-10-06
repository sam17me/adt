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
function get_discriptor($queryParam){
$sql = "SELECT `alpha`.`code` FROM `alpha` where `discriptor` LIKE '$queryParam%';";
// Object oriented query
$result = $conn->query($sql);
return $result["code"];
$conn->close;
}  // end function get_discriptor

}  end class
