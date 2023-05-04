<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'veterinaria');

if($conn){
    print("SIIII CONECTO >:D");
}
else{
    print("NO CONECTO >:(");
}

$nombre=$_POST['nombre'];
$documento=$_POST['cedula'];
$numero_mascotas=$_POST['mascotas'];
//actualiza la base datos 
$queryUptade= "UPDATE veterinaria.dueño SET nombre = '$nombre'
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




