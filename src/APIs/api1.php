<?php
$content = file_get_contents("http://api.icndb.com/jokes/random/"); //Location of the Joke API

$result  = json_decode($content); // data decoded to JSON

print_r( $result->value->joke ); //Joke is printed
echo "<br>";
echo "<br>"; //Generating room for the next joke
?>