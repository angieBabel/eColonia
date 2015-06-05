<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_eColonia extends CI_Model{
  function __construct(){
    parent::__construct();
  }

//Alta de actividades de los tipos de eventos
  public function altaActEvento($nombre,$representante,
    $horario,$fecha,$lugar,$descripcion,$ecobonos,$galeria){
    $this->db->set('nombre',$nombre)
            ->set('descripcion',$descripcion)
            ->set('responsable',$representante)
            ->set('fecha_Inicio',$fecha)
            ->set('lugar',$lugar)
            ->set('eco-bonos',$ecobonos)
            ->set('galeria_idGaleria')
            ->insert('evento');
  }

  public function altaActTaller($nombre,$encargado,$instructor,$hora,
    $fecha,$lugar,$costo,$descripcion,$ecobonos,$galeria){
    $this->db->set('nombre',$nombre)
            ->set('descripcion',$descripcion)
            ->set('responsable',$representante)
            ->set('fecha_Inicio',$fecha)
            ->set('lugar',$lugar)
            ->set('eco-bonos',$ecobonos)
            ->set('galeria_idGaleria')
            ->insert('evento');

  }

  public function altaActEctoecnia(){

  }

//obtención de las actividades de la base de datos
  public function get_actividadesEvento(){
    return $this->db->from('evento')
                ->get()
                ->result_array();
  }

  public function get_actividadesTaller(){
    return $this->db->from('taller')
                ->get()
                ->result_array();
  }

  public function get_actividadesEcotecnias(){
     return $this->db->from('ecotecnia')
                  ->get()
                  ->result_array();
  }

//Agregar nueva ecotecnia
  public function altaEcotecnia($nombre,$descripcion,$modouso,$imagen){
  $this->db->set('nombre',$nombre)
           ->set('descripcion',$descripcion)
           ->set('modouso',$modouso)
           ->set('imagen',$imagen)
           ->insert('catalogo-ecotecnia');
  }
//Agregar espacio para galeria
  public function agregarGaleria(){
    $this->db->set('fecha',date("Y-m-d"))
              ->insert('galeria');
    return $this->db->insert_id();
  }


}
