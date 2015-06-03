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
	public function index()
	{
		$this->load->view('index');
	}

	public function ambiental()
	{
		$this->load->view('ambiental');
	}
	public function ambActividades()
	{
		$this->load->view('agenda_actividades');
	}
	public function ambResiduos(){
		$this->load->view('manejo_residuos');
	}
	public function ambEcotecnias(){
		$this->load->view('ecotecnias');
	}
	public function ambAgregaActividades(){
		$this->load->view('actividades');
	}
	public function ambAgregaTaller(){
		$this->load->view('taller');
	}
	public function ambAgregarEcotecnia(){
		$this->load->view('agregarEcotecnias');
	}
}
