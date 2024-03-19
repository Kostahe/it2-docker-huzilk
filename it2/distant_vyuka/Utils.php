<?php


/**
 * @author Konstantyn Huzil
 * Singleton klasa, ktera slouzi k generovani pinu
 */
final class Utils
{

    /**
     * @var int
     */
    private static int $min = 0;
    /**
     * @var int
     */
    private static int $max = 9;

    /**
     * @return string
     * @author Konstantyn Huzil
     * funkce ktera generuje 4 mistny pin
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