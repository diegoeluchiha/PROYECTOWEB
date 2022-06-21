<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?=base_url()?>\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>\css\style.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>/DataTables/datatables.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.12.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- <div class="container-fluid"> -->
    <!-- header -->
    <header class="p-3 bg-dark text-white ">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a> -->

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?=base_url()?>\" class="nav-link px-2 text-white">Productos</a></li>
          <li><a href="<?=base_url()?>/cliente" class="nav-link px-2 text-white">Administrar usuarios</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Proyectos</a></li>
          <!-- <li><a href="#" class="nav-link px-2 text-white"></a></li> -->
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
          $session = session();
          ?>
          <?=$session->username?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Perfil</a></li> 
          <li><a href="<?=base_url()?>\email/contacto" class="dropdown-item ">Contacto</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>/logout">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
        
      </div>
    </div>
    <!-- dorwdawn -->


    <!-- href="<?=base_url()?>\perfil"  -->

    
  </header>

  <div class="container">
    <!-- header -->
    <div class="text-center mt-3">
    <?= view("dashboard/partials/_session");?>
    </div>
     <h1 class="text-center mt-3 mb-3"><?=$title ?></h1>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-secondary ">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Perfil</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body text-center">
      <!-- perfil -->
      <?php

      $session = session();
        ?>

        <div class=" mx-auto" style="width: 18rem;">

          <form>
          <div class="mb-3 ">
            <label for="username" class="form-label">Nombre de usuario</label>
            <input type="username" class="form-control text-center" id="username" aria-describedby="username" value="<?=$session->username?>" disabled> 
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control text-center" id="email" value=" <?=$session->email?>" disabled>
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Rol</label>
            <input type="text" class="form-control text-center" id="type" value="<?=$session->type?>" disabled>
          </div>
        </form>


        </div>
      <!-- fin perfil -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>  

