<?php
$content = file_get_contents("https://official-joke-api.appspot.com/random_joke"); //Location of the Joke API

$result  = json_decode($content); //data decoded into JSON

print_r( $result->setup ); //Joke setup is printed
echo "<br>";
print_r( $result->punchline ); //Punchline delivered
echo "<br>";
echo "<br>"; //Generating room for the next joke
?>