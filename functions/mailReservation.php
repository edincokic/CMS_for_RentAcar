<?php

$name = htmlspecialchars($_POST['name']);

$email = htmlspecialchars($_POST['email']);

$phone = htmlspecialchars($_POST['phone']);

$days = htmlspecialchars($_POST['days']);

$carname = htmlspecialchars($_POST['carname']);

$carprice = htmlspecialchars($_POST['carprice']);


$message = $_POST['message'];

$formcontent=" Od: $name \n E-mail: $email \n Broj telefona: $phone \n Broj dana: $days \n Izabrani automobil: $carname \n Cijena izabranog automobila: $carprice KM / dan \n Dodatne informacije: $message";

$recipient = "kasperzi.design@gmail.com";

$subject = "Rezervacija | Rent a Car - Hotel Park Srebrenik";

$mailheader = "Od: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

header("Location: index.php");

?>
