<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
    function imprimeTabuada(int $numACalcular) {
        for($i = 1; $i < 11; $i++){
            $resultado = $numACalcular * $i;
            //echo $numACalcular . " X " . $i . " = " . $resultado . "</br>";
            echo "$numACalcular X  $i = $resultado" . "</br>";
        }
    }
    imprimeTabuada(2);
    ?>
</body>
</html>