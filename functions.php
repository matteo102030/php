<?php

$conn=mysqli_connect('localhost:3306','root','root','taller');

if($conn){
        print "siii conecto (*__*)";

        }
        else
        {
            print "noo algo esta mal  (>__<)";

        }


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'] ;
$direccion=$_POST['direccion'];
$fechan=$_POST['fechan'] ;

print("$nombre,
$apellido,
$direccion,
$fechan");


$query="insert into taller.tabla(nombre,apellido,direccion,fechan) values
('$nombre','$apellido','$direccion','$fechan')";
print $query;
$result=mysqli_query($conn,$query);

if($result){
    print "siii conecto (*__*)";

    }
    else
    {
        print "noo algo esta mal  (>__<)";

    }

?>