<?php declare(strict_types=1);

$testNumber = 4;

echo abs($testNumber);
echo ceil(2.3)."<br>";
echo cos(0.5)."<br>";
echo exp(2)."<br>";
echo floor(2/4)."<br>";
echo hexdec("A")."<br>";
echo log10(2)."<br>";
echo log(2, 3)."<br>";
echo max(array(1, 2, 3))."<br>";
echo min(array(1, 2, 3))."<br>";
echo pi()."<br>";
echo pow(3, 2)."<br>";
echo rand(1, 2)."<br>";
echo round(2.5)."<br>";
echo sqrt(2)."<br>";
echo tan(0.5)."<br>";

echo addslashes("Test")."<br>";
echo chr(52)."<br>";
var_dump(explode(" ", "a b c"));
echo implode(", ", array("a", "b", "c"))."<br>";

echo join(" | ", array("Test", "Join"))."<br>";
echo md5("Abs", true)."<br>";;
echo ord('A')."<br>";

$url = "https://www.ssemi.cz/";

echo strchr($url, '/', true)."<br>";
echo strlen($url)."<br>";
echo strstr($url, "ssemi")."<br>";
echo strpos($url, "s")."<br>";
echo strrev($url)."<br>";
echo strtolower("Abc")."<br>";
echo strtoupper("Abc")."<br>";
echo substr_replace($url, "Test", 4, 3)."<br>";
echo substr($url, 0, 4)."<br>";
echo ucfirst("$url")."<br>";
echo ucwords("a b c")."<br>";

$array1 = array("a", "b", "c");
$array2 = array("e", "u");

var_dump(array_merge($array1, $array2));
var_dump(array_push($array1, 3, 4));
echo array_rand($array1)."<br>";
var_dump(array_shift($array2));
array_splice($array1, 0, 1, $array2);
var_dump($array1);
var_dump(array_unique(array("a", "a", "A")));
var_dump(array_values($array2));
var_dump(end($array2));
foreach ($array1 as $value) {
    var_dump($value);
}
var_dump(pos(array("a", "b", "c")), 2);
$number_array = array(1,2 ,3);
var_dump(rsort($number_array));
var_dump(sort($number_array));
echo sizeof($number_array)."<br>";

echo "<br>";
/**
 * @param int $a
 * @param int $b
 * @return int
 */
function plus(int $a, int $b) : int {
    return $a + $b;
}

echo "Moje vlastni funkce: ".plus(1, 2);