<?php
  $min=1; // The first API
  $max=3; // The last API. Update when adding new API's
  $num = rand($min,$max); //Generates a random number corresponding with the amount of API's and assigns the number to the API for a random joke to be selected.

    if ($num == "1") {
        include ('APIs/api1.php'); //If random generator returns 1, then API1 will generate a joke
    }   elseif ($num == "2") {
        include ('APIs/api2.php');
    }   elseif ($num == "3") {
        include ('APIs/api3.php'); //For further addition of jokes, insert a new elseif following the schema of the previous ones.
    }                                   // Example: elseif ($num == "4") { include ('templates/api4.php'); }

?>