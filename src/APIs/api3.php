<?php
$content = file_get_contents("https://sv443.net/jokeapi/v2/joke/Any?type=single");

$result  = json_decode($content);//data decoded into JSON

print_r( $result->joke ); //Joke is delivered
echo "<br>";
echo "<br>"; //Generating room for the next joke
?>