<?php

final class Utils
{
    private static int $min = 0;
    private static int $max = 9;

    /**
     * @return string
     */
    public static function genPin(): string
    {
        $pin = array();
        for ($i = 0; $i < 4; $i++) {
            $randomNumber = random_int(self::$min, self::$max);
            $pin[$i] = strval($randomNumber);
            shuffle($pin);
        }
        return implode("", $pin);
    }
}