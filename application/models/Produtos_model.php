<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_produtos($id = null)
	{
		if ($id === NULL)
		{
			$query = $this->db->get('produto');
			return $query->result_array();
		}
		$query = $this->db->join('categoria', 'categoria.id = produto.id_categoria', 'inner');
		$query = $this->db->join('usuario', 'usuario.id = produto.id_usuario', 'inner');
		$query = $this->db->get_where('produto', array('produto.id' => $id));
		
		return $query->row_array();
	}

	public function get_produtos_categoria($id = null)
	{
		$query = $this->db->join('categoria', 'categoria.id = produto.id_categoria', 'inner');
		$query = $this->db->join('usuario', 'usuario.id = produto.id_usuario', 'inner');
		$query = $this->db->get_where('produto', array('id_categoria' => $id));
		return $query->result_array();
	}

	public function get_produtos_usuario($id = null)
	{
		$query = $this->db->join('categoria', 'categoria.id = produto.id_categoria', 'inner');
		$query = $this->db->join('usuario', 'usuario.id = produto.id_usuario', 'inner');
		$query = $this->db->get_where('produto', array('id_usuario' => $id));
		return $query->result_array();
	}

	public function cadastrar($id_usuario)
	{
		$data = array(
			'detalhes' => $this->input->post('detalhes'),
			'estado' => $this->input->post('estado'),
			'valor' => $this->input->post('valor'),
			'imagem' => $this->input->post('imagem'),
			'id_categoria' => $this->input->post('categoria'),
			'id_usuario' => $id_usuario,
		);
		return ($this->db->insert('produto', $data))  ? $this->db->insert_id() : false;
	}
	
}

?>
