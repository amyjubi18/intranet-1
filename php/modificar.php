<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
   

<!-- CSS only -->

    <title>Modificar</title>
</head>
<body>

<div class="my-2">

</div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg"  >
    
    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 border-solid border-gray-600">
        <thead class="text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400">
            <tr class="">
         <th scope="col" class="py-3 px-6 text-center" >ID</th>
            <th scope="col" class="py-3 px-6 text-center">Usuario</th>
            <th scope="col" class="py-3 px-6 text-center">Nombre y Apellido</th>
            <th scope="col" class="py-3 px-6 text-center">Correo</th>
            <th scope="col" class="py-3 px-6 text-center">Contraseña</th>
            <th scope="col" class="py-6 px-6 text-center">Gerencia</th>
            <th colspan="2" scope="col" class="py-3 px-6 text-center">Opción</th>
        </thead>

<?php
include "conexion.php";

$consultar = "SELECT user.id, user.username, user.fullname, user.email, user.password, permisos.gerencia, permisos.id_permisos FROM user, permisos WHERE (user.id_permisos = permisos.id_permisos)  order by id ";
$resultado = mysqli_query($con, $consultar) or die (mysqli_error($con));


while($filas= $resultado->fetch_assoc())
{
    echo "<tr class='py-3 px-6'>";
    echo "<tbody >";
    echo "<td  class='py-6 px-6 text-center'>"; echo "<b>"; echo $filas ['id']; echo"</b>"; echo "</td>"; echo "<br>";
        echo "<td class='text-center' >"; echo $filas ['username']; echo "</td>"; echo "<br>";
        echo "<td class='text-center'>"; echo $filas ['fullname']; echo "</td>"; echo "<br>";
        echo "<td class='text-center'>"; echo $filas ['email']; echo "</td>"; echo "<br>";
        echo "<td class= 'text-center'>"; echo $filas ['password']; echo "</td>"; echo "<br>";
        echo "<td class='text-center'>"; echo $filas ['gerencia']; echo "</td>"; echo "<br>";
        
        echo "<td> <a href='modificar-usuario.php?id=".$filas['id']."'> <buttom type= 'buttom' class='focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'> Modificar </buttom> </a> </td>";
        echo "<td> <a href='eliminar.php?id=".$filas['id']."'> <buttom type= 'buttom' class='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'> Eliminar </buttom> </a> </td>";
        
    echo "</tbody>";
        echo "</tr>";
}

?> 

</table>
</div>
</div>
</body>
</html>