<?php
class Validator
{
    static function isValid(string $sentence, array $inappropriateWords): bool {
        $arrayOfSentencesWords = explode(" ", $sentence);
        foreach ($inappropriateWords as $inappropriateValue) {
            foreach ($arrayOfSentencesWords as $sentenceValue) {
                if ($inappropriateValue == $sentenceValue) {
                    return false;
                }
            }

        }
        return true;
    }
}