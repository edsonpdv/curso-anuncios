<?php $this->load->view('restrita/layout/navbar'); ?>
<?php $this->load->view('restrita/layout/sidebar'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="post" name="form_core" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4><?php echo $titulo; ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Nome</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-user text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="first_name"
                                                value="<?php echo (isset($usuario) ? $usuario->first_name : set_value('first_name')); ?>">
                                        </div>
                                        <?php echo form_error('first_name', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Sobrenome</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-user text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="last_name"
                                                value="<?php echo (isset($usuario) ? $usuario->last_name : set_value('last_name')); ?>">
                                        </div>
                                        <?php echo form_error('last_name', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>E-mail</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-envelope text-info"></i>
                                                </div>
                                            </div>
                                            <input type="email" class="form-control" name="email"
                                                value="<?php echo (isset($usuario) ? $usuario->email : set_value('email')); ?>">
                                        </div>
                                        <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Celular</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-mobile-alt text-info"></i>
                                                </div>
                                            </div>
                                            <input type="phone" class="form-control sp_celphones" name="phone"
                                                value="<?php echo (isset($usuario) ? $usuario->phone : set_value('phone')); ?>">
                                        </div>
                                        <?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>CPF</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-id-card text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control cpf" name="user_cpf"
                                                value="<?php echo (isset($usuario) ? $usuario->user_cpf : set_value('user_cpf')); ?>">
                                        </div>
                                        <?php echo form_error('user_cpf', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>CEP</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i
                                                        class="fas fa-map-marker-alt text-info"></i> 
                                                </div>
                                            </div>
                                            <input type="text" class="form-control cep" name="user_cep"
                                                value="<?php echo (isset($usuario) ? $usuario->user_cep : set_value('user_cep')); ?>">
                                        </div>
                                        <?php echo form_error('user_cep', '<div class="text-danger">', '</div>'); ?>
                                        <div id="user_cep"></div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Endereço</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-road text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="user_endereco"
                                                value="<?php echo (isset($usuario) ? $usuario->user_endereco : set_value('user_endereco')); ?>" readonly="">
                                        </div>
                                        <?php echo form_error('user_endereco', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Número</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i
                                                        class="fas fa-street-view text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="user_numero_endereco"
                                                value="<?php echo (isset($usuario) ? $usuario->user_numero_endereco : set_value('user_numero_endereco')); ?>">
                                        </div>
                                        <?php echo form_error('user_numero_endereco', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Cidade</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i
                                                        class="fas fa-location-arrow text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="user_cidade"
                                                value="<?php echo (isset($usuario) ? $usuario->user_cidade : set_value('user_cidade')); ?>" readonly="">
                                        </div>
                                        <?php echo form_error('user_cidade', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Bairro</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i
                                                        class="fas fa-directions text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="user_bairro"
                                                value="<?php echo (isset($usuario) ? $usuario->user_bairro : set_value('user_bairro')); ?>" readonly="">
                                        </div>
                                        <?php echo form_error('user_bairro', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-map text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control uf" name="user_estado"
                                                value="<?php echo (isset($usuario) ? $usuario->user_estado : set_value('user_estado')); ?>" readonly="">
                                        </div>
                                        <?php echo form_error('user_estado', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Ativo</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i
                                                        class="fas fa-check-circle text-info"></i>
                                                </div>
                                            </div>

                                            <select class="custom-select" name="active">

                                                <?php if(isset($usuario)): ?>

                                                <option value="0"
                                                    <?php echo ($usuario->active == 0 ? 'selected' : ''); ?>>Não
                                                </option>
                                                <option value="1"
                                                    <?php echo ($usuario->active == 1 ? 'selected' : ''); ?>>Sim
                                                </option>

                                                <?php else: ?>

                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                                <?php endif; ?>

                                            </select>
                                        </div>
                                        <?php echo form_error('active', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Perfil de acesso</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-user-tie text-info"></i>
                                                </div>
                                            </div>

                                            <select class="custom-select" name="perfil">

                                                <?php foreach ($grupos as $grupo): ?>
                                                <?php if(isset($usuario)): ?>

                                                <option value="<?php echo $grupo->id; ?>"
                                                    <?php echo ($grupo->id == $perfil->id ? 'selected' : ''); ?>>
                                                    <?php echo $grupo->name; ?></option>
                                                <?php else: ?>

                                                <option value="<?php echo $grupo->id; ?>"> <?php echo $grupo->name; ?>
                                                </option>

                                                <?php endif; ?>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <?php if (isset($usuario)): ?>
                                        <input type="hidden" name="usuario_id" value="<?php echo $usuario->id; ?>">
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Senha</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-lock text-info"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Confirmar senha</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-lock text-info"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" name="confirma_senha">
                                        </div>
                                        <?php echo form_error('confirma_senha', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    
                                </div>

                                <div class="form-row">
                                
                                    <div class="form-group col-md-4">
                                        <label>Foto do perfil</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-image text-info"></i>
                                                </div>
                                            </div>
                                            <input type="file" class="form-control" name="user_foto_file">
                                        </div>
                                        <?php echo form_error('user_foto_file', '<div class="text-danger">', '</div>'); ?>
                                        <div id="user_foto"></div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <?php if (isset($usuario)): ?>
                                        <div id="box-foto-usuario">
                                            <input type="hidden" name="user_foto" value="<?php echo $usuario->user_foto; ?>">
                                            <img width="100" alt="Imagem Usuário"
                                                src="<?php echo base_url('uploads/usuarios/small/' .$usuario->user_foto); ?>"
                                                class="rounded-circle">
                                        </div>

                                        <?php else: ?>
                                        <div id="box-foto-usuario">
                                        </div>
                                        <?php endif; ?>

                                        <?php if (isset($usuario)): ?>    

                                            <input type="hidden" name="usuario_id" value="<?php echo $usuario->id; ?>">

                                        <?php endif; ?>

                                    </div>
                                
                                </div>

                            </div>

                            <!-- Botões Salvar e Voltar -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                                <a class="btn btn-warning"
                                    href="<?php echo base_url('restrita/' . $this->router->fetch_class()); ?>">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>