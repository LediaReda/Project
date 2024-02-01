<?php
require_once '../../../app/config.php';
$errors = [];


if (checkFromMethodType('POST')) {
    $name = postInput('name');
    // validation
    if (!requiredInput($name)) {
        $errors[] = 'name is required';
    }
    if (!minInput($name, 3)) {
        $errors[] = 'name must be greater than 3 chars';
    }
    if (empty($errors)) {
       dbInsert('categories',["name" => $name]);
       setSession("success","Data Inserted");
    }else{
        setSession("errors", $errors);
    }
} else {
   echo "7mara ya rayes - el3ab b3eed ";
}
header("location:" . URL . "views/dashboard/categories/add.php");
