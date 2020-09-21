<?php


namespace classes;


use interfaces\CatKind;
use traits\HasLegs;
use traits\IsPredator;

class Leopard implements CatKind
{
    use HasLegs, IsPredator;

    function move()
    {
        return 'Leopard is walking.';
    }

    function eat()
    {
        return 'Leopard is eating.';
    }

    function sleep()
    {
        return 'Leopard is sleeping.';
    }

    function reproduce()
    {
        return 'Leopard is reproducing.';
    }

    function watch()
    {
        return 'Leopard is watching.';
    }
}