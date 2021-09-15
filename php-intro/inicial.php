<!DOCTYPE html>
<html lang="en">
<head>
    <title>Funcionalidades-php</title>
</head>
<body>
    <h1>My First PHP Page</h1>
    <?php

    echo "Hello World<br>";
    
    echo "</br>";
    for ($i = 0; $i <= 10; $i++){
        echo $i ."<br>";
        break;
    }

    echo "</br>";
    for ($i = 0; ; $i++){
        echo $i . "<br>";
        if ($i >= 10){
            break;
        }
    }

    //Já é igual a 10
    echo "</br>";
    while (true){
        echo $i."<br>";
        if ($i >= 10){
            break;
        }
    }

    echo "</br>";
    $array = ["Um", "Dois", "Três"];
    for ($index = 0; $index <=2; $index++) {
        echo $array[$index] . "</br>";
    }

    echo "</br>";
    $array2 = [        
        "Key_1" => "Um",
        "Key_2" => "Dois",
        "Key_3" => "Três"
    ];

    foreach($array2 as &$value){
        echo $value . "</br>";
        $value = "Teste";
    }

    //retira o & de $value
    unset($value);

    echo "</br>";
    foreach($array2 as $key => $value){
        echo $key . "->" . $value . "</br>";
    }

    echo "</br>";
    function par_ou_impar (int $num){
        $resto = $num % 2;
        if($resto == 0){
            return "Par";
        } else {
            return "Impar";
        }
    }
    echo par_ou_impar(3) . "</br>";
    echo par_ou_impar(2) . "</br>";

    //Não poderá compilar pois $num está tipado como inteiro
    // echo par_ou_impar("sad") . "</>"; 

    echo "</br>";

    //Testando alterar o comportamento default de variaveis (escopo)
    $sum = "Teste";
    function somar(int $numA, int $numB){
        global $sum;
        return $sum = "Teste funcao";
    }
    echo somar(2, 2);
    ?>
</body>
</html>