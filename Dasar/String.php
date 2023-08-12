<?php
    //heredoc adalah fitur untuk membuat string yang panjang, sehingga kita tidak perlu manual melakukan enter
    //tab dan yang lainnya secara manual.
    echo <<<BAUL
    Contoh penggunaan heredoc adalah seperti ini, heredoc mirip dengan double quote
    lalu penggunaan heredoc ini sepertinya lebih enak untuk membuat deskripsi yang panjang di website.
    BAUL;

    //nowdoc mirip dengan heredoc, yang membedakan adalah pada nowdoc kita tidak memiliki kemampuan parsing 
    //seperti di heredoc atau double quote. Dan hanya menambahkan kutip satu saja.
    echo <<<'BAUL'
    Contoh penggunaan heredoc adalah seperti ini, heredoc mirip dengan double quote
    lalu penggunaan heredoc ini sepertinya lebih enak untuk membuat deskripsi yang panjang di website.
    BAUL;
?>