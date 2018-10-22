<?php

//variables de nuestro formulario htm
//$nombre = $_POST['nombre'];
//$contrasena = $_POST['contrasena'];


//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="usuario";

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
echo $user;
?>
<body>
<html>
<form action="updateuser_2.php" method="POST">
<input type="hidden" name="user" value="<?php  echo$row[0] ?>">
<input type="password" name="password">
<input type="submit" value="update">
</form> 
</body>
</html>