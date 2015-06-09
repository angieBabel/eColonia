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
    $data = array(
          'eventos'=>$this->m_eColonia->get_actividadesEvento(),
          'talleres'=>$this->m_eColonia->get_actividadesTaller(),
          'ecotecnias'=>$this->m_eColonia->get_actividadesEcotecnias(),
        );
      $this->load->view('agenda_actividades',$data);
  }

public function altaActTaller(){
   $nombre=$this->input->POST('Nombre');
    $representante=$this->input->POST('encargado');
    $instructor=$this->input->POST('instructor');
    $hora=$this->input->POST('hora');
    $ecobonos=$this->input->POST('ecobonos');
    $ecotecnias=$this->input->POST('ecotecnia')
    $fecha_inicio=$this->input->POST('fecha-inicio');
    $fecha_fin=$this->input->POST('fecha-fin');
    $lugar=$this->input->POST('lugar');
    $descripcion=$this->input->POST('descripcion');
    $galeria= $this->m_eColonia->agregarGaleria();


    $this->m_eColonia->altaActTaller($nombre,$encargado,$encargado,$instructor,$lugar,
    $ecobonos,$ecotecnia,$hora,$fecha_inicio,$fecha_fin,$descripcion,$galeria);
    $this->load->view('welcome/ambTaller');
  }

public function altaActEcotecnia(){
    $nombre=$this->input->POST('Nombre');
    $representante=$this->input->POST('encargado');
    $hora=$this->input->POST('hora');
    $ecobonos=$this->input->POST('ecobonos');
    $ecotecnias=$this->input->POST('ecotecnia')
    $fecha_inicio=$this->input->POST('fecha-inicio');
    $fecha_fin=$this->input->POST('fecha-fin');
    $lugar=$this->input->POST('lugar');
    $descripcion=$this->input->POST('descripcion');
    $galeria= $this->m_eColonia->agregarGaleria();


    $this->m_eColonia->altaEvento($nombre,$encargado,$encargado,$lugar,
    $ecobonos,$ecotecnia,$hora,$fecha_inicio,$fecha_fin,$descripcion);
    $this->load->view('welcome/ambEcotecnia');
  }
//Alta de nueva ecotécnia

public function altaEcotecnia(){
    $config['upload_path'] = './img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

      //$this->load->view('formulario_carga', $error);
    }
    else
    {
      //$data = array('upload_data' => $this->upload->data());
        $data = $this->upload->data();
        $nombre=$this->input->POST('Nombre');
        $ubicacion=$this->input->POST('lugar');
        $descripcion=$this->input->POST('descripcion');
        $modouso=$this->input->POST('uso');
        $imagen=$data['file_name'];
        $add="img/$imagen";
        $this->m_eColonia->altaEcotecnia($nombre,$ubicacion,$descripcion,$modouso,$add);
    }
    $this->load->view('welcome/ambEcotecnias');


  }

}



