<div class="card w-75 mx-auto mt-5 ">
  <div class="card-body text-center mx-auto">

  <!-- errores inicio -->
  <?php if ($validation): ?>
    <?= view("/partial/_error");?>
<?php endif; ?>
<!-- errores fin-->

<!-- formulario inicio -->
  <form action="<?=base_url()?>/guardar" method="post">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" >
  </div>
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" name="cantidad" class="form-control" id="cantidad">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<!-- formulario fin -->

  
  </div>
</div>

