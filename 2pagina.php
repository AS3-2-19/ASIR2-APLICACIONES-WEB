<?php
$nombre  = $_POST['Nombre'];
$contrasena = $_POST['Contrasena'];

//para conectarnos con mysql
$servername = "localhost:3307";
$username = "root";
//$password = "root";
$password = "";
$db = "usuarios";

//para crear conexiones
$conn = mysqli_connect($servername, $username, $password, $db);

//$mysqli = new mysqli($servername, $username, $password)

//funcion para crear conexion
if (!$conn)
    
    {
        //echo "Usuario correcto";
        die ("conexion fallida".mysqli_connect_error());
    }
       // else 
           //{
 //echo "conexion establecida";
            //}
$query ="SELECT * FROM usuarios";
//echo $query;
echo "el usuario que ha entrado es ". $nombre. " con la contrasena ". $contrasena;

$result =mysqli_query($conn, $query);

$row = mysqli_fetch_array($result, MYSQLI_NUM);

if($row){
    echo "login ok";
}else{
    echo "login ko";
}
echo "<br>";

//for ($x = 0; $x < count($row); $x++){
    //echo $row[$x];
    //echo "<br>";
//}

//while($row = mysqli_fetch_array($result)){
   //echo $row[0] ."<br>". $row[1] . "<br>";
//}
?>



