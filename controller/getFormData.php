<?php

$name = $_GET['name'];
$surname = $_GET['surname'];

function makeWelcomeMessage($name, $surname){
    $result = 'Hello, ' . $name . ' ' . $surname;

    return $result;
}

echo makeWelcomeMessage($name, $surname);
