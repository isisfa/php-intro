<?php

declare(strict_types=1);
require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>Produtos:</h3>';

        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;


    case 'insert':

        $status = $produto->insert('Produto Teste 3');

        if(!$status) {
            echo 'Não foi possivel executar a operação';
            return false;
        }

        echo ('Registro inserido com sucesso!');


    case 'update':

        $status = $produto->update('Produto Teste Alterado', 1);

        if(!$status) {
            echo 'Não foi possivel executar a operação';
            return false;
        }

        echo 'Registro alterado com sucesso!';
        break;


    case 'delete':
        $status = $produto->delete(1);

        if(!$status) {
            echo 'Não foi possivel executar a operação';
            return false;
        }

        echo 'Registro removido com sucesso!';
        break;
}