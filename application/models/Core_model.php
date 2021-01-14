<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Core_model extends CI_Model {

	public function get_all($tabela = NULL, $condicoes = NULL, $limite = NULL) {
		
		if ($tabela && $this->db->table_exists($tabela)) { // Estamos verificando se veio a tabela "if $tabela"  e se a tabela existe... 
			
			// se a condição for verdadeira cairá no if

			if (is_array($condicoes)) {  // verificando se a variável $condicoes veio e se ela é um array
				$this->db->where($condicoes); // se for verdadeiro 
			}

			//verificando se o $limite veio 

			if ($limite) { // se a minha variavel limite veio
				$this->db->limit($limite); // daremos um limit para ver se ela veio. Se não veio retorna tudo 
			}

			$this->db->order_by(1, 'DESC'); // Para cada vez que for renderizada a tabela, sempre fará pelo ID decrescentemente (do maior para o menor)

			return $this->db->get($tabela)->result(); //dando retorno com array de objeto
		} else {
			return false; 
		}

		/*
		Criamos um metodo chamado get_all que receberá como parâmetro uma tabela, uma variável de condições e um limite.
		Aqui verificamos se a tabela veio e se ela existe no banco de dados, se for verdadeira ela cairá dentro do if para verificar se condições foi passado
		no parâmetro. Se veio passado, ele tem que ser um array e se ele for um array e fará um This DB Where trazendo os dados de acordo com as $condicoes

		Também verificamos se veio o $limite que não é obrigatorio, por isso colocamos o NULL 
		Se não veio o $limite ele retorna tudo, se veio o $limite ele retorna de acordo com o que foi passado na variavel $limite 
		 */
	}

	public function get_by_id($tabela = NULL, $condicoes = NULL) { // De acordo com alguma condição, nesse caso o array sempre estará vindo
		if ($tabela && $this->db->table_exists($tabela) && is_array($condicoes)) {
			
				$this->db->where($condicoes);
				$this->db->limit(1);
			
			return $this->db->get($tabela)->row(); 
		} else {
			return false;
		}

		/*
	
		Criamos um método chamado get_by_id que recebe uma tabela e um array de condições e faz a seguinte verificação:
		1 - Se veio a $tabela e (&&)   
		2 - a tabela existe no banco de dados e (&&)
		3 - a variável $condicoes é um array então você pode executar o restante para mim 

	 	*/

	}
	
	public function insert($tabela = NULL, $data = NULL, $get_last_id = NULL) {
		if ($tabela && $this->db->table_exists($tabela) && is_array($data)) {

			$this->db->insert($tabela, $data);

			/*
			
			Se get_last_id veio como parâmetro, então será inserido na sessão o ultimo ID criado no banco de dados da $tabela

			 */
			
			if ($get_last_id) {
				$this->session->set_userdata('last_id', $this->db->insert_id());
			}

			if ($this->db->affected_rows() > 0) { // se o número de linhas afetadas por essa ação de inserção for maior que zero significa que obtivemos a inserção
				$this->session->set_flashdata('sucesso', 'Dados salvos com sucesso!'); //printamos na sessão a mensagem de sucesso  
			} else {
				$this->session->set_flashdata('erro', 'Não foi possível salvar os dados'); // se caiu no else não foi criado novo ususrio e então printamos na sessão a mensagem de erro
			}
	
		} else {
			return false;
		}		
	} 

	public function update($tabela = NULL, $data = NULL, $condicoes = NULL) {
		if ($tabela && $this->db->table_exists($tabela) && is_array($data) && is_array($condicoes)) {

			if($this->db->update($tabela, $data, $condicoes)) { //verificação para verificar se foi atualizado
				$this->session->set_flashdata('sucesso', 'Dados atualizados com sucesso!');
			}else{
				$this->session->set_flashdata('erro', 'Não foi possível atualizar os dados');
			}

			}else{
			return false;
		}

	}

	public function delete($tabela = NULL, $condicoes = NULL) {
		if ($tabela && $this->db->table_exists($tabela) && is_array($condicoes)) {

			if($this->db->delete($tabela, $condicoes)) {
				$this->session->set_flashdata('sucesso', 'Registro excluído com sucesso!');
			}else{
				$this->session->set_flashdata('erro', 'Não foi possível excluir o registro');
			}

		}else{
			return false;
		}
	}

	public function generate_unique_code($tabela = NULL, $tipo_codigo = NULL, $tamanho_codigo = NULL, $campo_procura = NULL) {

		do{

			$codigo = random_string($tipo_codigo, $tamanho_codigo);
			$this->db->where($campo_procura, $codigo);	
			$this->db->from($tabela);

		} while ($this->db->count_all_results() >= 1);

		return $codigo;
	}


	public function count_all_results($tabela = NULL, $condicoes = NULL) {

		if ($tabela && $this->db->table_exists($tabela)) {

			if (is_array($condicoes)) {
				$this->db->where($condicoes);
			}

			return $this->db->count_all_results($tabela); 

			} else {
			return false;
		}

	}


}