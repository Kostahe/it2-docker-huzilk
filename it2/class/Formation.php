<?php

class Formation {
    /**
     * @param string $jmena
     * @return array
     */
    static function prepareUsers(string $jmena): array {
        $jmena = str_replace(":", ",", $jmena);
        $jmena = str_replace(";", ",", $jmena);
        $jmena = str_replace("-", ",", $jmena);
        $jmena = explode(", ", $jmena);

        $jmena_velka_pismena = array();
        foreach ($jmena as $key => $value) {
            $jmena_velka_pismena[$key] = ucfirst(strtolower($value));
        }
        return $jmena_velka_pismena;
    }
}