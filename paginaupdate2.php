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

//comprobar conexion !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
  //echo "Conexion creada";

  //leer informacion del formulario
$user = $_POST['user'];
$pass =$_POST['password'];
//delete user
$query = "UPDATE usuarios SET Contrasena= '$pass' WHERE Nombre ='$user'";
//echo $query;
//jugamos con el result
$result = mysqli_query($conn, $query);
header('Location: '."Login_2.php");