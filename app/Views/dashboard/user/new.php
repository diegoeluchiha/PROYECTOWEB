




<div class="card text-center w-50 mx-auto mb-5">
  <div class="card-header bg-dark text-white">
    Datos
  </div>
  <div class="card-body">
    <form action="create" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view("dashboard/user/_form",['textButton'=>'Guardar','created'=>true]);?>
    </form>
  </div>
  <div class="card-footer text-muted bg-dark py-3">
    <!-- 2 days ago -->
  </div>
</div>