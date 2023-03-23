<?php
    if (isset($_POST['submit'])) {

    $dueño =$_POST['nombres'];
    $nmasc =$_POST['mascota'];
    $edad =$_POST['edad'];
    $tipo =$_POST['tipo'];
    $raza =$_POST['raza'];
    $tel =$_POST['telefono'];

    echo("dueño: $dueño"."   ".
    "nombre mascota:  $nmasc"."   ".
    "edad:  $edad"."   ".
    "tipo:  $tipo"."   ".
    "raza:  $raza"."   ".
    "telefono:  $tel");
    }
    
?>