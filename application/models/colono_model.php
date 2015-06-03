<?php 
class Colono_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function inserta_colono($Casa,$ApellidoPaterno,$ApellidoMaterno,$FechaNacimiento,$Estatura,$Nombre,$Peso,$Email,$Sexo,$Tel_celular){
		$this->db->set('Casa',$Casa)
				 ->set('ApellidoPaterno',$ApellidoPaterno)
				 ->set('ApellidoMaterno',$ApellidoMaterno)
				 ->set('FechaNacimiento',$FechaNacimiento)
				 ->set('Estatura',$Estatura)
				 ->set('Nombre',$Nombre)
				 ->set('Peso',$Peso)
				 ->set('Email',$Email)
				 ->set('Sexo',$Sexo)
				 ->set('Tel_celular',$Tel_celular)
				 ->insert('colono');
		return $this->db->insert_id();
	}
  
    public function inserta_peticion($Asunto,$Contenido,$Ubicacion,$FechaElab,$Colono,$Categoria){
		$this->db->set('Asunto',$Asunto)
				 ->set('Texto',$Contenido)
				 ->set('Ubicacion',$Ubicacion)
				 ->set('FechaElab',$FechaElab)
				 ->set('IdColono',$Colono)
				 ->set('IdCategoria',$Categoria)
				 ->insert('peticion');
	}

	public function inserta_oficio($Asunto,$Descripcion,$Estado,$FechaEnvio,$FechaResp,$IDComite,$IDDependencia){
		$this->db->set('Asunto',$Asunto)
				 ->set('Descripcion',$Descripcion)
				 ->set('Estado',$Estado)
				 ->set('FechaEnvio',$FechaEnvio)
				 ->set('FechaResp',$FechaResp)
				 ->set('IdComite',$IDComite)
				 ->set('IDDependencia',$IDDependencia)
				 ->insert('oficio');
	}

	public function inserta_dependencia($nombre,$autoridad){
		$this->db->set('Nombre',$nombre)
				 ->set('IDAutoridad',$autoridad)
				 ->insert('dependencia');
	}

	public function inserta_categoria($nombre,$autoridad){
		$this->db->set('Nombre',$nombre)
				 ->insert('categoria');
	}

	public function obtiene_id($Email,$Tel_celular) {
		return $this->db->like('Email',$Email)
						->like('Tel_celular',$Tel_celular)
						->get('colono')
						->row();
	}

	public function get_miembros($casa){
		return $this->db->where('Casa',$casa)
						->from('colono')
						->get()
						->result();
	}
  
    public function get_categorias(){
		return $this->db->from('categoria')
						->get()
						->result();
	}
  
    public function get_peticiones($id_colono){
		return $this->db->select('peticion.Folio as Folio, peticion.Asunto as Asunto, peticion.FechaElab as Elab, 
                                peticion.FechaAten as Aten, categoria.Nombre as Categoria')
						->from('peticion')
                        ->join('categoria','peticion.IdCategoria = categoria.iD')
						->where('IdColono',$id_colono)
                        ->get()
						->result();
	}
  
   public function get_peticionesadmin(){
		return $this->db->select('peticion.Folio as Folio, peticion.Asunto as Asunto, peticion.FechaElab as Elab, 
                                peticion.FechaAten as Aten, categoria.Nombre as Categoria, peticion.IdColono as Colono')
						->from('peticion')
                        ->join('categoria','peticion.IdCategoria = categoria.iD')
                        ->get()
						->result();
	}
  
    public function get_all_oficiosadmin(){
		return $this->db->select ('oficio.Folio as Folio, oficio.asunto as Asunto, oficio.descripcion as Descripcion, 
			oficio.estado as Estado, oficio.FechaEnvio as FechaEnvio, oficio.FechaResp as FechaResp, oficio.IdComite as IdComite,
			oficio.IdDependencia as IDDependencia')
						->from('oficio')
						->join ('comitedebarrio_has_colono','comitedebarrio_has_colono.comitedebarrio_Id = oficio.IdComite')
						->get()
						->result();
    }
	
	public function get_all_peticiones($id_colono){
		return $this->db->select ('peticion.Folio as Folio, peticion.Asunto as Asunto, peticion.FechaElab as Elab,
			   						peticion.FechaAten as Aten, categoria.Nombre as Categoria, colono.Nombre as Colono')
						->from('peticion')
						->join ('categoria','categoria.ID = peticion.IdCategoria')
						->join ('colono','peticion.IdColono = colono.Id')
						->join ('casa','colono.casa = casa.Id')
						->join ('colonia','colonia.Id = casa.colonia')
						->join ('comitedebarrio','comitedebarrio.Id = colonia.Id')
						->join ('comitedebarrio_has_colono','comitedebarrio_has_colono.comitedebarrio_Id = comitedebarrio.Id')
						//->where('colonia.Id','comitedebarrio.colonia')
						->where('comitedebarrio_has_colono.colono_Id',$id_colono)
						->where('comitedebarrio_has_colono.Puesto','Presidente')
						->get()
						->result();
	}
  
	public function get_all_oficios($id_colono){
		return $this->db->select ('oficio.Folio as Folio, oficio.asunto as Asunto, oficio.descripcion as Descripcion, 
			oficio.estado as Estado, oficio.FechaEnvio as FechaEnvio, oficio.FechaResp as FechaResp, oficio.IdComite as IdComite,
			oficio.IdDependencia as IDDependencia')
						->from('oficio')
						->join ('comitedebarrio_has_colono','comitedebarrio_has_colono.comitedebarrio_Id = oficio.IdComite')
						->where('comitedebarrio_has_colono.colono_Id',$id_colono)
						->get()
						->result();
    }



public function get_id_comite($id_colono){
		return $this->db->select ('comitedebarrio_has_colono.comitedebarrio_Id as comitedebarrio_Id')
						->from('comitedebarrio_has_colono')
						->where('comitedebarrio_has_colono.colono_Id',$id_colono)
						->get()
						->result_array();
	}
}