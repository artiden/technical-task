<?php

class Dog extends Animal implements RunningAnimal, BiteAnimal, SwimmingAnimal
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
        echo $this->name . ' bite ' . $object->name .' :-)';
    }

    public function swime()
    {
        echo $this->name . ' is swimming';
    }
}
