<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'delete from produtos where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']);
$prepare->execute();

return $prepare->rowCount(); //declara linhas afetadas