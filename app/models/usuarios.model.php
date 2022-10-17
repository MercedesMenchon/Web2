<?php

class UsuariosModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_escuela; charset=utf8', 'root', '');
    }

    public function getUsuarioByEmail($email)
    {
        $query = $this->db->prepare('SELECT*FROM usuarios WHERE email=?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
