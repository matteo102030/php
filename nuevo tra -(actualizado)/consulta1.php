<?php
//conexion base de datos
$conn = mysqli_connect('localhost', 'root', 'root', 'mydb');

if($conn){
    print("SIIII CONECTO >:D");
}
else{
    print("NO CONECTO >:(");
}

$documento = $_POST['cedula'];

$query="select*FROM mydb.persona
where cedula=$documento";

//ejecuta consulta a la base de datos 
$result=mysqli_query($conn,$query);
if($result){

    $datos=mysqli_fetch_array($result);
//asigna los valores de la base de datos a una variable  
    $nombre=$datos['nombre'];
    $apellido=$datos['apellido'];
    $cedula=$datos['cedula'];
    $telefono=$datos['telefono'];
}
//en el html muestra los valores de la base de datos y permite modificarlos 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <form action="actualizar1.php" method="POST">
            <label>Nombre </label>
            <input type="text" name="nombre" value='<?php print $nombre; ?>'>
            <label>Apellido </label>
            <input type="text" name="apellido" value='<?php print $apellido; ?>'>
            <label>documento: </label>
            <input type="number" name="cedula" value='<?php print $documento; ?>'>
            <label>Telefono </label>
            <input type="number" name="telefono" value='<?php print $telefono; ?>'><br>
            <p>quieres actualizar tus datos</p>
            <button>actualizar</button>
        </form>
    </div>
</body>
</html>