
	
	<?php $this->load->view('restrita/layout/navbar'); ?>
	<?php $this->load->view('restrita/layout/sidebar'); ?>
  

      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <h3>Home da área restrita</h3>

            <?php 
            
            echo '<pre>';
            print_r($this->session->userdata());
            echo '</pre>';
            
            ?>


          </div>
        </section>
      </div>
     