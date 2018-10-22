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
  } //echo "conexion creada";

  
//SELECT FROM .....  
$query = "SELECT Nombre, Contrasena from usuarios";
// variable con el resultado de la select y conn
$result = mysqli_query($conn, $query);
 
?>
<html>
<head>
<style>
/*diseño css*/
   /* https://www.w3schools.com/css/tryit.asp?filename=trycss_table_striped */ 
   table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {background-color: BLUE ;}   
</style><!-- termina el diseño css-->
</head>
<table border=0>
<?php //creo una nueva variable para el while row
while($row = mysqli_fetch_array($result)){
    //echo $row[0] . "<br>";
?>
    <tr>
    <td> <!--datos de la base de datos-->
        <?php echo $row[0] ?>:
    </td>
    <td> <!--boton de borrrar y llamo al archivo deleteuser.php-->
        <form action="paginadelete.php" method="POST">
            <input type="hidden" name="user" value="<?php echo $row[0] ?>">
            <input type="submit" value="delete">
        </form>
    </td>
    <td> <!--boton de actualizar-->
        <form action="paginaupdate.php" method="POST">
            <input type="hidden" name="user" value="<?php  echo$row[0] ?>">
            <input type="submit" value="update">
        </form> 
    </td>
    </tr>
<?php
}//aqui termina el while
?>
</table>
</body>
</html>
