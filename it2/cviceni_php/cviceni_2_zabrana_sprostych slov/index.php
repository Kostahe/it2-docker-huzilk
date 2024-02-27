<?php
include "classes/Validator.php";
include "classes/Validator2.php";
var_dump(Validator::isValid("Knihovna je hezka", array("hovna")));
var_dump(Validator::isValid("Knihovna je hezka", array("Knihovna")));

$validator = new Validator2(array("hovna"));
var_dump($validator->isValid("Knihovna je hezka"));