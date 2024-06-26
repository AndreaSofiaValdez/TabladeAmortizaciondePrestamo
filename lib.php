<?php
function extraernumerodecuentaporExpresionRegular($rawtexto)
{

    $numCuenta = preg_split('/\D+/', $rawtexto, -1, PREG_SPLIT_NO_EMPTY);

    return $numCuenta;
}
