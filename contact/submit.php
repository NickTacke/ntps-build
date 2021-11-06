<?php
$body = file_get_contents("php://input");

$object = json_decode($body, true);

$naam = $object["naam"];
$email = $object["email"];
$telefoon = $object["telefoon"];
$omschrijving = $object["omschrijving"];

$msg = "Naam: " . $naam . "\nEmail: " . $email . "\nTelefoon: " . $telefoon . "\n\n" . $omschrijving;

mail("info@ntps.nl", "New message", $msg);
?>