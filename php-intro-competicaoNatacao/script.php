<?php

$categorias = ['infantil', 'adolescente', 'adulto'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i] === 'infantil') 
            echo 'O nadador ' .$nome. ' compete na categoria infantil';
    }
}else if ($idade >=13 && $idade <= 18) {
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i] === 'adolescente') 
            echo 'O nadador ' .$nome. ' compete na categoria adolescente';
    }
} else if ($idade > 18) {
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i] === 'adulto') 
            echo 'O nadador ' .$nome. ' compete na categoria adulto';
    }
} else {
    echo 'Não há categorias disponíveis para a idade';
}

