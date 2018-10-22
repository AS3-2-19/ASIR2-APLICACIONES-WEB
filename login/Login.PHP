<?php

//variables de nuestro formulario htm
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];


//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="usuario";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion                            !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }

  
//SELECT FROM .....  
$query = "SELECT  Nombre from usuarios where Nombre = '$nombre' and Contrasena = '$contrasena'";
$result = mysqli_query($conn, $query);
 
//ECHO $query;



/* numeric array */
$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0] . "-";


// if ok go to loginok.html
if ($row) {
    echo "Login OK";
} else {
    echo "Login KO";
}
// if not ok return to login.html

/*
//MODO CUTRE ES DECIR SIN NECESIDAD DE USAR UNA BASE DE DATOS
if ($nombre == "Jonathan" && $contrasena == "hola") {
    echo "Usuario correcto";
} else {
    echo "Usuario incorrecto";
}
*/
?>