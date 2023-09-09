<?php

class usernameController
{
    private $model;

    public function __construct()
    {
        require_once 'c://xampp/htdocs/crudPHP/modelo/usermaneModel.php';
        $this->model = new usernameModel();
    }

    public function guardar($nombre, $email, $contrasena)
    {
        $id = $this->model->insertar($nombre, $email, $contrasena);

        return ($id != false) ? header('Location:show.php?id='.$id) : header('Location:create.php');
    }

    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header('Location:index.php');
    }

public function index()
{
    return ($this->model->index()) ? $this->model->index() : false;
}

public function update($id, $nombre, $email, $contrasena)
{
    return ($this->model->update($id, $nombre, $email, $contrasena) != false) ? header('Location:show.php?id='.$id) : header('Location:index.php');
}

public function delete($id)
{
    return ($this->model->delete($id)) ? header('location:index.php') : header('location:show.php?id='.$id);
}
}
