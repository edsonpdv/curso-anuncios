<?php $this->load->view('web/layout/navbar'); ?>

<section class="login section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="login-form login-area">
                    <h3>
                        Faça o Login
                    </h3>

                    <?php if($message = $this->session->flashdata('erro')): ?>
                    <div class="alert alert-danger bg-danger alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="fas fa-exclamation-circle"></i></div>

                        <div class="alert-body" style="color: white !important">
                            <div class="alert-title"></div>
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            <?php echo $message; ?>
                        </div>
                    </div>
                    <?php endif;?>


                    <form role="form" class="login-form" action="<?php echo base_url('login/auth'); ?>" method="POST">
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="lni-user"></i>
                                <input type="text" id="sender-email" class="form-control" name="email"
                                    placeholder="Seu e-mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="lni-lock"></i>
                                <input type="password" name="password" class="form-control" placeholder="Sua senha">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="checkedall">
                                <label class="custom-control-label" for="checkedall">Manter Logado</label>
                            </div>
                            <a class="forgetpassword" href="<?php echo base_url('register'); ?>">Não tem uma conta?</a>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-common log-btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>