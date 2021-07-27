<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    ?>
</body>
</html>