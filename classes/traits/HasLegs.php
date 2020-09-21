<?php


namespace traits;


trait HasLegs
{
    function run() {
        return get_called_class() . ' is running.';
    }
}