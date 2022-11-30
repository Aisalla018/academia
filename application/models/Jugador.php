<?php
class Jugador extends CI_model
{
    function __construct()
    {
    parent::__construct();
    }
    public function insertar($datos){
    return $this->db->insert("jugador",$datos);
    // // return $this->db->insert("matricula",$datos);
    // // return $this->db->insert("colegio",$datos);
    // // return $this->db->insert("asignatura",$datos);
    }
    //consulta de estudiantes en la base de datos si hay o no hay estudiantes
  public function obtenerTodos(){
    $jugadores=$this->db->get("jugador");
    if ($jugadores->num_rows()>0) {
      return $jugadores;
    } else {
      return false;
    }
    }
  }
