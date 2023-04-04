<?php

/**
 * Show simple message
 */
function makeWelcomeMessage($name, $surname)
{
    if(!empty($name) && !empty($surname)){
        $result = 'Hello, ' . $name . ' ' . $surname;
    } else {
        $result = 'Hello, visitor!';
    }

    return $result;
}

function wrongDoing(){
    var_dump('test');

    var naam = 't'
}
