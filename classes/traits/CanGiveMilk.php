<?php


namespace traits;


trait CanGiveMilk
{
    function milk() {
        return get_called_class() . ' gives milk.';
    }
}