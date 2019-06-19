<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_produtos($id = null)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('produto');
			return $query->result();
		}
		$query = $this->db->get_where('produto', array('id' => $id));
		return $query->row_array();
	}

	public function get_produtos_usuario($id = null)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('produto');
			return $query->result();
		}
		$query = $this->db->get_where('produto', array('id_usuario' => $id));
		return $query->row_array();
	}

	public function cadastrar($id_usuario)
	{
		$data = array(
			'detalhes' => $this->input->post('detalhes'),
			'estado' => $this->input->post('estado'),
			'id_categoria' => $this->input->post('categoria'),
			'id_usuario' => $id_usuario,
		);
		return ($this->db->insert('produto', $data))  ? $this->db->insert_id() : false;
	}
	
}

?>
