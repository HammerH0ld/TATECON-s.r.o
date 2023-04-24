<?php 
$email = $_POST["email"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$exp = $_POST["exp"];

fwrite(fopen("programmers.txt", "a"), $email . PHP_EOL. $name . PHP_EOL. $tel . PHP_EOL . $exp . PHP_EOL . "-=-=-=-=-=-=-=" . PHP_EOL );
header("location: index.html");
?>