<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//renderisa la vista de index de estudiantes
class Jugadores extends CI_Controller {
	//definiendo el constructor
public function __construct()

  {
	parent::__construct();
	$this->load->model("jugador");
	/*$this->load->model("asignatura");
	$this->load->model("matricula");*/
  }
 public function index()
	{
 	$data["listadoJugadores"]=$this->jugador->obtenerTodos();
	$this->load->view('header');
	$this->load->view('jugadores/index',$data);
	$this->load->view('footer');
	}
//renderiza la vista nuevo de estudiantes
 public function nuevo()
  {
   $this->load->view('header');
   $this->load->view('jugadores/nuevo');
   $this->load->view('footer');
  }
  public function guardarJugador(){ //
  $datosNuevoJugador=array
  (
  "cedula_jug"=>$this->input->post('cedula_jug'),
  "apellido_jug"=>$this->input->post('apellido_jug'),
  "nombre_jug"=>$this->input->post('nombre_jug'),
  "posicion_jug"=>$this->input->post('posicion_jug'),
  "telefono_jug"=>$this->input->post('telefono_jug'),
  "direccion_jug"=>$this->input->post('direccion_jug'),
  "fecha_nacimiento_jug"=>$this->input->post('fecha_nacimiento_jug')

  );
   print_r($datosNuevoJugador);
   if ($this->jugador->insertar($datosNuevoJugador)){
     redirect('jugadores/index');
   }else{
     echo "<h1>error</h1>";
   }
   }
}
