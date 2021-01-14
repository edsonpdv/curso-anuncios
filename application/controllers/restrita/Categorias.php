<?php

// Controller responsável por gerenciar as sub-categorias 

defined('BASEPATH') OR exit('Ação não permitida');

class Categorias extends CI_Controller {

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

        $this->load->model('categorias_model');

		
	}

	public function index() {

		$data = array( // carregar do DB na tabela usuarios

            'titulo' => 'Sub-Categorias Cadastradas',
            

			'styles' => array(
				'assets/bundles/datatables/datatables.min.css',
				'assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
			),

			'scripts' => array(
				'assets/bundles/datatables/datatables.min.js',
				'assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
				'assets/bundles/jquery-ui/jquery-ui.min.js',
				'assets/js/page/datatables.js'

			),

			'categorias' => $this->categorias_model->get_all_categorias(),

		);

		// Debugar para ver se está trazendo as informações do banco de dados

		//echo '<pre>';
		//print_r($data['masters']);
		//exit();


		$this->load->view('restrita/layout/header', $data);
		$this->load->view('restrita/categorias/index');
		$this->load->view('restrita/layout/footer');
    }

    public function core($categoria_id = NULL) {

        $categoria_id = (int) $categoria_id;

        if(!$categoria_id) { 

            // cadastrando nova categoria pai

                $this->form_validation->set_rules('categoria_nome', 'Nome da categoria', 'trim|required|min_length[3]|max_length[45]|callback_valida_nome_categoria');
                $this->form_validation->set_rules('categoria_pai_id', 'Categoria Principal', 'trim|required');

                if($this->form_validation->run()) {
                
                    //Sucesso... formulario foi validado, salvamos no banco de dados 
                        
                    
                    $data = elements(

						array(

							'categoria_nome',
							'categoria_pai_id',
                            'categoria_ativa',	                            
						), $this->input->post()
                    );
                    
                    /**
                     * Preparando o meta link da categoria
                     */

                    $data['categoria_meta_link'] = url_amigavel($data['categoria_nome']);
                    $data = html_escape($data);

                    //echo '<pre>';
                    //print_r($data);
                    //exit();


                    $this->core_model->insert('categorias', $data);
                    redirect('restrita/' . $this->router->fetch_class());

                } else {

                    /**
                     * Erro de validação
                     */

                    $data = array( // carregar do DB na tabela usuarios

                        'titulo' => 'Cadastrar Sub-Categorias',  
                        'styles' => array(
                            'assets/bundles/select2/dist/css/select2.min.css',
                        ),
            
                        'scripts' => array(
                            'assets/bundles/select2/dist/js/select2.full.min.js',                                        
                        ),


                        'masters' => $this->core_model->get_all('categorias_pai', array('categoria_pai_ativa' => 1))  
                    );
            
                    // Debugar para ver se está trazendo as informações do banco de dados
            
                    //echo '<pre>';
                    //print_r($data['categoria']);
                    //exit();
            
            
                    $this->load->view('restrita/layout/header', $data);
                    $this->load->view('restrita/categorias/core');
                    $this->load->view('restrita/layout/footer');
                }
        
            
        } else {

            //categoria foi informada, contudo, devemos garantir a sua existencia na base de dados.

            if(!$categoria = $this->core_model->get_by_id('categorias', array('categoria_id' => $categoria_id))) {
                $this->session->set_flashdata('erro', 'Categoria não encontrada');
                redirect('restrita/' . $this->router->fetch_class());

            } else {
                /**
                 * Maravilha... categoria foi encontrada para as validações
                 */

                $this->form_validation->set_rules('categoria_nome', 'Nome da categoria', 'trim|required|min_length[3]|max_length[45]|callback_valida_nome_categoria');
                $this->form_validation->set_rules('categoria_pai_id', 'Categoria Principal', 'trim|required');

                if($this->form_validation->run()) {
                
                    //Sucesso... formulario foi validado, salvamos no banco de dados 
                        
                    
                    $data = elements(

						array(

							'categoria_nome',
							'categoria_pai_id',
                            'categoria_ativa',	
                            
						), $this->input->post()
                    );
                    
                    /**
                     * Preparando o meta link da categoria
                     */

                    $data['categoria_meta_link'] = url_amigavel($data['categoria_nome']);
                    $data = html_escape($data);

                    //echo '<pre>';
                    //print_r($data);
                    //exit();


                    $this->core_model->update('categorias', $data, array('categoria_id' => $categoria->categoria_id));
                    redirect('restrita/' . $this->router->fetch_class());

                } else {

                    /**
                     * Erro de validação
                     */

                    $data = array( // carregar do DB na tabela usuarios

                        'titulo' => 'Editar Sub-Categorias',  
                        'styles' => array(
                            'assets/bundles/select2/dist/css/select2.min.css',
                        ),
            
                        'scripts' => array(
                            'assets/bundles/select2/dist/js/select2.full.min.js',                                        
                        ),                        
                        'categoria' => $categoria,
                        'masters' => $this->core_model->get_all('categorias_pai', array('categoria_pai_ativa' => 1))
            
                    );
            
                    // Debugar para ver se está trazendo as informações do banco de dados
            
                    //echo '<pre>';
                    //print_r($data['categoria']);
                    //exit();
            
            
                    $this->load->view('restrita/layout/header', $data);
                    $this->load->view('restrita/categorias/core');
                    $this->load->view('restrita/layout/footer');
                }

            }


        }

		
    }

    public function valida_nome_categoria($categoria_nome) {

        $categoria_id = $this->input->post('categoria_id');

        if (!$categoria_id) {
           
            /**
             * Cadastrando
             */

            if($this->core_model->get_by_id('categorias', array('categoria_nome' => $categoria_nome))) {

                $this->form_validation->set_message('valida_nome_categoria', 'Esta categoria já existe');
                return false;

            } else {

                return true;

            }


        } else {

            /**
             * Editando
             */
            if($this->core_model->get_by_id('categorias', array('categoria_nome' => $categoria_nome, 'categoria_id !=' => $categoria_id))) {

                $this->form_validation->set_message('valida_nome_categoria', 'Esta categoria já existe');
                return false;

            } else {

                return true;

            }

        }

    }

    public function delete($categoria_id = NULL) {

        $categoria_id = (int) $categoria_id;

        if(!$categoria_id || !$categoria = $this->core_model->get_by_id('categorias', array('categoria_id' => $categoria_id))) {
            $this->session->set_flashdata('erro', 'Categoria não encontrada');
            redirect('restrita/' . $this->router->fetch_class());
        }

        if($categoria->categoria_ativa == 1) {
            $this->session->set_flashdata('erro', 'Não é permitido excluir uma categoria ativa');
            redirect('restrita/' . $this->router->fetch_class());
        }

        $this->core_model->delete('categorias', array('categoria_id' => $categoria->categoria_id));
        redirect('restrita/' . $this->router->fetch_class());

    } 

}
