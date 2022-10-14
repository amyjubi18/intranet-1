<?php
include_once 'db.php';

session_start();
if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($_SESSION['permiso'])){
    switch($_SESSION['permiso']){
        case 1:
            header('location:/administracion/administracion.php');
        break;
        case 2:
            header('location: inicio.php');
        break;
        default: 
    }
}

if(isset($_POST['usuarios']) && isset ($_POST['contrasena'])){
    $usuarios = $_POST['usuarios'];
    $contrasena = $_POST['contrasena'];

    $db =new Database();
    $query = $db->connect()->prepare('SELECT*FROM  usuarios = :usuarios AND contrasena =:contrasena');
    $query->execute(['usuarios' => $usuarios, 'contrasena' => $contrasena]); 
    
    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
        //validar permiso
        $permiso = $row[3];
        $_SESSION['permiso'] = $permiso;
        switch($_SESSION['permiso']){
            case 1:
                header('location:/administracion/administracion.php');
            break;
            case 2:
                header('location: inicio.php');
            break;
            default: 
        }

    }else{
        //no existe el usuario
        echo "El usuario o contraseña es incorrecto";
    }

}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Inicio de Sesión</title>
</head>

<body>
    <img src="/img/cinti.jpg" alt="Codecyt.S.A." class="img-responsive" width="100%" height="80%">
    <div class="h-y">
    <section class="flex flex-col md:flex-row h-screen items-center border-2 border-blue-900 rounded ">

        <div class="bg-blue-600 hidden lg:block h-screen hidden bg-blue-600 lg:block md:w-1/2 xl:w-2/3 h-screen">
            <img src="/img/fondo-intranet.jpg" class="w-full h-full object-cover" alt="">
        </div>
        <div class=" bg-white items-center justify-center flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-200  touch-none">
                <h1 class="text-5xl font-bold text-center my-1 text-blue-900" style="padding-top: -10px">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-5 ">Inicia Sesión</h1>
                
                <!-----------FORMULARIO-------------->
                <form class="mt-0" action="#" method="POST">
                    <div class="mt-1">
                        <label class="block text-gray-700" >Correo Electónico:</label>
                        <input type="text" placeholder="Ingresa el Correo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="usuarios">
                    </div>
                    <div class="mt-1">
                        <label class="block text-gray-700">Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Ingresa la Contraseña"  class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required name="contrasena">
                    </div>
                    <div class="text-right mt-2">
                        <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700 focus:outline-none">¿Ólvidaste tu Contraseña?</a>
                    </div>
                    <button class="w-full block bg-blue-900 hover:bg-blue-800 px-4 py-3 mt-4 rounded-lg font-semibold text-white focus:bg-blue-400 focus:outline-none" type="submit">Ingresar</button>
                    <hr class="my-4 border-gray-300 w-full ">
                    <p class="text-sm text-gray-500 mt-3 my-1 pb-1">
                        &copy;2022 Corporación para el Desarrollo Científico y Tecnológico, CODECYT, S.A.
                    </p>
                </form>
            </div>

        </div>
    </section>
    </div>
</body>

</html>