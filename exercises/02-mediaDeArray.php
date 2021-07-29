<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculaMediaDeArray(array $arrayDeElementos){
        if (count($arrayDeElementos) == 10) {
         echo $mediaDeArray = array_sum($arrayDeElementos) / count($arrayDeElementos);
        } else {
            echo "Array Inválido! Insira um array com 10 elementos";
        }

    }
    calculaMediaDeArray([5,10,0,0,0,0,0,0,0])
    ?>
</body>
</html>