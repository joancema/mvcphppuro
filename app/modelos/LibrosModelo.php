<?php

class LibrosModelo
{
    private $db;
    function __construct()
    {
        $this->db = new MySQLdb();
    }

    public function getLibros()
    {
        $data = $this->db->querySelect("select * from libros");
        return $data;
    }
    public function getLibro($id)
    {
        $data = $this->db->querySelect("select * from libros where id=".$id);
        return $data;
    }
    public function insertarLibros($titulo, $autor, $editorial)
    {
        $sql = "insert into libros(id,titulo, autor, editorial) ";
        $sql.= "values(0,";
        $sql.= "'". $titulo ."',";
        $sql.= "'". $autor ."',";
        $sql.= "'". $editorial ."')";
        if ($this->db->queryNoSelect($sql))
        {
            /////// luego abría que invocar nuevamente al controlador
        }
        else
        {
            exit('No se pudo insertar el libro');
        }
    }
    public function modificarLibros( $id ,$titulo, $autor, $editorial)
    {
        //update libros set
        // titulo='$titulo', autor='$autor', editorial='$editorial' where id=$id
        $sql = "update libros set ";
        $sql.= "titulo = '". $titulo ."',";
        $sql.= "autor = '". $autor ."',";
        $sql.= "editorial = '". $editorial ."' ";
        $sql.= " where id=".$id;
        if ($this->db->queryNoSelect($sql))
        {
            /////// luego abría que invocar nuevamente al controlador
        }
        else
        {
            exit('No se pudo modificar el libro');
        }

    }
    public function borrarLibro($id)
    {
        $sql="delete from libros where id=".$id;
        if ($this->db->queryNoSelect($sql))
        {
            /////// luego abría que invocar nuevamente al controlador
        }
        else
        {
            exit('No se pudo eliminar el libro');
        }
    }




}




?>