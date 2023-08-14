<?php
    // Increment $a++ post increment, Decrement $a-- post decrement
    // Increment ++$a pre increment, Decrement --$a pre decrement

    $a = 29;
    $b = 9;
    $d = 9;

    $a++;
    $c = ++$b; // Ditambah dulu baru di simpan di variable c
    $e = $d++; // di simpan dulu di variable e baru di tambah

    var_dump($a);
    var_dump($c);
    var_dump($e);
?>  