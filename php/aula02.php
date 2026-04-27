<?php
    $pessoas = [
        ["nome"=> "lilica", "idade"=>99],
        ["nome"=> "pililica", "idade"=>99],
        ["nome"=> "poim", "idade"=>99],
    ];

    foreach($pessoas as $key => $item) {
        $nome = $item['nome'];
        $idade = $item['idade'];
        echo "indice: $key nome: $nome idade: $idade <br>"; 
    }
?>