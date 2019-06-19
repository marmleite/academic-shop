	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model');
		$this->load->model('produtos_model');
		$this->load->helper('url_helper');
	}
	
	public function produtos()
	{
		if(!$this->session->has_userdata('id'))
		{
			
			redirect('login/index','refresh');
			
		}else{
			$data['id_usuario'] = $this->session->has_userdata('id');
			$data['produtos'] = $this->produtos_model->get_produtos_usuario($data['id_usuario']);
			$this->load->view('templates/header', $data);
			$this->load->view('produtos/index', $data);
			$this->load->view('templates/footer');
		}
	}
	

	public function view($id = null)
	{
		if ($id === NULL) 
		{
			show_404();
		}

		$data['usuario'] = $this->usuarios_model->buscar($id);
		$data['id_usuario'] = $data['usuario']['id'];
		$this->load->view('templates/header', $data);
		$this->load->view('usuarios/view', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function cadastrar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		if ($this->form_validation->run() === FALSE )
		{
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
			
		}
		else if (!$this->usuarios_model->cadastrar())
		{
			$this->form_validation->set_message('erro', 'Não foi possível fazer o cadatro!');
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
		else
		{
			redirect('produtos/index');
		}
	}
	
}
