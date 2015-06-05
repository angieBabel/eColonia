<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class uploader extends CI_Controller {
    /**
   * Index Page for this controller.
   *ambiental
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
function __construct(){
    parent::__construct();

    $this->load->model('m_eColonia');
  }

//Alta de actividades de las ecotécnias

public function altaActEvento(){
    $nombre=$this->input->POST('Nombre');
    $representante=$this->input->POST('representante');
    $hora=$this->input->POST('hora');
    $fecha=$this->input->POST('fecha');
    $lugar=$this->input->POST('lugar');
    $descripcion=$this->input->POST('descripcion');
    $ecobonos=$this->input->POST('ecobonos');
    $galeria= $this->m_eColonia->agregarGaleria();


    $this->m_eColonia->altaActEvento($nombre,$representante,$hora,$fecha,$lugar,$descripcion,$ecobonos,$galeria);
    $this->load->view('welcome/ambActividades');
  }

public function altaActTaller(){
    $nombre=$this->input->POST('Nombre');
    $encargado=$this->input->POST('encargado');
    $instructor=$this->input->POST('responsable');
    $lugar=$this->input->POST('lugar');
    $ecobonos=$this->input->POST('ecobonos');
    $lugar=$this->input->POST('idEcotecnia');
    $galeria= $this->m_eColonia->agregarGaleria();


    $this->m_eColonia->altaActTaller($nombre,$encargado,$instructor,$hora,$fecha,
      $lugar,$costo,$descripcion,$ecobonos,$galeria);
    $this->load->view('Welcome/ambiental');
  }

public function altaActEcotecnia(){
    $nombre=$this->input->POST('Nombre');
    $representante=$this->input->POST('representante');
    $hora=$this->input->POST('hora');
    $fecha=$this->input->POST('fecha');
    $lugar=$this->input->POST('lugar');
    $descripcion=$this->input->POST('descripcion');
    $ecobonos=$this->input->POST('ecobonos');
    $galeria= $this->m_eColonia->agregarGaleria();


    $this->m_eColonia->altaEvento($nombre,$representante,$hora,$fecha,$lugar,$descripcion,$ecobonos,$galeria);
    $this->load->view('Welcome/ambiental');
  }
//Alta de nueva ecotécnia

public function altaEcotecnia(){
    $nombre=$this->input->POST('Nombre');
    $ubicacion=$this->input->POST('lugar');
    $descripcion=$this->input->POST('descripcion');
    $modouso=$this->input->POST('uso');
    $imagen=$this->input->POST('imagen');

    $this->m_eColonia->altaEvento($nombre,$descripcion,$ubicacion,$modouso,$imagen);
    $this->load->view('Welcome/ambiental');
  }
}
