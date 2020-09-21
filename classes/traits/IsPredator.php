<?php


namespace traits;


trait IsPredator
{
    function hunt() {
        return get_called_class() . ' is hunting.';
    }
}