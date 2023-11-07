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

$produkty = array();
$produkty["tiskarny"]["laserova"][0] = "HP";
$produkty["tiskarny"]["laserova"][1] = "Canon";
$produkty["pocitace"]["notebooky"][0] = "Lenovo";
$produkty["pocitace"]["notebooky"][1] = "Acer";
$produkty["pocitace"]["notebooky"][1] = "HP";
$produkty["pocitace"]["notebooky"][2] = "Mac";
$produkty["pocitace"]["notebooky"][3] = "MSI";
$produkty["mobily"]["Android"][0] = "Samsung";
$produkty["mobily"]["Android"][1] = "Xiaomi";
$produkty["mobily"]["Android"][2] = "Google pixel";
$produkty["mobily"]["Android"][3] = "Asus";
$produkty["mobily"]["Ios"][0] = "Iphone";
$produkty["konzole"]["Sony"][0] = "Ps4";
$produkty["konzole"]["Sony"][1] = "Ps5";
$produkty["konzole"]["Microsoft"][0] = "Xbox one";
$produkty["konzole"]["Microsoft"][1] = "Xbox series x";


foreach ($produkty as $key => $value) {
    foreach ($value as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            var_dump($value2);
        }
    }
}

$rows = 10;
$columns = 10;

echo "<table style='border: solid black 2px'>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr style='border: solid black 2px'>";
        for ($x = 1; $x <= $columns; $x++) {
            echo "<td style='border: solid black 2px'>".$i.".".$x."</td>";
        }
    echo "</tr>";
}

echo "</table>";




