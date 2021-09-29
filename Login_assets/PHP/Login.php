<?php

//Validacion de datos ingresados
if(isset($_SESSION["documento"]) && $_SESSION["contrasena"] === true){
  header("location: ../../index.php");
  exit;
}

$conexion_bd=mysqli_connect("localhost","root","", "agora_db");

$documento=$_POST['documento'];
$contrasena=md5($_POST['contrasena']);

session_start();
$_SESSION['documento']=$documento;

$consulta="SELECT * FROM usuario WHERE IdUsuarios='$documento' AND Usuario_contrasena='$contrasena'" ;
$resultado=mysqli_query($conexion_bd,$consulta);

$filas=mysqli_fetch_array($resultado);

if ($filas['Usuario_rango']=='Coordinador') //perfil de coordinador
{
  header("location: ../../Cor_profile/index.php");
}
else
if ($filas['Usuario_rango']=='Monitor') //perfil de Monitor
{
  header("location: ../../Mon_profile/index.php");
}
else
if ($filas['Usuario_rango']=='Estudiante') //perfil de estudiante
{
  header("location: ../../Est_profile/index.php");
}
else{
  ?>
  <?php
  header("../../index.php"); 
  ?>
  <h1>Error en el inicio de sesión</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion_bd);