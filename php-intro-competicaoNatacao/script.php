<?php
    session_start();

$categorias = ['infantil', 'adolescente', 'adulto'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header('location: index.php');
    return;
}

    else if(strlen($nome) < 3) 
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;
}

    else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}

    else if (!is_numeric($idade) || $idade > 100 || empty($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe a idade';
    header('location: index.php');
    return;
}


 if ($idade >= 6 && $idade <= 12) 
{
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i] === 'infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' compete na categoria infantil';
            header('location: index.php');
            return;
        }
    }
}
    else if ($idade >=13 && $idade <= 18) 
{
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i] === 'adolescente') 
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' compete na categoria adolescente';
            header('location: index.php');
            return;
        }
    }
} 
else 
{
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i] === 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' compete na categoria adulto';
            header('location: index.php');
            return;
        }
    }
 }

