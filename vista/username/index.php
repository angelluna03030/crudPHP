<?php

require_once 'c://xampp/htdocs/crudPHP/vista/head/head.php';
require_once 'c://xampp/htdocs/crudPHP/controlador/usernameControler.php';
$obj = new usernameController();
$row = $obj->index();

?>
<br>
<div class="container">
    <div class="mb-3">
<a href="create.php" class="btn btn-primary">Agregar nuevo usurio</a>
</div>
<br>


</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">nombre</th>
        <th scope="col">email</th>
        <th scope="col">fecha</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php if ($row) { ?>
    <?php foreach ($row as $row) { ?>
        <tr>
            <th><?php echo $row[0]; ?></th>
            <th><?php echo $row[1]; ?></th>
            <th><?php echo $row[2]; ?></th>
            <th><?php echo $row[4]; ?></th>
            <th><a href="show.php?id=<?php echo $row[0]; ?>" class="btn btn-primary">Ver</a>
            <a href="edit.php?id=<?php echo $row[0]; ?>" class="btn ">Editar</a>
          <a href=""   class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">Eliminar</a></th>
        </tr>
        <?php } ?>
    <?php } else { ?>  
<tr>
    <td colspan="5" class="text-center">
No hay registros actualmente
    </td>
</tr>
        <?php } ?>
    </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar el registro?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     Una vez elimnado no se podra recuperar el registro
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-successe" data-bs-dismiss="modal">Cerrar</button>
        <a href="delete.php?id=<?php echo $row[0]; ?>" class="btn btn-danger">Eliminar</a>
     
      </div>
    </div>
  </div>
</div>
</div>
<?php

require_once 'c://xampp/htdocs/crudPHP/vista/head/footer.php';
?>