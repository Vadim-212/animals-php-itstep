<?php


namespace traits;


trait CanFly
{
    function fly() {
        return get_called_class() . ' is flying.';
    }
}