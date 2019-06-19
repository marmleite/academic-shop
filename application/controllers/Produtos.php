	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('produtos_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		
		
	}
	
	public function index()
	{
		if(!$this->session->has_userdata('id'))
		{
			
			redirect('login/index','refresh');
			
		}else{
			$data['id_usuario'] = $this->session->has_userdata('id');
			$data['produtos'] = $this->produtos_model->get_produtos();
			$this->load->view('templates/header', $data);
			$this->load->view('produtos/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function novo()
	{
		if(!$this->session->has_userdata('id'))
		{
			
			redirect('login/index','refresh');
			
		}else{
			$data['id_usuario'] = $this->session->has_userdata('id');
			$this->load->view('templates/header', $data);
			$this->load->view('produtos/novo');
			$this->load->view('templates/footer');
		}
	}
	

	public function view($id = null)
	{
		if(!$this->session->has_userdata('id') || $id === NULL)
		{
			
			redirect('login/index','refresh');
			
		}else{

			$data['produto'] = $this->produtos_model->get_produtos($id);
			$data['id_usuario'] = $this->session->has_userdata('id');

			$this->load->view('templates/header', $data);
			$this->load->view('produtos/view', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function cadastrar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('detalhes', 'Detalhes', 'required');
		$this->form_validation->set_rules('valor', 'Valor', 'required');
		$this->form_validation->set_rules('categoria', 'Categoria', 'required');

		if ($this->form_validation->run() === FALSE )
		{
			$data['id_usuario'] = $this->session->has_userdata('id');
			$this->load->view('templates/header', $data);
			$this->load->view('produtos/novo');
			$this->load->view('templates/footer');
			
		}
		else
		{	
			$id_usuario = $this->session->has_userdata('id');
			$id_produto = $this->produtos_model->cadastrar($id_usuario);
			if($id_produto != NULL)
			{
				$this->view($id_produto);
			}
			else
			{
				$this->index();
			}
		}
	}
	
}
