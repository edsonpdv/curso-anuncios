 
 <?php if($this->router->fetch_class() != 'login'): ?>

    <footer class="main-footer">
     <div class="footer-left">
         <a href="templateshub.net">Templateshub</a></a>
     </div>
     <div class="footer-right">
     </div>
 </footer>
 
 <?php endif; ?> <!--Só exibir o footer se o controlador (fetch_class) for diferente de login-->


 </div>
 </div>
 <!-- General JS Scripts -->
 <script src="<?php echo base_url('public/restrita/assets/js/app.min.js'); ?>"></script>
 <!-- JS Libraies -->
 <!-- Page Specific JS File -->
 <!-- Template JS File -->
 <script src="<?php echo base_url('public/restrita/assets/js/scripts.js'); ?>"></script>
 <!-- Custom JS File -->
 <script src="<?php echo base_url('public/restrita/assets/js/custom.js'); ?> "></script>

 <script src="<?php echo base_url('public/restrita/assets/js/util.js'); ?> "></script>

 <script src="<?php echo base_url('public/restrita/assets/bootbox/bootbox.min.js'); ?> "></script>


 <?php if (isset($scripts)): ?>
 <!--Se existe uma variavel Scripts na pasta restrita, ele faz a busca e printa na tela tudo que tem nesse array-->
 <?php foreach ($scripts as $script): ?>
 <!-- Carregamento de estilo dinamicamente-->
 <script src="<?php echo base_url('public/restrita/' . $script); ?>"></script>
 <?php endforeach; ?>
 <?php endif; ?>

 <script>
    $('.delete').on("click", function(event) {

      event.preventDefault();

      var redirect = $(this).attr('href');

      bootbox.confirm({
        title: $(this).attr('data-confirm'),
        centerVertical: true,
        message: "<p class='text-danger'>Esta ação não poderá ser desfeita</p>",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancelar'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirmar'
            }
        },
        callback: function(result) {

            if (result) {

                window.location.href = redirect;

            }
        }
      });
    });
  </script>




 </body>


 <!-- blank.html  21 Nov 2019 03:54:41 GMT -->

 </html>