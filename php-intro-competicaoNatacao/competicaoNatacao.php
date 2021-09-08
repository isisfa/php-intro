<?php

/* Competição natação
*Inserção de competidores: nome, idade
*Categoria: 6 a 12 anos infantil, 13 a 18 adolescente, acima de 18 adulto
*Retornar a categoria para cadas nadador que for cadastrado 
*Receber via formulário*/

// $categorias = [];
// $categorias[] = 'infantil';
// $categorias[] = 'adolescente';
// $categorias[] = 'adulto';

$categorias = ['infantil', 'adolescente', 'adulto'];
$nome = 'Luiz';
$idade = 4;

// print_r($categorias);
// echo'</br>';
// var_dump($nome);
// echo '</br>';
// var_dump($idade);

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

