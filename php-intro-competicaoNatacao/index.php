<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulário de Inscrição</title>
</head>

<body>
    <h1>Formulário para Inscrição de Competidores</h1>

    <form action="script.php" method="post">
        <?php 
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
        ?>
        <p>Nome: <input type="text" name="nome" /> </p>
        <p>Idade: <input type="number" name="idade" /> </p>
        <p><input type="submit" value="Enviar" /></p>

    </form>
</body>

</html>