<?php
    $zapnuto = true;
    $nazev="Kostja";
    $cena=23.33;
    $cislo=16;
    $cislo2= 24;

    $novaPromenna=$cislo.$cena."czk";

    echo $zapnuto, "<br>";

    echo $nazev, "<br>";
    echo $cena, "<br>";
    echo $cislo, "<br>";
    echo $novaPromenna, "<br>";
    echo "<Img src='it2/images/skola.png'>", "<br>";
    echo "\\ \$ ";

    var_dump($cislo+$cislo2);
    var_dump($cislo-$cislo2);
    var_dump($cislo/$cislo2);
    var_dump($cislo*$cislo2);

    $cislo++;
    var_dump($cislo);

    $cislo--;
    var_dump($cislo);

    $cislo += $cislo2;
    var_dump($cislo);

    $cislo -= $cislo2;
    var_dump($cislo);

    $cislo *= $cislo2;
    var_dump($cislo);

    $cislo /= $cislo2;
    var_dump($cislo);

    var_dump($cislo == $cislo2);
    var_dump($cislo != $cislo2);
    var_dump($cislo > $cislo2);
    var_dump($cislo < $cislo2);



