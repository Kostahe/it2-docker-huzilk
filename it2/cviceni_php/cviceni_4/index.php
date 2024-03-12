<?php
include "BirthNumberFormat.php";
var_dump("Pro rodne cislo 701020/0999"." je vek ".BirthNumberFormat::vek("701020/0999"));
var_dump("Pro rodne cislo 060220/0333"." je vek ".BirthNumberFormat::vek("060220/0333"));
var_dump("Pro rodne cislo 960220/0333"." je vek ".BirthNumberFormat::vek("960220/0333"));