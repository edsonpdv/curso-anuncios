<?php $this->load->view('web/layout/navbar'); ?>

<div id="content" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">

                <?php $this->load->view('web/conta/sidebar'); ?>

            </div>
            <div class="col-sm-12 col-md-8 col-lg-9">
                <div class="row page-content">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title"><?php echo $titulo; ?></h2>
                            </div>
                            <div class="dashboard-wrapper">
                                <div class="login-form login-area">

                                    <form role="form" class="login-form" method="POST"
                                        action="<?php echo base_url('conta/perfil'); ?>">

                                        <?php if($message = $this->session->flashdata('sucesso')): ?>
                                        <div class="alert alert-success bg-success text-white alert-has-icon alert-dismissible show fade">
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
                                        <div class="alert alert-danger bg-danger text-white alert-has-icon alert-dismissible show fade">
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
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <div class="input-icon">
                                                    <i class="lni-user"></i>
                                                    <input type="text" class="form-control" name="first_name"
                                                        placeholder="Nome"
                                                        value="<?php echo (isset($usuario) ? $usuario->first_name : set_value('first_name')); ?>">
                                                </div>
                                                <?php echo form_error('first_name', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-7">
                                                <div class="input-icon">
                                                    <i class="lni-user"></i>
                                                    <input type="text" class="form-control" name="last_name"
                                                        placeholder="Sobrenome"
                                                        value="<?php echo (isset($usuario) ? $usuario->last_name : set_value('last_name')); ?>">
                                                </div>
                                                <?php echo form_error('last_name', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <div class="input-icon">
                                                    <i class="lni-envelope"></i>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="E-mail"
                                                        value="<?php echo (isset($usuario) ? $usuario->email : set_value('email')); ?>">
                                                </div>
                                                <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <div class="input-icon">
                                                    <i class="lni-phone"></i>
                                                    <input type="phone" class="form-control sp_celphones" name="phone"
                                                        placeholder="Celular"
                                                        value="<?php echo (isset($usuario) ? $usuario->phone : set_value('phone')); ?>">
                                                </div>
                                                <?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <div class="input-icon">
                                                    <i class="lni-pencil-alt"></i>
                                                    <input type="text" class="form-control cpf" name="user_cpf"
                                                        placeholder="CPF"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_cpf : set_value('user_cpf')); ?>">
                                                </div>
                                                <?php echo form_error('user_cpf', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <div class="input-icon">
                                                    <i class="lni-pin"></i>
                                                    <input type="text" class="form-control cep" name="user_cep"
                                                        placeholder="CEP"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_cep : set_value('user_cep')); ?>">
                                                </div>
                                                <?php echo form_error('user_cep', '<div class="text-danger">', '</div>'); ?>
                                                <div id="user_cep"></div>
                                            </div>

                                            <div class="form-group col-md-7">
                                                <div class="input-icon">
                                                    <i class="lni-map"></i>
                                                    <input type="text" class="form-control" name="user_endereco"
                                                        placeholder="Endereço"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_endereco : set_value('user_endereco')); ?>"
                                                        readonly="">
                                                </div>
                                                <?php echo form_error('user_endereco', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <div class="input-icon">
                                                    <i class="lni-map-marker"></i>
                                                    <input type="text" class="form-control" name="user_numero_endereco"
                                                        placeholder="Número"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_numero_endereco : set_value('user_numero_endereco')); ?>">
                                                </div>
                                                <?php echo form_error('user_numero_endereco', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <div class="input-icon">
                                                    <i class="lni-map-marker"></i>
                                                    <input type="text" class="form-control" name="user_bairro"
                                                        placeholder="Bairro"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_bairro : set_value('user_bairro')); ?>"
                                                        readonly="">
                                                </div>
                                                <?php echo form_error('user_bairro', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-5">
                                                <div class="input-icon">
                                                    <i class="lni-map-marker"></i>
                                                    <input type="text" class="form-control" name="user_cidade"
                                                        placeholder="Cidade"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_cidade : set_value('user_cidade')); ?>"
                                                        readonly="">
                                                </div>
                                                <?php echo form_error('user_cidade', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <div class="input-icon">
                                                    <i class="lni-map-marker"></i>
                                                    <input type="text" class="form-control uf" name="user_estado"
                                                        placeholder="UF"
                                                        value="<?php echo (isset($usuario) ? $usuario->user_estado : set_value('user_estado')); ?>"
                                                        readonly="">
                                                </div>
                                                <?php echo form_error('user_estado', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-lock"></i>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-lock"></i>
                                                    <input type="password" class="form-control" name="confirma_senha">
                                                </div>
                                                <?php echo form_error('confirma_senha', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="input-icon">
                                                    <input type="file" class="form-control" name="user_foto_file">
                                                </div>
                                                <?php echo form_error('user_foto_file', '<div class="text-danger">', '</div>'); ?>
                                                <div id="user_foto"></div>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <?php if (isset($usuario)): ?>
                                                <div id="box-foto-usuario">
                                                    <input type="hidden" name="user_foto"
                                                        value="<?php echo $usuario->user_foto; ?>">
                                                    <img width="70" alt="Imagem Usuário"
                                                        src="<?php echo base_url('uploads/usuarios/small/' .$usuario->user_foto); ?>"
                                                        class="rounded-circle">
                                                </div>

                                                <?php else: ?>
                                                <div id="box-foto-usuario">
                                                </div>
                                                <?php endif; ?>

                                                <?php if (isset($usuario)): ?>

                                                <input type="hidden" name="usuario_id"
                                                    value="<?php echo $usuario->id; ?>">

                                                <?php endif; ?>

                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-common log-btn float-left">Salvar</button>
                                        </div><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>