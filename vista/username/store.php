<?php

require_once 'c://xampp/htdocs/crudPHP//controlador/usernameControler.php';
$obj = new usernameController();
$obj->guardar($_POST['nombre'], $_POST['email'], $_POST['contrasena']);
