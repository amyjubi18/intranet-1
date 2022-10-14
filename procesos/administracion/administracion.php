<?php

session_start();
if(!isset($_SESSION['permiso'])){
  header('location: login.php');
}else{
  if($_SESSION['permiso'] != 1){
    header('locaction: login.php');
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/inicio.css">

    <title> Inicio</title>
</head>
<body class="m-0 p-0 box-border">
  
<div class="min-h-full">
<nav class="menu">
    <section class="menu__container">
      <h1 class="menu__logo">
        <img src="/img/Logo.png" class="w-10"> 
      </h1>
   
    <ul class="menu__links">
      <li class="menu__item">
        <a href="/procesos/administracion/administracion.php" class="menu__link">Inicio</a>
      </li>
      
      
        
      <li class="menu__item ">
        <a href="#" class="menu__link">Archivos Expedientes</a>
      </li>
      <!-----PERFIL DE USUARIO---->
      <li class="menu__item menu__item--show">
        <a href="#" class="menu__link"> <img src="/img/perfil (1).png" alt=""></a>
        <ul class="menu__nesting">
          <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Perfil</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Cerrar Sesión</a>
            </li>
           
          </ul>
          
          
        </li> 
        <!------------------------------->
    </ul>
    
            <div class="menu__hamburguer">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFdJREFUSEvtkTEOACAIA+n/H42zSiCEFAd0VtveQcgH5P/lB4SE+xGpqoa1nAsAttLXAnpApb31tt9B+4Ksk1DyuYAeUEU2QLKFyPOSlvwkICN+qORZiBbM1hgZKngKjAAAAABJRU5ErkJggg==" class="menu__img"/>
            </div>
            
    </section>
  </nav>
  <script src="/js/inicio.js"></script>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center">Módulo Administración</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
  </div>
</div>


<div class="flex space-x-28 > * + *	">
  <div class="flex-1 items-center">
<h1 class="text-center">
  <a href="#"><img src="/img/archivo.png" alt="" class=" flex content-center  w-40 h-40 ml-20 "> </a>
    Archivos Expedientes
</h1>
  </div>
  <div class="contents">
    <div class="flex-1 items-center">
    <h1 class="text-center">
  <a href="#"><img src="/img/sigesp.jpeg" alt="" class=" flex content-center  w-40 h-40 ml-20 "> </a>
    SIGESP
</h1>
    </div>
    <div class="flex-1 items-center">
    <a href="#"><img src="/img/Logo.png" alt="" class=" flex text-center"> modulo 3</a>

    </div>
  </div>
  <div class="flex-1 items-center">
  <a href="#"><img src="/img/Logo.png" alt="" class=" flex text-center"> modulo 4</a>

  </div>
</div>

      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>
</body>
</html>






