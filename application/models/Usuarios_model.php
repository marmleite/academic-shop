<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function buscar($id = null)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('usuario');
			return $query->result();
		}
		$query = $this->db->get_where('usuario', array('id' => $id));
		return $query->row_array();
	}

	public function autenticar()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha')
		);
	
		$query = $this->db->get_where('usuario', $data);
		return $query->row_array();
	}	

	public function cadastrar()
	{
		$data = array(
			'nome' => $this->input->post('nome'),
			'email' => $this->input->post('email'),
			'telefone' => $this->input->post('telefone'),
			'senha' => $this->input->post('senha'),
		);
		return ($this->db->insert('usuario', $data))  ?   $this->db->insert_id()  :   false;
	}
}

?>
