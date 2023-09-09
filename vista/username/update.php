<?php

require_once 'c://xampp/htdocs/crudPHP/controlador/usernameControler.php';
$obj = new usernameController();

 $obj->update($_POST['id'], $_POST['nombre'], $_POST['email'], $_POST['contrasena']);
