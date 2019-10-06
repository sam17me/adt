<?php 
/* Set error handling to on */
ini_set('display_errors',1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "merrell";
$password = "47$!lver";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html" charset="UTF-8">
<script 
src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script>
<script src= "./js/main.js"></script>
<script>


$(function(){
<!-- on search button click  -->
$("#search_button").click(function(){
  $.ajax({url: "./handlers/discriptorHandler.php", success: function(result){
    $("#search_result").html(result);
  }});
});
});
</script>
<link rel="stylesheet" type="text/css" href="main.css">
<title>VISTA 20 Alpha codes</title>
</head>
<body>
<div id='content-main'>
<p> This page will give you codes for your zone Descriptors</p>

<div id="search">
<input type = 'text' name='criterion' id='criterion'></input>
<button id=search_button name='search_button'>Search</button>
</div>
<div id='search_result'>

</div>


</div>
</body>
</html>
