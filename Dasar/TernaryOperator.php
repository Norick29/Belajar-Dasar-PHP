<?php
    // Contoh bukan ternary
    $gender = "Pria";
    $hi = null;

    if ($gender == "Pria"){
        $hi = "Haii Bro!";
    }else{
        $hi = "Haii Sis!";
    };

    echo $hi . PHP_EOL;

    // Contoh menggunakan Ternary Operator ( DI REKOMENDASIKAN )
    $gen = "Cewe";
    $hii = $gen == "Cewe" ? "Haii Cewe!" : "Haii Cowo";
    echo $hii . PHP_EOL;
?>