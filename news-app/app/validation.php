<?php


function requiredInput($input)
{
    if (!empty($input)) {
        return true;
    }
    return false;
}

function minInput($input, $length)
{
    if (strlen($input) > $length) {
        return true;
    }
    return false;
}