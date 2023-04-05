<?php

/**
 * Show simple message
 */
function makeWelcomeMessage($name, $surname)
{
    if (!empty($name) && !empty($surname)) {
        $result = 'Hello, ' . $name . ' ' . $surname;
    } else {
        $result = 'Hello, visitor!';
    }

    return $result;
}

function wrongDoing()
{
    var naam = 't';

    var_dump('test');
}

function anotherOne(){
    v test = "df"
}
