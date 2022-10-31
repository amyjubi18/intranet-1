<?php

include 'conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$id_permisos = $_POST['id_permisos'];
$query = "INSERT INTO usuarios (nombre, apellido, correo, contrasena, id_permisos)
VALUES('$nombre', '$apellido', '$correo', '$contrasena', '$id_permisos')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");


if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
    alert("Este correo ya se encuentra registrado");
    window.location = "registro.php";
    </script>
    ';
     exit();
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    $datos= '';
 if(!empty($datos)) {
    ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
</head>
<body id="body">

<h6 class="membrete">USUARIO REGISTRADO</h6>


<h6><b>Nombre: </b><?php echo $nombre; ?></h6>
  <h6><b>Apellido: </b><?php echo $apellido; ?></h6>
  <h6><b>Correo: </b><?php echo $correo; ?></h6>
  <h6><b>Contraseña: </b><?php echo $contrasena; ?></h6>
    <hr>
  <br>
</body>
</html>
<?php
}else{
    echo '
    <script>
    alert("Campos Vacios");
    window.location = "/procesos/registro.php";
    </script>
    ';
}
    
}else{
    echo '
    <script>
    alert("No se completo el registro. Intentalo nuevamente");
    window.location = "/procesos/registro.php";
    </script>
    ';
}
 mysqli_close($conexion);

 
?>