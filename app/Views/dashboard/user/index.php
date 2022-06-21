<div class="container">
<a href="<?= base_url() ?>/cliente/new" class="btn btn-success mb-2 px-4 mt-2"><i class="fa fa-plus"></i>Crear</a>
<table class="table" id="tableid">
    <thead>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach ($users as $key => $u) :?>
            <tr>
                <td><?=$u->id ?></td>
                <td><?=$u->email ?></td>
                <td><?=$u->username ?></td>
                <td>
                    <a class=" ml-2 btn btn-dark btn-sm"  data-toggle="tooltip" data-placement="top" title="Editar" href="<?= base_url() ?>/cliente/<?=$u->id ?>/edit"><i class="bi bi-pencil"></i></a>
                    <a class=" ml-2 btn btn-danger btn-sm"  data-toggle="tooltip" data-placement="top" title="Eliminar" href="<?= base_url() ?>/cliente/delete/<?=$u->id ?>" onclick="return confirmdelete();"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
        <?php endforeach?>


        <!-- <script>
            function isconfirm(){

            if(!confirm('¿Esta seguro que desea eliminar la siguiente fila.?')){
            event.preventDefault();
            return;
            }
            return true;
            }
        </script> -->
    </tbody>
 
</table>
<!-- pagers link -->

</div>
