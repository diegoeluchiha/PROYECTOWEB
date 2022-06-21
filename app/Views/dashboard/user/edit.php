

<div class="card text-center w-50 mx-auto mb-5">
  <div class="card-header bg-dark text-white">
    Datos
  </div>
  <div class="card-body">
  <form action="<?=base_url()?>/cliente/update/<?=$user->id ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view("dashboard/user/_form",['textButton'=>'actualizar','created'=>false]);?>
</form>

  </div>
  <div class="card-footer text-muted bg-dark py-3">
    <!-- 2 days ago -->
  </div>
</div>