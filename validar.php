<?php

include_once './libreria_mysql.php';

$usuario = $_POST['txtUser'];
$clave = $_POST['txtPass'];

$sql = "select * from alumno where dni='$usuario' and clave='$clave' ";
bd_connectar();
$registro = bd_consultar($sql);

if (count($registro) == 1) {
    header("location: index_intranet.php");
} else {
    header("location: construccion.html");
}   



