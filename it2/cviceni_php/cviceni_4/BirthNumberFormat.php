<?php

class BirthNumberFormat
{
    static function vek(string $birthNumber): int {
        $year = substr($birthNumber, 0, 2);
        if ($year < 20) {
            $year = "20".$year;
        } else {
            $year = "19".$year;
        }
        return date("Y") - intval($year);
    }
}