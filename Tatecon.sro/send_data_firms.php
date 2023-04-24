<?php 
$firm_name = $_POST["firm_name"];
$contact_person = $_POST["contact_person"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$project = $_POST["project"];
fwrite(fopen("firms.txt", "a"), $firm_name . PHP_EOL. $contact_person . PHP_EOL. $tel . PHP_EOL . $email . PHP_EOL . $project . PHP_EOL . "-=-=-=-=-=-=-=" . PHP_EOL );
header("location: index.html");
?>