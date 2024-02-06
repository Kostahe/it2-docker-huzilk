<?php
namespace cviceni_2;
//class Validator
//{
//    static function isValid(string $sentence, array $inappropriateWords): bool {
//        foreach ($inappropriateWords as $value) {
//            if (strpos(strtolower($sentence), strtolower('&nbsp'.$value."&nbsp")) != -1) {
//                echo "&nbsp".$value." ";
//                return false;
//            }
//
//        }
//        return true;
//    }
//}

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