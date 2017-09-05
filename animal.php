<?php

class Animal
{
    /**
     * @var string
     */
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
