<?php

class A {
    public function __construct($a)
    {
        $this->$a = $a;
    }

    public $a = "Property";

    public static $e = "Staticka_promena";
}

$a = new A;

echo $a::$e;
echo $a->a;

abstract class B {
    public static function formatNumber(): void
    {
        echo "Format number";
    }
}

