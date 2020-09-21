<?php


namespace classes;


use interfaces\PrimatesKind;
use traits\CanClimbTrees;
use traits\HasLegs;

class Ape implements PrimatesKind
{
    use CanClimbTrees, HasLegs;

    function move()
    {
        return 'Ape is walking.';
    }

    function eat()
    {
        return 'Ape is eating.';
    }

    function sleep()
    {
        return 'Ape is sleeping.';
    }

    function reproduce()
    {
        return 'Ape is reproducing.';
    }

    function watch()
    {
        return 'Ape is watching.';
    }

    function cry()
    {
        return 'Ape is crying.';
    }
}