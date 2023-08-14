<?php
    /* 
        1. Dot operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain
            (bisa string atau tipe data lainnya)
        2. Constant PHP_EOL fungsi nya sama dengan "\n" yaitu untuk menambahkan baris baru
    */

    $name = "Mochammad Fachrul Norick";
    $age = 21;

    echo "Nama : " . $name . PHP_EOL;
    echo "Umur : " . $age . PHP_EOL; 

    // Konversi ke Number dan sebaliknya
    $valueString = (string)29;
    var_dump($valueString);

    $valueInt = (int)"9";
    var_dump($valueInt);

    $valueFloat = (float)"2.90";
    var_dump($valueFloat);

    // Mengakses Karakter
    $name = "baull";

    echo $name[0] . "\n";
    echo $name[1] . "\n";
    echo $name[2] . "\n";
    echo $name[3] . "\n";
    echo $name[4] . "\n";

    // Variable Parsing
    $name = "baull";
    echo "Hello $name, Semangat belajar PHP nya !" . PHP_EOL;

    // Curly Brace
    $names = "Norick";
    echo "Hello {$names}'s, Semangat belajar PHP nya !" . PHP_EOL;

?>