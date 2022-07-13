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
          <li><a href="<?=base_url()?>/proyecto"  class="nav-link px-2 text-white">Proyectos</a></li>
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
          <li><a class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Perfil</a></li> 
          <li><a  class="dropdown-item btn"  data-bs-id="" data-bs-toggle="modal" data-bs-target="#ContactoModal">Contacto</a></li>
            <li><a class="dropdown-item btn" href="<?=base_url()?>/logout">Cerrar sesión</a></li>
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

<!-- Modal perfil inicio -->
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
<!-- modal perfil fin -->


<!-- modal contacto inicio-->
<div class="modal fade" id="ContactoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-light ">
        <h5 class="modal-title mx-auto">Mensaje</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <form  class="row g-3 needs-validation mx-3 mt-3" action="<?=base_url()?>/email/enviar" method="post"  novalidate>       

              
<div class="mb-3 ">
      <input type="email" class="form-control" name="email" id="email" required placeholder="Escribe tu Email">
      <div class="invalid-feedback">
          Ingrese un email valido.
      </div>
  </div>

  
  <div class="mb-3">
      <input type="text" class="form-control" name="asunto" id="assunto" required placeholder="Escribe un asunto">
      <div class="invalid-feedback">
          Ingrese el asunto.
      </div>
  </div>

  <div class="form-floating">
      <textarea class="form-control" name="mensaje"   required></textarea>
      <label for="floatingTextarea">Mensaje</label>

      <div class="invalid-feedback">
          Ingrese el mensaje.
      </div>
  </div>

  <button type="submit" class="btn btn-dark mt-3 mb-3  " ><p>Enviar</p></button>


</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button> -->
        
        <!-- <a id="deleteform" data-bs-action="<?=base_url()?>/borrar/" href="" type="button" class="btn btn-danger">Eliminar</a> -->
      </div>
    </div>
  </div>
</div>
<!-- modal contacto fin -->




<!-- valicaicon contacto -->

<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
    </script>