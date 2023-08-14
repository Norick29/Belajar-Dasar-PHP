<?php
    /*
        1. +  : menggabungkan array
        2. == : true jika variable memiliki value yang sama
        3. === : true jika variable memiliki value yang sama dan posisi sama
        4. != / <> : true jika variabel tidak sama
        5. !== : true jika variable tidak identik
    */ 

    $first = [
        "first_name" => "Mochammad"
    ];

    $last = [
        //"first_name" => "Fachrul",
        "last_name" => "Norick"
    ];

    $full = $first + $last;
    var_dump($full);

    $a = [
        "first_name" => "Mochammad",
        "last_name" => "Norick"
    ];

    $b = [
        "last_name" => "Norick",
        "first_name" => "Mochammad"
    ];

    var_dump($a == $b);
    var_dump($a===$b);

?>  