<div class="card w-50 mx-auto  ">
<?= view("dashboard/partials/_form-error");?>
<form action="<?=base_url()?>/cliente/update/<?=$user->id ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>

<?= view("dashboard/user/_form",['textButton'=>'actualizar','created'=>false]);?>
</form>
</div>