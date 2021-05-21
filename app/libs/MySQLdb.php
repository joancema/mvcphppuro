<?php

class MySQLdb{

    private $host="localhost";
    private $usuario= "root";
    private $clave ="";
    private $db="mvc";
    private $puerto="";
    private $conn;

    function __construct()
    {
        $this->conn= mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);
        if (mysqli_connect_errno())
        {
                printf ("Error en la conexiOn de la base de datos: %s", mysql_connect_errno() );
                exit();
        }
        mysqli_set_charset($this->conn,"utf8");
    }
    public function querySelect($sql)
    {
        //select
        $data= array();
        $r = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($r))
        {
          array_push($data, $row);  
        }
        return $data;

    }
    public function queryNoSelect($sql)
    {
        //insert update delete
        //begin transaction
        //rollback
        //commit
        return $this->conn->query($sql);
    }



}


?>