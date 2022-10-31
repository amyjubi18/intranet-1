
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> Registro</title>
</head>

<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(../img/fondo.jpg)">
    <img src="../img/cinti.jpg"  class="img-responsive" width="100%" height="100%">
    <section class="justify-center md:flex-row h-screen items-center py-1">

<div class="my-5">
        </div>
        <div class="bg-white items-center p-3 rounded-lg justify-center  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Registro</h1>
                <form class="mt-0" action="registro-usuario.php" method="POST">
                <div class="mt-1">
                        <label class="block text-gray-700">Nombre:</label>
                        <input type="text" placeholder="Ingresa el Nombre" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" id="nombre" name="nombre" autocomplete autofocus required>
                    </div>
                    <div class="mt-1">
                        <label class="block text-gray-700">Apellido:</label>
                        <input type="text" placeholder="Ingresa el Apellido" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="apellido" id="apellido">
                    </div>
                    
                    <div class="mt-1">
                        <label class="block text-gray-700">Correo Electónico:</label>
                        <input type="email" placeholder="Ingresa el Correo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="correo" id="correo">
                    </div>
                    
                    <div class="mt-1">
                        <label class="block text-gray-700">Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Ingresa la Contraseña" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required id="contrasena" name="contrasena">
                    </div>
                    
                    <!-- <div class="mt-1">
                        <label class="block text-gray-700"> Confirmar la Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Confirme la Contraseña" name="conficontrasena" id="conficontrasena" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required>
                    </div> -->
                    <div class="justify-center h-sreen mt-1">
                    <label for="permiso" class="block text-gray-700">Gerencia: </label>
                    <select class="block  w-full bg-white mt-2 border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " name="id_permisos" id="id_permisos" >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="0">Seleccione la Gerencia</option>
                       <?php
                        include("conexion.php");
                        $consulta = "SELECT * FROM permisos";
                        
                        $ejecutar = mysqli_query($conexion, $consulta);
                        while($row = mysqli_fetch_array($ejecutar)){
                            $id_permisos = $row['id_permisos'];
                            $permiso =$row['gerencia'];
                        echo "<option value = '".$id_permisos."' >".$permiso."</option>";

                        }
                        ?> 
                        
                    </select>  

                    
                    </div>
                    <div class="static justify-center ml-4">
                    <button class="inerit w-40 inline-block block bg-blue-900 hover:bg-blue-800 px-4 py-3 mt-4 rounded-lg font-semibold text-white focus:bg-blue-400 focus:outline-none" type="submit" value="registrar" id="sub" name="sub" onclick="registrar()">Registrar</button>
                    
        </div>
    </section>
    <script type="librerias/js/sweetalert2@11.js"></script>
</body>

</html>