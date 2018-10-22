<?php

//variables de nuestro formulario htm
//$nombre = $_POST['nombre'];
//$contrasena = $_POST['contrasena'];


//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="usuarios";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion                            !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
  //echo "Conexion creada";

//leer informacion del formulario
$user = $_POST['user'];
//echo $user;

//delete user
$query = "DELETE FROM usuarios WHERE Nombre = '$user'";
//echo $query;

// variable con el resultado de la query y conn
$result = mysqli_query($conn, $query);
header('Location: '."ventana3.php");