<?php

class usernameModel
{
    private $PDO;

    public function __construct()
    {
        require_once 'c://xampp/htdocs/crudPHP/config/db.php';
        $con = new db();
        $this->PDO = $con->conexion();
    }

    /*public function verificarUsuarios($email, $contrasena)
    {
        $stmt = $this->PDO->prepare('SELECT * FROM  usuarios WHERE email = :email AND contrasena = :contrasena');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $contrasena);

        return $stmt->execute() ? true : false;
    }*/

    public function insertar($nombre, $email, $contrasena)
    {
        $stament = $this->PDO->prepare('INSERT INTO usuarios VALUES(null,:nombre,:email,:contrasena,NOW())');
        $stament->bindParam(':nombre', $nombre);
        $stament->bindParam(':email', $email);
        $stament->bindParam(':contrasena', $contrasena);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id)
    {
        $stament = $this->PDO->prepare('SELECT * FROM usuarios where id = :id limit 1');
        $stament->bindParam(':id', $id);

        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index()
    {
        $stament = $this->PDO->prepare('SELECT * FROM usuarios');

        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id, $nombre, $email, $contrasena)
    {
        $stament = $this->PDO->prepare('UPDATE usuarios SET nombre = :nombre, email = :email, contrasena = :contrasena , fecha = NOW() WHERE id = :id');
        $stament->bindParam(':id', $id);
        $stament->bindParam(':nombre', $nombre);
        $stament->bindParam(':email', $email);

        $stament->bindParam(':contrasena', $contrasena);

        return ($stament->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $stament = $this->PDO->prepare('DELETE FROM usuarios WHERE id = :id');
        $stament->bindParam(':id', $id);

        return ($stament->execute()) ? true : false;
    }
}
