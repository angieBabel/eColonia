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
//inicio de sesion
  public function sesion(){
      $user=$this->input->POST('nombre');
      $pass=$this->input->POST('contrasenia');
      $usuario=$this->m_eColonia->validarUsuario($user,$pass);
      $admon=$this->m_eColonia->validarUsuarioAdmon($user,$pass);
      if (isset($usuario->id)) {
        $_SESSION['logueado']=true;
        echo ($_SESSION['logueado']);
        $this->load->view('index');
      }elseif (isset($admon->idAdmon)) {
       $_SESSION['logueado']=true;
       echo $_SESSION['logueado'];
        $this->load->view('index');
      }else {
        echo "no encontro";

        $this->load->view('index');
    }
  }
//Alta de actividades de las ecotécnias
  public function altaActEvento(){
      $nombre=$this->input->POST('Nombre');
      $representante=$this->input->POST('encargado');
      $horario=$this->input->POST('hora');
      $fecha=$this->input->POST('fecha');
      $lugar=$this->input->POST('lugar');
      $descripcion=$this->input->POST('descripcion');
      $ecobonos=$this->input->POST('ecobonos');
      $galeria= $this->m_eColonia->agregarGaleria();
      $estado=("en espera");

      $this->m_eColonia->altaActEvento($nombre,$representante,
      $horario,$fecha,$lugar,$descripcion,$ecobonos,$galeria,$estado);
     redirect('welcome/ambActividades');
    }

  public function altaActTaller(){
      $nombre=$this->input->POST('Nombre');
      $encargado=$this->input->POST('encargado');
      $instructor=$this->input->POST('instructor');
      $hora=$this->input->POST('hora');
      $ecobonos=$this->input->POST('ecobonos');
      $fecha_inicio=$this->input->POST('fecha_inicio');
      $fecha_fin=$this->input->POST('fecha_fin');
      $lugar=$this->input->POST('lugar');
      $cupo=$this->input->POST('cupo');
      $costo=$this->input->POST('costo');
      $estado=('en espera');
      $descripcion=$this->input->POST('descripcion');
      $galeria= $this->m_eColonia->agregarGaleria();


      $this->m_eColonia->altaActTaller($nombre,$encargado,$instructor,$lugar,
      $ecobonos,$hora,$fecha_inicio,$fecha_fin,$cupo,$costo,$descripcion,$galeria,$estado);

      redirect('welcome/ambActividades');
    }

  public function altaActEcotecnia(){
      $nombre=$this->input->POST('Nombre');
      $encargado=$this->input->POST('encargado');
      $hora=$this->input->POST('hora');
      $ecobonos=$this->input->POST('ecobonos');
      $ecotecnias=$this->input->POST('ecotecnia');
      $fecha_inicio=$this->input->POST('fecha-inicio');
      $fecha_fin=$this->input->POST('fecha-fin');
      $lugar=$this->input->POST('lugar');
      $cupo=$this->input->POST('cupo');
      $estado=('en espera');
      $descripcion=$this->input->POST('descripcion');
      $galeria= $this->m_eColonia->agregarGaleria();


      $this->m_eColonia->altaActEctoecnia($nombre,$encargado,$lugar,
      $ecobonos,$ecotecnias,$hora,$fecha_inicio,$fecha_fin,$cupo,$descripcion,$galeria,$estado);
      redirect('welcome/ambActividades');
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
      redirect('welcome/ambEcotecnias');

    }
  //alta nuevo instructor
  public function altaInstructor(){
      $nombre=$this->input->POST('nombre');
      $profesion=$this->input->POST('profesion');
      $this->m_eColonia->altaInstructor($nombre,$profesion);
      redirect('welcome/ambInstructor');
  }
  //alta nuevo Residuo
  public function altaNuevoResiduo(){
      $nombre=$this->input->POST('nombre');
      $descripcion=$this->input->POST('descripcion');
      $this->m_eColonia->altaNuevoResiduo($nombre,$descripcion);
      redirect('welcome/ambAgregarCategoria');

  }

  //agregar nuevos datos de residuos
  public function agregaDatosRS(){
      $fecha=$this->input->POST('fecha');
      $PET=$this->input->POST('PET');
      $Vidrio=$this->input->POST('Vidrio');
      $PapelYCarton=$this->input->POST('Papel-Carton');
      $data = array(
          'ultimo'=>$this->m_eColonia->get_ResiduosActuales()
        );
      $ultimo=$data['ultimo'][2];
      $id=($ultimo['Residuos_idResiduos']+1);
      $this->m_eColonia->altaDatoResiduo($id,$fecha,$PET,$Vidrio,$PapelYCarton);
      redirect('welcome/ambDatosRS');
  }

//eliminar eventos, talleres o ecotecnias
  public function eliminaEvento(){
    $id = $_GET['id'];
    $this->m_eColonia->eliminaEvento($id);
    redirect('welcome/amblistaActividad');
  }

  public function eliminaEventoEcotecnia(){
    $id = $_GET['id'];
    $this->m_eColonia->eliminaEventoEcotecnia($id);
    redirect('welcome/amblistaTaller');
  }

    public function eliminaEventoTaller(){
    $id = $_GET['id'];
    $this->m_eColonia->eliminaEventoTaller($id);
    redirect('welcome/amblistaTaller');
  }

//Edita eventos, talleres o ecotecnias
  public function cambiaEstado(){
    $datosEvento=$this->input->POST('eventos');
    $datosTaller=$this->input->POST('talleres');
    $datosEcotecnia=$this->input->POST('ecotecnias');
    $this->m_eColonia->cambiaEstdo($datosEvento,$datosTaller,$datosEcotecnia);
    redirect('welcome/ambfinalizarActividad');
  }

}



