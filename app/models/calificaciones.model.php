<?php

class CalificacionesModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_escuela; charset=utf8', 'root', '');
    }

    public function getAllcalificaciones()
    {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare('SELECT*FROM calificaciones');
        $query->execute();

        // 3. obtengo los resultados
        $calificaciones = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $calificaciones;
    }


    public function getCalificacion($id)
    {
        $query = $this->db->prepare('SELECT * FROM calificaciones WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }


    public function insertCalificación($NDNI, $Materia, $Anio, $Docente, $Calificacion)
    {
        $query = $this->db->prepare('INSERT INTO `calificaciones` (`id`,`NDNI`,`Materia`,`Anio_Correspondiente`,`Docente`,`Calificacion`) VALUES (?,?,?,?,?,?)');
        $query->execute(["", $NDNI, $Materia, $Anio, $Docente, $Calificacion]);
        //Inserto en el último lugar del arreglo
        return $this->db->lastInsertId();
    }


    public function deletecalificaciónByID($id)
    {
        $query = $this->db->prepare('DELETE FROM calificaciones WHERE id = ?');
        $query->execute([$id]);
    }

    public function editarCalificacion($id, $nuevondni, $nuevaMateria, $nuevoAnio, $nuevoDocente, $nuevaCalificacion)
    {
        $query = $this->db->prepare('UPDATE calificaciones SET  `NDNI`=?, `Materia`=? ,`Anio_Correspondiente`=? ,`Docente`=? ,`Calificacion`=?  WHERE `id`=?');
        $query->execute([$nuevondni, $nuevaMateria, $nuevoAnio, $nuevoDocente, $nuevaCalificacion, $id]);
    }

    public function getCalificacionDNIlIKE($NDNI)
    {
        $query = $this->db->prepare('SELECT * FROM calificaciones WHERE NDNI LIKE ?');
        $query->execute(["%${NDNI}%"]);

        $calificacion = $query->fetchAll(PDO::FETCH_OBJ);

        return $calificacion;
    }
    public function getCalificacionIdlIKE($id)
    {
        $query = $this->db->prepare('SELECT * FROM calificaciones WHERE id LIKE ?');
        $query->execute(["%${id}%"]);

        $calificacion = $query->fetchAll(PDO::FETCH_OBJ);

        return $calificacion;
    }
}
