<?php

abstract class Figura{

    private string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    abstract public function area();

    public function show(){
        return "cor: ".$this->color." area: ".$this->area();
    }

    protected function setColor(string $color)
    {
        $this->color = $color;
    }
}