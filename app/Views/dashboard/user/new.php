<div class="row  text-center mx-auto mt-5" style="width: 30em;" >
<?= view("dashboard/partials/_form-error");?>
<form action="create" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?= view("dashboard/user/_form",['textButton'=>'Guardar','created'=>true]);?>
</form>
</div>