<aside>

    <?php $anunciante = get_info_anunciante(); ?>

    <div class="sidebar-box">
        <div class="user">
            <figure>
                <img width="100" src="<?php echo base_url('uploads/usuarios/small/' . $anunciante->user_foto); ?>"
                    alt="">
            </figure>
            <div class="usercontent">
                <h3><?php echo $anunciante->first_name .' '. $anunciante->last_name; ?></h3>
                <h4>Anunciante</h4>
            </div>
        </div>
        <nav class="navdashboard">
            <ul>
                <li>
                    <a href="<?php echo base_url('conta'); ?>">
                        <i class="lni-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('conta/perfil/'); ?>">
                        <i class="lni-cog"></i>
                        <span>Gerenciar Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="account-myads.html">
                        <i class="lni-layers"></i>
                        <span>My Ads</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="lni-envelope"></i>
                        <span>Offers/Messages</span>
                    </a>
                </li>
                <li>
                    <a href="payments.html">
                        <i class="lni-wallet"></i>
                        <span>Payments</span>
                    </a>
                </li>
                <li>
                    <a href="account-favourite-ads.html">
                        <i class="lni-heart"></i>
                        <span>My Favourites</span>
                    </a>
                </li>
                <li>
                    <a href="account-profile-setting.html">
                        <i class="lni-star"></i>
                        <span>Privacy Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="lni-enter"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>