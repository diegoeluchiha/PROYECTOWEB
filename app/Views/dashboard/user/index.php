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
                    <a class=" ml-2 btn btn-danger btn-sm" data-bs-id="<?=$u->id ;?>" data-bs-toggle="modal" data-bs-target="#eliminarModalusuario"  data-toggle="tooltip" data-placement="top" title="Eliminar" ><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
        <?php endforeach?>

    </tbody>
 
</table>
<!-- pagers link -->

</div>

<!-- modal eliminar -->
<div class="modal fade" id="eliminarModalusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light ">
        <h5 class="modal-title mx-auto">Mensaje</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body text-center">
        <b>   ¿Seguro que deseas eliminar el registro?</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
        
        <a id="deleteform" data-bs-action="<?=base_url()?>/cliente/delete/" href="" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
<!-- modal eliminar -->


<!-- escript -->
<script>
  var eliminarModal = document.getElementById('eliminarModalusuario')
  eliminarModal.addEventListener('show.bs.modal', function (event) {
  // Botón que activó el modal
  var button = event.relatedTarget
  // Extraer información de los atributos data-bs-*
  var id = button.getAttribute('data-bs-id')
  // Si es necesario, puedes iniciar una solicitud AJAX aquí
  // y luego realiza la actualización en una devolución de llamada.
  //
  // Actualizar el contenido del modal.
  //var modalTitle = eliminarModal.querySelector('.modal-title')
  var deleteform = eliminarModal.querySelector('#deleteform')
  var action=deleteform.getAttribute("data-bs-action")
  deleteform.setAttribute("href",action+id)

  // modalTitle.textContent = 'Nuevo mensaje para ' + recipient
  // modalBodyInput.value = recipient
})
</script>

<!-- fin script -->
