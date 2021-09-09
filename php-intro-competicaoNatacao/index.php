<?php
    include "servicos/servicoMensagemSessao.php"
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
            $mensagemDeSucesso = obterMensagemSucesso();
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemErro();
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