<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
  <form class="form-register" method="post" action="/veterinaria/datos.php">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="ingrese su nombre " value="">
    <input class="controls" type="text" name="mascota" id="mascota" placeholder="Ingrese sel nombre de su mascota" value="">
    <input class="controls" type="number" name="edad" id="edad" placeholder="ingrese la edad de su mascota"value="">
    <input class="controls" type="text" name="tipo" id="tipo" placeholder="el tipo de mascota " value="">
    <input class="controls" type="text" name="raza" id="raza" placeholder="ingrese la raza de su mascota"value="">
    <input class="controls" type="tel" name="telefono" id="telefono" placeholder="ingrese su telefono " value="">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar" name="submit">
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </form>

</body>
</html>