<?php

class Cat extends Animal implements RunningAnimal, BiteAnimal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function run()
    {
        echo $this->name . ' is running';
    }

    public function bite(Animal $object)
    {
        echo $this->name . ' bite ' . $object->name;
    }
}
