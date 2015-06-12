<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
		/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
	public function index(){ //Pagina principal
		$this->load->view('login');

	}
//Muestra las funciones pricnipales, SOLO VISTAS
	public function login(){
		$this->load->view('login');
	}

	public function ambiental(){ //Cargar pagina principal de Ambiental
		$this->load->view('ambiental');
	}
	public function ambActividades(){//Ver agenda de actividades
			$data = array(
					'eventos'=>$this->m_eColonia->get_actividadesEvento(),
					'talleres'=>$this->m_eColonia->get_actividadesTaller(),
					'ecotecnias'=>$this->m_eColonia->get_actividadesEcotecnias(),
				);
      $this->load->view('agenda_actividades',$data);
	}
	public function ambResiduos(){ //Ver tablas de residuos solidos
		$data = array(
			'datos_actuales'=>$this->m_eColonia->get_ResiduosActuales(),
			'datos_historial'=>$this->m_eColonia->get_Residuos()
			);
		$this->load->view('manejo_residuos',$data);
	}
	public function ambgeneraReportes(){ // Generar reportes
		$this->load->view('generaReporte');
	}
	public function ambEcotecnias(){ //Ver caracteristicas de ecotecnias
		$data = array(
			'eco'=>$this->m_eColonia->get_Ecotecnias()
			);
		$this->load->view('ecotecnias',$data);
	}
//Agregar eventos
	public function ambAgregaEvento(){ //Agregar un nuevo evento
		$data = array(
			'colonos'=>$this->m_eColonia->getColono()
			);
		$this->load->view('actividades',$data);
	}
	public function ambAgregaTaller(){ //Agregar un taller nuevo
		$data = array(
			'instructores'=>$this->m_eColonia->getInstructor(),
			'colonos'=>$this->m_eColonia->getColono()
			);
		$this->load->view('taller',$data);
	}
	public function ambAgregarActEcotecnia(){ //Agregar una nueva actividad que incluya ecotecnias
		$data = array(
			'eco'=>$this->m_eColonia->get_Ecotecnias(),
			'colonos'=>$this->m_eColonia->getColono()
			);
		$this->load->view('actividadesEcotecnias',$data);
	}
//Agregar ecotecnias, categrias, instructor, categoria de residuos
	public function ambAgregarEcotecnia(){ //Agregar una nueva ecotecnia
		$this->load->view('agregarEcotecnia');
	}
	public function ambAgregarCategoria(){ // Agregar una categoria nueva de residuos solidos
		$this->load->view('categoriaResiduos');
	}
	public function ambInstructor(){
		$this->load->view('agregaInstructor');
	}

//ACtualizaciones
	public function amblistaActividad(){
		$data = array(
					'eventos'=>$this->m_eColonia->get_actividadesEvento(),
				);
			$this->load->view('listaEvento',$data);
	}
	/*public function ambactualizarEcotecnia(){
		$data = array(
					'ecotecnias'=>$this->m_eColonia->get_actividadesEcotecnias(),
				);
			$this->load->view('actualizarActividadEcotecnia',$data);
	}*/
	public function amblistaTaller(){
		$data = array(
					'talleres'=>$this->m_eColonia->get_actividadesTaller(),
					'ecotecnias'=>$this->m_eColonia->get_actividadesEcotecnias(),
				);
			$this->load->view('listaTaller',$data);
	}
//otras funciones
	public function ambDatosRS(){
		$data = array(
			'catalogo'=>$this->m_eColonia->get_CatalogoResiduos()
			);
		$this->load->view('agregarDatosRS',$data);
	}

	public function ambReportes(){
		$mes = $_GET['id'];
		$data = array(
			'datos_historial'=>$this->m_eColonia->get_ResiduosMes($mes)
			);
		$this->load->view('reportes',$data);
	}

	public function ambfinalizarActividad(){
		$data = array(
					'eventos'=>$this->m_eColonia->get_actividadesEvento(),
					'talleres'=>$this->m_eColonia->get_actividadesTaller(),
					'ecotecnias'=>$this->m_eColonia->get_actividadesEcotecnias(),
				);
		$this->load->view('statusActividades',$data);
	}

function validaSesion()
	{
		if ($this->session->userdata('email') != '') {
            return true;
        }
        else {
            return false;
        }
	}

	function cierraSesion()
	{
		$this->session->sess_destroy();
		redirect('welcome/ambiental');
	}

	function descripcionEventos(){
		 $id = $_GET['id'];
    $datos_evento=$this->m_eColonia->get_Evento($id);
    $datos['evento']=$datos_evento[0];

    $this->load->view('descripcionEventos',$datos);
		//$this->load->view('descripcionEventos');
	}
}
