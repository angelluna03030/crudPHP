<?php

require_once 'c://xampp/htdocs/crudPHP/controlador/usernameControler.php';
$obj = new usernameController();
$obj->delete($_GET['id']);
