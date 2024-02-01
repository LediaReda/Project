<?php



function checkFromMethodType($methodName)
{
    if ($_SERVER['REQUEST_METHOD'] == $methodName) {
        return true;
    }
    return false;
}

function postInput($name)
{
    return trim(htmlentities(htmlspecialchars($_POST[$name])));
}