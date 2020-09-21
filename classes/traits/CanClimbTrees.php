<?php


namespace traits;


trait CanClimbTrees
{
    function climb() {
        return get_called_class() . ' is climbing a tree.';
    }
}