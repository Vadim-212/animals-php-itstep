<?php


namespace classes;


use interfaces\BirdKind;
use traits\CanFly;
use traits\IsPredator;

class Eagle implements BirdKind
{
    use CanFly, IsPredator;

    function cry()
    {
        return 'Eagle is crying.';
    }

    function move()
    {
        return 'Eagle is walking.';
    }

    function eat()
    {
        return 'Eagle is eating.';
    }

    function sleep()
    {
        return 'Eagle is sleeping.';
    }

    function reproduce()
    {
        return 'Eagle is reproducing.';
    }

    function watch()
    {
        return 'Eagle is watching.';
    }
}