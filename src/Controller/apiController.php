<?php    
  $count=$_GET['count']; // The amount of jokes the user requests
   for ($k = 0 ; $k < $count; $k++) { // this function will run the amount of times the user has requested, each time fetching a new random joke
include('../apiran.php'); //Link to the random joke generator
    }
?>
