<?php 

function d()
{
    array_map(function ($x) {
        (new Dumper)->dump($x);
    }, func_get_args());
}