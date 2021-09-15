<?php

require_once "Figura.php";

class Circulo extends Figura{

    private int $raio;

    public function __construct(string $cor, int $raio)
    {
        $this->raio = $raio;
        $this->setColor($cor);
    }

    public function area(){
        return 3.14 * $this->raio * $this->raio;
    }

}