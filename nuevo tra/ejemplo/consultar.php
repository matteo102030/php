<?php
//conexion base de datos
$conn = mysqli_connect('localhost', 'root', 'root', 'veterinaria');

if($conn){
    print("SIIII CONECTO >:D");
}
else{
    print("NO CONECTO >:(");
}

$documento = $_POST['cedula'];

$query="select*FROM veterinaria.dueño
where cedula=$documento";

//ejecuta consulta a la base de datos 
$result=mysqli_query($conn,$query);
if($result){

    $datos=mysqli_fetch_array($result);
//asigna los valores de la base de datos a una variable  
    $nombre=$datos['nombre'];
    $documento=$datos['cedula'];
    $numero_mascotas=$datos['numero_mascotas'];
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
            <label>Nombre del dueño: </label>
            <input type="text" name="nombre" value='<?php print $nombre; ?>'>
            <label>documento: </label>
            <input type="text" name="cedula" value='<?php print $documento; ?>'>
            <label>Nombre de numero_mascotas: </label>
            <input type="number" name="mascotas" value='<?php print $numero_mascotas; ?>'><br>
            <p>quieres actualizar tus datos</p>
            <button>actualizar</button>
        </form>
    </div>
</body>
</html>
