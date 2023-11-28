<?php

include "it2/class/User.php";

/**
 * @param array $slova
 * @param String $slovo
 * @return bool
 */
function isShowCovid(array $slova, String $slovo): bool {
    $slova = implode("", $slova);
    return str_contains($slova, $slovo);
}

/**
 * @param String $jmena
 * @return array
 */
function prepareNames(String $jmena): array {
    $jmena = str_replace(":", ",", $jmena);
    $jmena = str_replace(";", ",", $jmena);
    $jmena = str_replace("-", ",", $jmena);
    $jmena = explode(", ", $jmena);
    foreach ($jmena as $key => $value) {
        $jmena[$key] = new User($value);
    }
    var_dump($jmena);

    return $jmena;
}

$jmena = "David; Jan, peTr- faRizza, Věra, Pavel; Vladimir- Monikal: Eva; Jachym- Kuba- Rychard; Jiri, Tomas, VladislAv; andrej; Michal, Eva; roMan- Kosta; Pavel- Lubos- Marie; Ilona; Sona; Marie, Jana, Anna; Ivanna; Zdenek- Pavlina";

var_dump(prepareNames($jmena));