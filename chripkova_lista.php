<?php
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

    $jmena_velka_pismena = array();
    foreach ($jmena as $key => $value) {
        $jmena_velka_pismena[$key] = ucfirst($value);
    }
    return $jmena_velka_pismena;
}

$jmena = "David; Jan, peTr- faRizza, Věra, Pavel; Vladimir- Monikal: Eva; Jachym- Kuba- Rychard; Jiri, Tomas, VladislAv; andrej; Michal, Eva; roMan- Kosta; Pavel- Lubos- Marie; Ilona; Sona; Marie, Jana, Anna; Ivanna; Zdenek- Pavlina";
var_dump(prepareNames($jmena));