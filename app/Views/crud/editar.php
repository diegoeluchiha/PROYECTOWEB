<div class="card w-75 mx-auto mt-5 ">
  <div class="card-body text-center mx-auto">

  <form action="<?=base_url()?>/actualizar" method="post">
  <input type="hidden" name="id" value="<?=$informacion['id'] ?>">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" value="<?=$informacion['nombre']?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?=$informacion['descripcion']?>">
  </div>
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" name="cantidad" class="form-control" id="cantidad" value="<?=$informacion['cantidad'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

  
  </div>
</div>
