<?php

$name = $_REQUEST["fname"];
$email = $_REQUEST["email"];

if (empty($name)) {
    echo "You must enter name";
}
echo "You are " . $name, "<br>";
echo "Your email is " . $email;
