<?php

require_once "Figura.php";

class Quadrado extends Figura{

    private int $lado;


    public function __construct(string $cor, int $lado)
    {
        parent::__construct($cor);
        $this->lado = $lado;
    }

    public function area(){
        return $this->lado * $this->lado;
    }

}