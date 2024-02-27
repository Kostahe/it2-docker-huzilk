<?php

class Validator2
{
    private array $inappropriateWords;

    /**
     * @param array $inappropriateWords
     */
    public function __construct(array $inappropriateWords)
    {
        $this->inappropriateWords = $inappropriateWords;
    }

    public function isValid(string $sentence)
    {
        $arrayOfSentencesWords = explode(" ", $sentence);
        foreach (this->$inappropriateWords as $inappropriateValue) {
            foreach ($arrayOfSentencesWords as $sentenceValue) {
                if ($inappropriateValue == $sentenceValue) {
                    return false;
                }
            }

        }
        return true;
    }

}