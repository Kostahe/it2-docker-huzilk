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
$produkty["tiskarny"]["laserova"] = "HP";
$produkty["tiskarny"]["laserova"] = "Canon";
$produkty["pocitace"]["notebooky"] = "Lenovo";
$produkty["pocitace"]["notebooky"] = "Acer";
$produkty["mobily"]["Android"] = "Samsung";
$produkty["mobily"]["IOS"] = "Apple";
$produkty["mobily"]["Android"] = "Xiaomi";

echo $produkty["mobily"]["Android"];

