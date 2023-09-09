<?php
require_once 'c://xampp/htdocs/crudPHP/vista/head/head.php';

require_once 'c://xampp/htdocs/crudPHP/controlador/usernameControler.php';
$obj = new usernameController();
$user = $obj->show($_GET['id']);

?>
<br>
<form action="update.php" method="post" autocapitalize="off">

<div class="container">
    <h2>Modificar registro</h2>
<div class="mb-3 row">
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text"  name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user[0]; ?>" >
    </div>
  </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">nombre</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="nombre" value="<?php echo $user[1]; ?> ">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control" id="staticEmail" value="<?php echo $user[2]; ?> " name="email">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="contrasena" value="<?php echo $user[3]; ?> ">
    </div>
  </div>
 <div>
    <input type="submit" value="Modificar" class="btn">
    <a href="show.php?id=<?php echo $user[0]; ?>" class="btn btn-danger">Cancelar</a>
 </div>
</div>

</form>



<?php
require_once 'c://xampp/htdocs/crudPHP/vista/head/footer.php';
?>