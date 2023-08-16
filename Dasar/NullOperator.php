<?php 
    // Null Coalescing Operator
    // Contoh Code tanpa Null Coalescing Operator

    $data = [
        'action' => 'Baull'
    ];
    if (isset($data['action'])){
        $action = $data['action'];
    }else{
        $action = 'nothing';
    };

    echo $action;

    // Contoh Code dengan Null Coalescing Operator ( DI REKOMENDASIKAN )
    $value = [];
    $contoh = $value["aksi"] ?? "Noting";

    echo $contoh;
?>