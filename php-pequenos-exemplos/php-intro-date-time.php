<?php

echo date('d/m/Y') . '<br>';

$data = new DateTime();
echo $data-> format('d/m/y H:i:s') . '<br>';

$intervalo = new DateInterval('PT1H'); // P: periodo, pode ser data ou tempo T: tempo
$data->sub($intervalo); // Subtrai esse intervalo de tempo a data atual, ex: horário de verão
var_dump($data);

