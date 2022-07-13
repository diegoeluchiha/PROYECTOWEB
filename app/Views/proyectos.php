

<div class="container mt-5  " >
  <a class="btn btn-success mb-3 px-5" href="<?=base_url()?>/crear/proyecto"><i class="bi bi-plus-circle-fill "> </i>Crear </a>

<table id="tableid" class="table text-center  table-striped-columns " >
  <thead>
    <tr>
      <th class="table-secondary text-center" scope="col">NOMBRE PROYECTO</th>
      <th class="table-secondary text-center" scope="col">DESCRIPCION</th>
      <th class="table-secondary text-center" scope="col">FECHA INICIO</th>
      <th class="table-secondary text-center" scope="col">FECHA FIN</th>
      <th class="table-secondary text-center" scope="col">OPCIONES</th>
    </tr>
  </thead>
  <tbody >
  <?php  foreach ($nombre as $d) :?>
    <tr>
      <td ><?=$d['nombre_proyecto'] ;?></td>
      <td ><?=$d['descripcion'] ;?></td>
      <td ><?=$d['fecha_inicio'] ;?></td>
      <td ><?=$d['fecha_fin'] ;?></td>
      <td >
        <a class="btn btn-dark btn-sm" href="<?=base_url()?>/editar/proyecto/<?=$d['id'] ?>"><i class="bi bi-pencil"></i></a>
        <a class="btn btn-danger  btn-sm" data-bs-id="<?=$d['id'] ;?>" data-bs-toggle="modal" data-bs-target="#eliminarModal"  ><i class="bi bi-trash3"></i></a>

      </td>
    </tr>
    <?php endforeach?>
  </tbody>

</table>
</div>
<div><br></div>
<div><br></div>

<!-- modal eliminar -->
<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-light ">
        <h5 class="modal-title mx-auto">Mensaje</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body text-center">
        <b>   ¿Seguro que deseas eliminar el registro?</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
        
        <a id="deleteform" data-bs-action="<?=base_url()?>/borrar/proyecto" href="" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
<!-- modal eliminar -->

<!-- escript -->
<script>
  var eliminarModal = document.getElementById('eliminarModal')
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


