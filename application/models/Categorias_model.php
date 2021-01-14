<?php

// Controller responsável por gerenciar as sub-categorias 

defined('BASEPATH') OR exit('Ação não permitida');

class Categorias_model extends CI_Model {

    public function get_all_categorias() {

        $this->db->select([

            'categorias.*', //quando colocamos o asterístico estamos dizendo que queremos que venha tudo 
            'categorias_pai.categoria_pai_nome', //  aqui estamos dizendo que queremos apenas categoria_pai_nome 

        ]);

        $this->db->join('categorias_pai', 'categorias_pai.categoria_pai_id = categorias.categoria_pai_id');

        $this->db->order_by('categorias.categoria_id', 'DESC');

        return $this->db->get('categorias')->result();

    }

}

