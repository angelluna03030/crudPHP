<?php
require_once 'c://xampp/htdocs/crudPHP/vista/head/head.php';
?>
<br><div class="container">
<form action="store.php" method="POST" autocomplete="off">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nombre del usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email del usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">Contreña del usuario</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/CRUDPHP/vista/index.php" class="btn btn-danger">Cancelar</a>
</form>
</div>
<?php
require_once 'c://xampp/htdocs/crudPHP/vista/head/footer.php';
?>