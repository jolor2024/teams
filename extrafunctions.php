<?php
//Funktioner för att slippa skriva om print_r osv
function r($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}


function d($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
