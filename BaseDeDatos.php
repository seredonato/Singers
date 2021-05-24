<?php

class BaseDeDatos
{
    private $host;
    private $bdd;
    private $usuario;
    private $pass;
    private $conexion;

    public function __construct()
    {
        $this->host = "localhost:3306";
        $this->bdd = "singersdonatoserena";
        $this->usuario = "root";
        $this->pass = "";

        $this->conexion = new mysqli($this->host, $this->usuario, $this->pass, $this->bdd);
    }

    public function comprobarConexion()
    {
        if ($this->conexion->connect_error) {
            $resultado = "No se pudo conectar";
            echo "No se pudo conectar";
        } else {
            $resultado = "Te conectaste correctamente";
            echo "Te conectaste correctamente";
        }
        return $resultado;
    }

    public function devolverCantantes()
    {
        $sql = "select * from Cantante";
        $query_result = $this->ejecutarConsulta($sql);

        $result = array();
        while ($fila = $query_result->fetch_assoc()) {
            $result[] = $fila;
        }
        return $result;
    }

    public function ejecutarConsulta($sql)
    {
        $queryn = $this->conexion->query($sql);
        return $queryn;
    }
}