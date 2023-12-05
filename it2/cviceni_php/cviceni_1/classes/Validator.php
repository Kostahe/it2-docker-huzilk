<?php

class Validator
{
    static function isValid(string $sentence, array $inappropriateWords): bool {
        foreach ($inappropriateWords as $value) {
            if (strpos(strtolower($sentence), strtolower($value)) != -1) {
                return false;
            }
        }
        return true;
    }
}