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
$query = "SELECT Nombre from usuarios";
$result = mysqli_query($conn, $query);
 
//ECHO $query;



/* numeric array */
while($row = mysqli_fetch_array($result)){
    echo $row[0] . "<br>";
}

/*
//MODO CUTRE ES DECIR SIN NECESIDAD DE USAR UNA BASE DE DATOS
if ($nombre == "Jonathan" && $contrasena == "hola") {
    echo "Usuario correcto";
} else {
    echo "Usuario incorrecto";
}
*/
?>