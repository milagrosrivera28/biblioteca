<?php

include_once './libreria_mysql.php';
include_once 'biblioteca.php';

$nombre = limpiarTexto($_POST["txtNombre"]);
$paterno = limpiarTexto($_POST["txtPaterno"]);
$materno = limpiarTexto($_POST["txtMaterno"]);
$dni = $_POST["txtDni"];
$clave = $_POST["txtPass"];
$direccion = limpiarTexto($_POST["txtDireccion"]);
$telefono = $_POST["txtTelefono"];


    $sql = "INSERT INTO alumno (nombre,paterno,materno,dni,clave,direccion,telefono) ";
    $sql .= " values ('$nombre','$paterno','$materno','$dni','$clave','$direccion','$telefono')";
 
bd_connectar();
 $registro = bd_consultar($sql);

if (bd_ejecutar($sql)) {
    echo "Gracias por registrarse<br/>";
    bd_desconectar();
    header('location: login.html');
} else {
    echo "Error al procesar el registro:<br/>" . $sql;
    echo '<a href="register.html">Regresar</a>';
    bd_desconectar();

}

