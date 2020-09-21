<?php


namespace classes;


use interfaces\ArtiodactylKind;
use traits\CanGiveMilk;
use traits\HasLegs;

class Cow implements ArtiodactylKind
{
    use HasLegs, CanGiveMilk;

    function move()
    {
        return 'The cow is walking.';
    }

    function eat()
    {
       return 'The cow is eating.';
    }

    function sleep()
    {
        return 'The cow is sleeping.';
    }

    function reproduce()
    {
        return 'The cow is reproducing.';
    }

    function watch()
    {
        return 'The cow is watching.';
    }
}