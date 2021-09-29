<?php

include_once('../../PHP/Assets/conexion-db.php');


/**
 * Insertar Registro
 * @author William Giraldo <williamgiraldo1705@gmailcom>
 * @version 1.0
 * @return string configuración de la conexión
 */

$idUsuario=$_POST['idUsuario'];
$id_tipo=$_POST['id_tipo'];
$usuario_nombres=$_POST['usuario_nombres'];
$usuario_apellidos=$_POST['usuario_apellidos'];
$usuario_direccion=$_POST['usuario_direccion'];
$usuario_rango=$_POST['usuario_rango'];
$usuario_telefono=$_POST['usuario_telefono'];
$usuario_correo=$_POST['usuario_correo'];
$usuario_nacimiento=$_POST['usuario_nacimiento'];
$usuario_contrasena=$_POST['usuario_contrasena'];
$confirmacion_contrasena=$_POST['confirmacion_contrasena'];

/*Función del registro*/
saveData_register($idUsuario, $id_tipo, $usuario_nombres, $usuario_apellidos, 
$usuario_direccion, $usuario_rango, $usuario_telefono, $usuario_correo, 
$usuario_nacimiento, $usuario_contrasena);



function saveData_register($idUsuario, $id_tipo, $usuario_nombres, $usuario_apellidos, 
$usuario_direccion, $usuario_rango, $usuario_telefono, $usuario_correo, 
$usuario_nacimiento, $usuario_contrasena) 
{
    $result_bd = conexionBD();
    $insert_datos = "INSERT INTO usuario(idUsuario, id_tipo, usuario_nombres, usuario_apellidos, 
    usuario_direccion, usuario_rango, usuario_telefono, usuario_correo, 
    usuario_nacimiento, usuario_contrasena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $result = $result_bd -> prepare($insert_datos);
    $result -> execute(array($idUsuario, $id_tipo, $usuario_nombres, $usuario_apellidos, 
    $usuario_direccion, $usuario_rango, $usuario_telefono, $usuario_correo, 
    $usuario_nacimiento, $usuario_contrasena));
    
    if (!$result) {
        throw new Exception('Error al guardar el registro.');
    }
    echo 'El registro fue guardado';
}

?>