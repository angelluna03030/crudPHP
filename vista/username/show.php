<?php
require_once 'c://xampp/htdocs/crudPHP/vista/head/head.php';

require_once 'c://xampp/htdocs/crudPHP/controlador/usernameControler.php';
$obj = new usernameController();
$date = $obj->show($_GET['id']);

?>

<h2 class="text-center">Detalles del registro</h2>
<div class="container">
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?php echo $date[0]; ?>" class="btn btn-sucess">Actualizar</a>
 
    <a href=""   class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">Eliminar</a>


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
        <a href="delete.php?id=<?php echo $date[0]; ?>" class="btn btn-danger">Eliminar</a>
     
      </div>
    </div>
  </div>
</div>
</div>
<table class="table container-fluid">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">nombre</th>
        <th scope="col">email</th>
        <th scope="col">fecha</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td scope="col"><?php echo $date[0]; ?></td>
        <td scope="col"><?php echo $date[1]; ?></td>
        <td scope="col"><?php echo $date[2]; ?></td>
        <td scope="col"><?php echo $date[4]; ?></td>
  
     
 
    </tr>
</tbody>
</table>
</div>
<?php
require_once 'c://xampp/htdocs/crudPHP/vista/head/footer.php';
?>