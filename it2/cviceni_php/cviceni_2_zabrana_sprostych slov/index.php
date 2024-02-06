<?php
include "classes/Validator.php";

var_dump(cviceni_2\Validator::isValid("Knihovna je hezka", array("hovna")));
var_dump(cviceni_2\Validator::isValid("Knihovna je hezka", array("Knihovna")));