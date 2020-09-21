<?php


namespace classes;


use interfaces\InsectKind;
use traits\CanFly;

class Butterfly implements InsectKind
{
    use CanFly;

    function move()
    {
        return 'Butterfly is walking.';
    }

    function eat()
    {
        return 'Butterfly is eating.';
    }

    function sleep()
    {
        return 'Butterfly is sleeping.';
    }

    function reproduce()
    {
        return 'Butterfly is reproducing.';
    }

    function watch()
    {
        return 'Butterfly is watching.';
    }
}