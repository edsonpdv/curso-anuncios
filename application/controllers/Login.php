<?php

// Controller responsável pelo login na área restrita

defined('BASEPATH') OR exit('Ação não permitida');

class Login extends CI_Controller {

	

	public function index() {

		$data = array (

			'titulo' => 'Login na área pública',

		);

		$this->load->view('web/layout/header', $data);
		$this->load->view('web/login/index');
		$this->load->view('web/layout/footer');

	}

	public function auth() {

	
		/*
		*[email] => raimundagabriellycosta@ynail.com.br
    	*[password] => 12345678
    	*[remember] => on
		*/


		$identity = $this->input->post('email');
    	$password = $this->input->post('password');
    	$remember = ($this->input->post('remember' ? TRUE : FALSE));
		
		if($this->ion_auth->login($identity, $password, $remember)) {

			// Só permitiremos que um administrador faça login na área restrita

			if($this->ion_auth->is_admin()) {
				redirect('restrita');
			} else {

				redirect('/');

			}

		} else {

			/**
			 * Erro de login
			 */

			$this->session->set_flashdata('erro', 'Login ou senha inválido');
			redirect($this->router->fetch_class());

		}

	}

	public function logout() {

		$this->ion_auth->logout();
		redirect($this->router->fetch_class());
	}
	
}
