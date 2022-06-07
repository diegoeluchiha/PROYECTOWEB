

<div class="container mt-5  " >
  <a class="btn btn-success mb-3 px-5" href="<?=base_url()?>/crear"><i class="bi bi-plus-circle-fill "> </i>Crear </a>

<table id="tableid" class="table text-center  table-striped-columns " >
  <thead>
    <tr>
      <th class="table-secondary text-center" scope="col">ID</th>
      <th class="table-secondary text-center" scope="col">NOMBRE PRODUCTO</th>
      <th class="table-secondary text-center" scope="col">DESCRIPCION</th>
      <th class="table-secondary text-center" scope="col">CANTIDAD</th>
      <th class="table-secondary text-center" scope="col">OPCIONES</th>
    </tr>
  </thead>
  <tbody >
  <?php  foreach ($nombre as $d) :?>
    <tr>
      <td ><?=$d['id'] ;?></td>
      <td ><?=$d['nombre'] ;?></td>
      <td ><?=$d['descripcion'] ;?></td>
      <td ><?=$d['cantidad'] ;?></td>
      <td >
        <a class="btn btn-dark btn-sm" href="<?=base_url()?>/editar/<?=$d['id'] ;?>"><i class="bi bi-pencil"></i></a>
        <a class="btn btn-danger  btn-sm" href="<?=base_url()?>/borrar/<?=$d['id'] ;?>" onclick="return confirmdelete();"><i class="bi bi-trash3"></i></a>
      </td>
    </tr>
    <?php endforeach?>
  </tbody>

</table>
</div>
<div><br></div>
<div><br></div>



