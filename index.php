<?php

require_once 'autoloader.php';

$dog = new Dog('Dog');
$cat = new Cat('Cat');
$sparrow = new Sparrow('Sparrow');
$dog->swime();
$cat->run();
$cat->bite($sparrow);
$dog->run();
$sparrow->fly();
$dog->bite($cat);