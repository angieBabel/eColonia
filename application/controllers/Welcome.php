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
		$this->load->view('index');

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
	public function ambEcotecnias(){ //Ver caracteristicas de ecotecnias
		$data = array(
			'eco'=>$this->m_eColonia->get_Ecotecnias()
			);
		$this->load->view('ecotecnias',$data);
	}

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
	public function ambAgregarEcotecnia(){ //Agregar una nueva ecotecnia
		$this->load->view('agregarEcotecnia');
	}
	public function ambAgregarCategoria(){ // Agregar una categoria nueva de residuos solidos
		$this->load->view('categoriaResiduos');
	}
	public function ambgeneraReportes(){ // Generar reportes
		$this->load->view('generaReporte');
	}
//ACtualizaciones
	public function ambactualizarActividad(){
		$data = array(
					'eventos'=>$this->m_eColonia->get_actividadesEvento(),
				);
			$this->load->view('actualizarActividad',$data);
	}
	public function ambactualizarEcotecnia(){
		$data = array(
					'ecotecnias'=>$this->m_eColonia->get_actividadesEcotecnias(),
				);
			$this->load->view('actualizarActividadEcotecnia',$data);
	}
	public function ambDatosRS(){
		$this->load->view('agregarDatosRS');
	}
	public function ambInstructor(){
		$this->load->view('agregaInstructor');
	}
	public function ambReportes(){
		$this->load->view('reportes');
	}
}
