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
?>
<html>
    
    <body>
        <form action="paginainsert2.php" method="POST">
        nombre de usuario:   <input type="text" name="user">
        contraseña:   <input type="password" name="contrasena">
            <input type="submit" value="insert">
        </form> 
    </body>
</html>