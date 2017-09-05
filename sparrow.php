<?php

class Sparrow extends Animal implements FlyingAnimal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function fly()
    {
        echo $this->name . ' is flying';
    }
}
