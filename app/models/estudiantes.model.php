<?php

class EstudiantesModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_escuela; charset=utf8', 'root', '');
        
    }

   
    public function getAllEstudiantes() {
       
        $query = $this->db->prepare('SELECT*FROM estudiantes');
        $query-> execute();

        $estudiantes = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $estudiantes;
    }

    /**
     * Inserta una tarea en la base de datos.
     */

   public function insertEstudiante($NDNI,$Nombre,$Direccion,$Telefono,$Curso,$Division){
       
        $query=$this->db->prepare('INSERT INTO `estudiantes` (`NDNI`,`Nombre`,`Direccion`,`Telefono`,`Curso`, `Division`) VALUES (?,?,?,?,?,?)');
        $query->execute([$NDNI , $Nombre, $Direccion, $Telefono ,$Curso ,$Division]);
    //Inserto en el último lugar del arreglo
        return $this->db->lastInsertId();  
    }
    

    /**
     * Elimina una tarea dado su NDNI.
     */
    public function deleteEstudianteByNDNI($NDNI) {
        $query = $this->db->prepare('DELETE FROM estudiantes WHERE ndni = ?');
        $query->execute([$NDNI]);
    }

    public function idYaIngresado($NDNI){
        $query = $this->db->prepare('SELECT ndni FROM estudiantes WHERE ndni LIKE ?');
        $query->execute([$NDNI]);
        return $query->fetch(PDO::FETCH_OBJ);
     }


    public function editarEstudiante($NDNIEditar,$NDNI,$Nombre,$Direccion,$Telefono,$Curso,$Division){
    $query=$this->db->prepare('UPDATE estudiantes SET `ndni`=?, `nombre`=? ,`direccion`=? ,`telefono`=? ,`curso`=?, `division`=? WHERE `ndni` = ?');
    $query->execute([$NDNI,$Nombre,$Direccion,$Telefono,$Curso,$Division,$NDNIEditar]);
        
    }

    public function getEstudiante($NDNI){
        $query = $this->db->prepare('SELECT * FROM estudiantes WHERE ndni = ?');
        $query->execute([$NDNI]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
  

    public function getEstudiantelIKE($NDNI){
        $query = $this->db->prepare('SELECT * FROM estudiantes WHERE ndni LIKE ?');
        $query->execute(["%${NDNI}%"]);

        $estudiante = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $estudiante;
        
    }

}

