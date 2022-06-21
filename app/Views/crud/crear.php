
<div class="card text-center w-50 mx-auto mb-5">
  <div class="card-header bg-dark text-white">
    Datos
  </div>
  <div class="card-body">
<!-- formulario inicio -->
  <form action="<?=base_url()?>/guardar" method="post">

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre"  aria-describedby="emailHelp">
    
    <?php if ($error=$validation->getError('nombre')): ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    <?=$error =$validation->getError('nombre');?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" >
    
    <?php if ($error=$validation->getError('descripcion')): ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    <?=$error =$validation->getError('descripcion');?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
  </div>

  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" name="cantidad" class="form-control" id="cantidad">
    
    <?php if ($error=$validation->getError('cantidad')): ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    <?=$error =$validation->getError('cantidad');?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<!-- formulario fin -->

</div>
  <div class="card-footer text-muted bg-dark py-3">
    <!-- 2 days ago -->
  </div>
</div>

  
