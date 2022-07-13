
<div class="card text-center w-50 mx-auto mb-5">
  <div class="card-header bg-dark text-white">
    Datos
  </div>
  <div class="card-body">

<!-- inicio formulario -->
  <form action="<?=base_url()?>/actualizar/proyecto" method="post">
  <input type="hidden" name="id" value="<?=$informacion['id'] ?>">

  <div class="mb-3">
    <label for="nombre_proyecto" class="form-label">Nombre</label>
    <input type="text" name="nombre_proyecto" class="form-control" id="nombre_proyecto" value="<?=$informacion['nombre_proyecto']?>" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?=$informacion['descripcion']?>">
  </div>

  <div class="mb-3">
    <label for="fecha_inicio" class="form-label">FECHA INICIO</label>
    <input type="datetime-local" name="fecha_inicio" class="form-control" id="fecha_inicio" value="<?=$informacion['fecha_inicio'] ?>">
  </div>

  <div class="mb-3">
    <label for="fecha_fin" class="form-label">FECHA FIN</label>
    <input type="datetime-local" name="fecha_fin" class="form-control" id="fecha_fin" value="<?=$informacion['fecha_fin'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<!-- fin formulario -->


</div>
  <div class="card-footer text-muted bg-dark py-3">
    <!-- 2 days ago -->
  </div>
</div>

  
