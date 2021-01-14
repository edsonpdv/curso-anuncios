<?php $this->load->view('restrita/layout/navbar'); ?>
<?php $this->load->view('restrita/layout/sidebar'); ?>
  

      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          	<div class="row">
          	  <div class="col-12">
          	    <div class="card">
          	      <div class="card-header d-block">
          	         <h4><?php echo $titulo; ?></h4> 
                     <a data-toggle="tooltip" data-placement="top" title="cadastrar" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/core/'); ?>" class="btn btn-sm btn-primary badge-shadow mr-2 float-right">Cadastrar</a>
          	      </div>
          	      <div class="card-body">

					<!-- Mensagem de sucesso para o usuario-->

                    <?php if($message = $this->session->flashdata('sucesso')): ?>
                      <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="fas fa-check-circle"></i></div>

                        <div class="alert-body">
                          <div class="alert-title"> Muito bem!</div>
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <?php echo $message; ?>
                        </div>
                      </div>
                    <?php endif;?>

                    <!-- Mensagem de alerta para o usuario-->

                    <?php if($message = $this->session->flashdata('erro')): ?>
                      <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>

                        <div class="alert-body">
                          <div class="alert-title"> Atenção!</div>
                          <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                          </button>
                          <?php echo $message; ?>
                        </div>
                      </div>
                    <?php endif;?>

          	        <div class="table-responsive">
          	          <table class="table table-striped data-table">
          	            <thead>
          	              <tr>
                            <th>#</th>
                            <th>Nome da Categoria</th>
                            <th>Categoria Principal</th>
                            <th>Meta link da categoria</th>
                            <th>Status</th>
                            <th class="nosort">Ação</th> <!-- nosort classe definida no assets/js/page/datatables.js para eliminar as setas de ordenação na tabela--> 
          	              </tr>
          	            </thead>
          	            <tbody>
          	              <?php foreach ($categorias as $categoria): ?>
          	              	<tr>
          	              		<td><?php echo $categoria->categoria_id; ?></td>
          	              		<td><?php echo $categoria->categoria_nome; ?></td>
          	              		<td><?php echo $categoria->categoria_pai_nome; ?></td>
          	              		<td><?php echo $categoria->categoria_meta_link; ?></td>


          	              		<td><?php echo ($categoria->categoria_ativa == 1 ? 
                                '<span class="badge badge-success badge-shadow">Ativo</span>' : '<span class="badge badge-danger badge-shadow">Inativo</span>'); ?></td>
                            <td>
                              <a data-toggle="tooltip" data-placement="top" title="Editar usuário" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/core/' . $categoria->categoria_id); ?>" class="btn btn-sm btn-icon btn-primary badge-shadow mr-2">
                                <i class="far fa-edit"></i>&nbsp;&nbsp;Editar</a>

                              <a data-toggle="tooltip" data-placement="top" title="Excluir usuário" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/delete/' . $categoria->categoria_id); ?>" 
                              class="btn btn-sm btn-icon btn-danger badge-shadow delete" data-confirm="Tem certeza da exclusão?"><i class="fas fa-times"></i>&nbsp;&nbsp;Excluir</a>
                            </td>  
          	             <?php endforeach; ?> 
          	              
          	            </tbody>
          	          </table>
          	        </div>
          	      </div>
          	    </div>
          	  </div>
          	</div>
          </div>
        </section>

      </div>
     