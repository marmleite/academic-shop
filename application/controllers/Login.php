<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('usuarios_model');
		$this->load->library('session');
	}
	

	public function index()
	{
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function entrar()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$usuario = $this->usuarios_model->autenticar();
		$this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		if ($this->form_validation->run() === FALSE )
		{
			$this->load->view('login');
			$this->load->view('templates/footer');
			
		}
		else if (!empty($usuario))
		{
			$this->session->set_userdata($usuario);
			redirect('produtos/index');
		}
		else
		{
			$this->form_validation->set_message('login', 'E-mail ou senha inválido!');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
	}
}
