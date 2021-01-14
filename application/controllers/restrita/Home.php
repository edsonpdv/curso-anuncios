<?php

// Controller responsável pela Home da área restrita do projeto

defined('BASEPATH') OR exit('Ação não permitida');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		/**
         * Definir se há sessão válida
         */

        if (!$this->ion_auth->logged_in()) {
			redirect('restrita/login');
		} 
  
		  /**
		   * Definir se é admin 
		   * Se não for, será redirecionado para a parte pública
		   */
  
		if (!$this->ion_auth->is_admin()) {
			redirect('/');
		}

	}

	public function index() {

		$this->load->view('restrita/layout/header');
		$this->load->view('restrita/home/index');
		$this->load->view('restrita/layout/footer');

	}
	
}
