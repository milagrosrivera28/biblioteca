<?php

function limpiarTexto($texto) {
    $limpio = trim(mb_strtoupper($texto));
    return $limpio;
}
