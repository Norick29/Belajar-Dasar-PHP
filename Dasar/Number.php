<?php
    // Bilangan Bulat
    echo "Desimal : ";
    var_dump(12345);

    echo "Biner : ";
    var_dump(0b11111111);

    echo "Oktal : ";
    var_dump(01234);

    echo "Hexa : "; 
    var_dump(0x1A);

    echo "Underscore in number : ";
    var_dump(1_250_999);


    //Bilangan Pecaham
    echo "floating point : ";
    var_dump(1.234);

    echo "floating point dengan E notasi : (1.8 x 1000)"; //e sama dengan 000 
    var_dump(1.8e3);

    echo "floating point dengan E notasi minus : (1.8 x 0.001)"; //e sama dengan 000 
    var_dump(1.8e-3);

    echo "Underscore in floating : ";
    var_dump(1_250.999);

    echo "Integer Overflow : "; 
    var_dump(9223372036854775809)
    //Batasan php membaca tipe data integer adalah 9,223,372,036,854,775,807. 
    //Lebih dari itu, otomatis akan berubah menjadi float
?>