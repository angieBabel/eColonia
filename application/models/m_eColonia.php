<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_eColonia extends CI_Model{
  function __construct(){
    parent::__construct();
  }
//Validar usuario
  /*public function validarUsuario($user,$pass){
        $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $this->db->where('password',$pass);
        $query=$this->db->get('colono');
        return $query->result_array();
  }*/
  public function validarUsuario($cuenta,$clave){
    $this->db->where('email',$cuenta);
    $this->db->where('password',$clave);
    $query=$this->db->get('colono');
    return $query->result_array();
   }
  /*public function validarUsuarioAdmon($user,$pass){
        $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $this->db->where('password',$pass);
        $query=$this->db->get('admon');
        return $query->result_array();
  }*/


//Alta de actividades de los tipos de eventos
  public function altaActEvento($nombre,$representante,
    $horario,$fecha,$lugar,$descripcion,$ecobonos,$galeria){
    $this->db->set('nombre',$nombre)
            ->set('descripcion',$descripcion)
            ->set('responsable',$representante)
            ->set('fecha_Inicio',$fecha)
            ->set('lugar',$lugar)
            ->set('horario',$horario)
            ->set('eco-bonos',$ecobonos)
            ->set('galeria_idGaleria',$galeria)
            ->insert('evento');
  }

  public function altaActTaller($nombre,$encargado,$instructor,$lugar,
    $ecobonos,$hora,$fecha_inicio,$fecha_fin,$cupo,$costo,$descripcion,$material,$galeria,$estado){
    $this->db->set('nombre',$nombre)
             ->set('descripcion',$descripcion)
             ->set('material',$material)
             ->set('responsable',$encargado)
             ->set('fecha-inicio',$fecha_inicio)
             ->set('fecha-fin',$fecha_fin)
             ->set('horario',$hora)
             ->set('lugar',$lugar)
             ->set('eco-bonos',$ecobonos)
             ->set('cupo',$cupo)
             ->set('cuota',$costo)
             ->set('estado',$estado)
             ->set('galeria_idGaleria',$galeria)
             ->insert('taller');


  }

  public function altaActEctoecnia($nombre,$encargado,$lugar,
    $ecobonos,$ecotecnia,$hora,$fecha_inicio,$fecha_fin,$cupo,$descripcion,$galeria,$estado){
    $this->db->set('nombre',$nombre)
              ->set('responsable',$encargado)
              ->set('lugar',$lugar)
              ->set('eco-bonos',$ecobonos)
              ->set('idEcotecnia',$ecotecnia)
              ->set('horario',$hora)
              ->set('fecha-inicio',$fecha_inicio)
              ->set('fecha-fin',$fecha_fin)
              ->set('cupo',$cupo)
              ->set('estado',$estado)
              ->set('descripcion',$descripcion)
              ->set('galeria_idGaleria',$galeria)
              ->insert('ecotecnia');
  }
  public function altaInstructor($nombre,$profesion){
    $this->db->set('nombre',$nombre)
              ->set('profesion',$profesion)
              ->insert('instructor');
  }

  public function altaNuevoResiduo($nombre,$descripcion){
    $this->db->set('nombre',$nombre)
              ->set('descripcion',$descripcion)
              ->insert('catalogo-residuos');
  }

  public function altaDatoResiduo($id,$fecha,$PET,$Vidrio,$PapelYCarton){
    $this->db->set('Residuos_idResiduos',$id)
             ->set('periodo',$fecha)
             ->set('Catalogo-residuos_idResiduo',1)
             ->set('cantidad',$PET)
             ->insert('residuos_has_catalogo-residuos');

    $this->db->set('Residuos_idResiduos',$id)
             ->set('periodo',$fecha)
             ->set('Catalogo-residuos_idResiduo',2)
             ->set('cantidad',$Vidrio)
             ->insert('residuos_has_catalogo-residuos');

    $this->db->set('Residuos_idResiduos',$id+1)
             ->set('periodo',$fecha)
             ->set('Catalogo-residuos_idResiduo',3)
             ->set('cantidad',$PapelYCarton)
             ->insert('residuos_has_catalogo-residuos');
  }

//obtención de datos de la base de datos (actividades y catálogos)
  public function get_actividadesEvento(){
    return $this->db->from('evento')
                ->get()
                ->result_array();
  }
  public function get_Evento($id){
    return $this->db->from('evento')
                ->where('idEvento',$id)
                ->get()
                ->result_array();
  }


  public function get_actividadesTaller(){
    return $this->db->from('taller')
                ->get()
                ->result_array();
  }
  public function get_Taller($id){
    return $this->db->from('taller')
                ->where('idTaller',$id)
                ->get()
                ->result_array();
  }

  public function get_actividadesEcotecnias(){
     return $this->db->from('ecotecnia')
                  ->get()
                  ->result_array();
  }
  public function get_Ecotecnias(){
     return $this->db->from('catalogo-ecotecnia')
                  ->get()
                  ->result_array();
  }
  public function get_Ecotecnia($id){
    return $this->db->from('ecotecnia')
                ->where('idActividad',$id)
                ->get()
                ->result_array();
  }

//Obtener instructores y residuos del catalogo

  public function getInstructor(){
    return $this->db->from('instructor')
                ->get()
                ->result_array();
  }

  public function getColono(){
    return $this->db->from('colono')
                ->get()
                ->result_array();
  }

  public function get_Residuos(){
    return $this->db->select ('*')
                ->from('residuos_has_catalogo-residuos AS R-CR')
                ->join('catalogo-residuos as CR', 'R-CR.Catalogo-residuos_idResiduo = CR.idResiduo')
                ->get()
                ->result_array();
  }

  public function get_ResiduosActuales(){
    return $this->db->select ('*')
                ->from('residuos_has_catalogo-residuos AS R-CR')
                ->join('catalogo-residuos as CR', 'R-CR.Catalogo-residuos_idResiduo = CR.idResiduo')
                ->order_by('Residuos_idResiduos','desc')
                ->limit(3)
                ->get()
                ->result_array();
  }

  public function get_ResiduosMes($mes){
    return $this->db->select ('*')
                ->from('residuos_has_catalogo-residuos AS R-CR')
                ->join('catalogo-residuos as CR', 'R-CR.Catalogo-residuos_idResiduo = CR.idResiduo')
                ->where ('month(periodo)',$mes)
                ->get()
                ->result_array();
  }

  public function get_CatalogoResiduos(){
    return $this->db->select('*')
                ->from('catalogo-residuos')
                ->get()
                ->result_array();
  }

//Agregar nueva ecotecnia
  public function altaEcotecnia($nombre,$ubicacion,$descripcion,$modouso,$add){
  $this->db->set('nombre',$nombre)
           ->set('ubicacion',$ubicacion)
           ->set('descripcion',$descripcion)
           ->set('modouso',$modouso)
           ->set('imagen',$add)
           ->insert('catalogo-ecotecnia');
  }
//Agregar espacio para galeria
  public function agregarGaleria(){
    $this->db->set('fecha',date("Y-m-d"))
              ->insert('galeria');
    return $this->db->insert_id();
  }
//eliminar actividades de eventos y ecotecnia
  public function eliminaEvento($evento){
    $this->db->where('idEvento',$evento)
             ->delete('evento');
  }

  public function eliminaEventoEcotecnia($evento){
    $this->db->where('idActividad',$evento)
             ->delete('ecotecnia');
  }

  public function eliminaEventoTaller($evento){
    $this->db->where('idTaller',$evento)
             ->delete('taller');
  }
//Actualizar datos de tablas
  public function cambiaEstdo($datosEvento,$datosTaller,$datosEcotecnia){
    foreach ($datosEvento as $evento) {
      $this->db->set('estado','Finalizado')
                ->where('idEvento',$evento[0])
                ->update('evento');
    }
    foreach ($datosTaller as $taller) {
      $this->db->set('estado','Finalizado')
                ->where('idTaller',$taller[0])
                ->update('taller');
    }
    foreach ($datosEcotecnia as $ecotecnia) {
      $this->db->set('estado','Finalizado')
                ->where('idActividad',$ecotecnia[0])
                ->update('ecotecnia');
    }

  }
  public function actualizaEvento($id,$nombre,$representante,
      $horario,$fecha,$lugar,$descripcion,$ecobonos,$estado){
      $this->db->set('nombre',$nombre)
              ->set('descripcion',$descripcion)
              ->set('responsable',$representante)
              ->set('fecha_Inicio',$fecha)
              ->set('lugar',$lugar)
              ->set('horario',$horario)
              ->set('eco-bonos',$ecobonos)
              ->set('estado',$estado)
              ->where('idEvento',$id)
              ->update('evento');
  }

  public function actualizaTaller($id,$nombre,$encargado,$instructor,$lugar,
    $ecobonos,$hora,$fecha_inicio,$fecha_fin,$cupo,$costo,$descripcion,$material,$estado){
    $this->db->set('nombre',$nombre)
             ->set('descripcion',$descripcion)
             ->set('materiales',$material)
             ->set('responsable',$encargado)
             ->set('fecha-inicio',$fecha_inicio)
             ->set('fecha-fin',$fecha_fin)
             ->set('horario',$hora)
             ->set('lugar',$lugar)
             ->set('eco-bonos',$ecobonos)
             ->set('cupo',$cupo)
             ->set('cuota',$costo)
             ->set('estado',$estado)
             ->where('idTaller',$id)
             ->update('taller');
    }

  public function actualizaEcotecnia($id,$nombre,$encargado,$lugar,
      $ecobonos,$ecotecnias,$hora,$fecha_inicio,$fecha_fin,$cupo,$descripcion,$estado){
    $this->db->set('nombre',$nombre)
              ->set('responsable',$encargado)
              ->set('lugar',$lugar)
              ->set('eco-bonos',$ecobonos)
              ->set('idEcotecnia',$ecotecnia)
              ->set('horario',$hora)
              ->set('fecha-inicio',$fecha_inicio)
              ->set('fecha-fin',$fecha_fin)
              ->set('cupo',$cupo)
              ->set('estado',$estado)
              ->set('descripcion',$descripcion)
              ->where('idActividad',$id)
              ->update('ecotecnia');
    }

}
