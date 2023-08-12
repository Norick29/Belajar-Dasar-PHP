<?php
    // Array adalah tipe data yang berisikan banyak data atau bahkan kosong.
    // Array di PHP bisa menampung banyak data dengan tipe data yang berbeda.
    // Array di PHP memiliki panjang yang dinamis, sehingga kita bisa mengisikan data dalam array sebanyaknya
    // tanpa batas.

    // Penulisan array ada 2 
    // Contoh 1 
    $number = array(1, 2, 3, 4);
    var_dump($number);

    // Contoh 2 
    $huruf = ["a", "b", "c", "d"];
    var_dump($huruf);

    // Operasi Array
    // 1. $array[index] : mengakses data di array pada nomor index
    // 2. $array[index] = value : mengubah data di array pada nomor index dengan value baru
    // 3. $array[] = value : menambah data di array pada posisi paling belakang
    // 4. $unset($array[index]) : menghapus data di array, index otomatis hilang dari array
    // 5. count($array) : mengambil total data di array

    // Contoh 1
    $angka = [1, 3, 5, 7]; 
    var_dump($angka[3]);

    // Contoh 2
    $hirif = ["op", "mn", "kl"];
    var_dump($hirif[2] = "jk");

    // Contoh 3 
    $aku = ["Mochammad ", "Fachrul "];
    var_dump($aku[2] = "Norick");

    // Contoh 4
    $no = [4, 8, 12, 6];
    unset($no[3]);

    // Contoh 5 
    $cok = [6, 8, 9, 7];
    var_dump(count($cok));

    //belum selesai durasi terakhir di angka 1:22:08
?>