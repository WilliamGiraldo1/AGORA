<!--Código de PHP-->
<?php

include_once('../../Assets/PHP/conexion-db.php');


/**
 * Insertar Registro
 * @author William Giraldo <williamgiraldo1705@gmailcom>
 * @version 1.0
 * @return string configuración de la conexión
 */

$idUsuarios=$_POST['idUsuarios'];
$id_tipo=$_POST['id_tipo'];
$usuario_nombres=$_POST['usuario_nombres'];
$usuario_apellidos=$_POST['usuario_apellidos'];
$usuario_direccion=$_POST['usuario_direccion'];
$usuario_rango=$_POST['usuario_rango'];
$usuario_telefono=$_POST['usuario_telefono'];
$usuario_correo=$_POST['usuario_correo'];
$usuario_nacimiento=$_POST['usuario_nacimiento'];
$usuario_contrasena=md5($_POST['usuario_contrasena']);
$confirmacion_contrasena=$_POST['confirmacion_contrasena'];

$sql="INSERT INTO usuario(idUsuarios, id_tipo, usuario_nombres, usuario_apellidos, 
    usuario_direccion, usuario_rango, usuario_telefono, usuario_correo, 
    usuario_nacimiento, usuario_contrasena) VALUES ('$idUsuarios','$id_tipo','$usuario_nombres','$usuario_apellidos',
    '$usuario_direccion','$usuario_rango','$usuario_telefono','$usuario_correo','$usuario_nacimiento','$usuario_contrasena')";

    if (mysqli_query($conexion_bd, $sql)) {
        header("location:../redirect/Redir_01/index.php");
    }else{
   Header("location:../redirect/redir_01/index.php");
}
?>
