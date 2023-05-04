<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'mydb');

if($conn){
    print("SIIII CONECTO >:D");
}
else{
    print("NO CONECTO >:(");
}

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['cedula'];
$telefono=$_POST['telefono'];
//actualiza la base datos 
$queryUptade= "UPDATE mydb.persona SET nombre = '$nombre',apellido='$apellido', cedula='$documento', telefono='$telefono'
WHERE cedula= $documento";

//ejecuta el query
$result=mysqli_query($conn,$queryUptade);

if($result){
    echo "datos actualizados";
}

else{
    echo"error";
}


?>