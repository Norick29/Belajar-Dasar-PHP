<?php
    //Nilai null merepresentasikan sebuah variabel tanpa nilai

    //Contoh di bawah mengubah variabel yang sudah memiliki nilai, menjadi null atau kosong
    $name = "Baull";
    $name = null;

    echo "Name : ";
    echo "\n";
    //Contoh di bawah adalah variabel yang dari awal menggunakan null atau tidak memiliki data dari awal
    $age = null;

    echo "Age : ";
    echo "\n";
    //Cara cek apakah data null

    //Mengecek sebuah data bernilai null, biasanya menggunakan function is_null($variable)
    echo "Is name Null? : ";
    var_dump(is_null($name));
    echo "\n";

    //Bisa juga menghapus variable yang tidak akan dipakai lagi dengan function unset($variable)
    //Hati hati saat menggunakan function ini, karena variable tidak akan bisa di pakai lagi.
    $contoh = "Contoh";
    unset($contoh);

    //Agar lebih aman, untuk mengecek apakah variabel dan nilai dalam variable nya ada, kita bisa menggunakan
    //function isset($variable);
    $contoh = "Baull";
    var_dump(isset($contoh));

    
?>