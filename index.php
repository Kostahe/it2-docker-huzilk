<?php

$jmenoPrijmeni1 = 1;
$jmenoPrijmeni2 = 1;

if ($jmenoPrijmeni1 == $jmenoPrijmeni2) {
    echo "Konstantyn Huzil", "<br>";
}

if ($jmenoPrijmeni1 == $jmenoPrijmeni2) {
    echo "Konstantyn","<br>";
} else {
    echo "Huzil", "<br>";
}



if($jmenoPrijmeni1 < $jmenoPrijmeni2) {
    echo "Plati if", "<br>";
} elseif($jmenoPrijmeni2 == $jmenoPrijmeni1) {
    echo "Plati else if", "<br>";
} else {
    echo "Plate else", "<br>";
}

switch ($jmenoPrijmeni1) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    case 5:
        echo "5";
        break;
    default:
        echo "Neznama";
        break;
}

$produkty = array("pocitace", "tiskarny", "konzole", "mobily", "tablety");
$produkty["tiskarny"]["laserova"][0] = "HP";
$produkty["tiskarny"]["laserova"][1] = "Canon";
$produkty["pocitace"]["notebooky"][0] = "Lenovo";
$produkty["pocitace"]["notebooky"][1] = "Acer";
$produkty["pocitace"]["notebooky"] = "HP";
$produkty["mobily"]["Android"][0] = "Samsung";
$produkty["mobily"]["IOS"][0] = "Apple";
$produkty["mobily"]["Android"][1] = "Xiaomi";
$produkty["mobily"]["Android"][2] = "Huawei";
$produkty["mobily"]["Android"][3] = "Sony";
$produkty["mobily"]["Android"][4] = "Google pixel";
$produkty["mobily"]["Android"][5] = "Motorola";


var_dump($produkty);

