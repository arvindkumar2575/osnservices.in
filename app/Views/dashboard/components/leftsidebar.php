<div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <?php
                    $active='';$q_active='';$s_active='';
                    if((isset($parent) && $parent=='dashboard') || (isset($page) && $page=='dashboard')){
                        $active='active';
                    }
                    if(str_contains(current_url(), 'dashboard/queries')){
                        $q_active='active';
                    }
                    if(str_contains(current_url(), 'dashboard/subscribe')){
                        $s_active='active';
                    }
                    ?>
                    <a class="nav-link <?=$active?>" href="<?=base_url("dashboard")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <li class="left-nav-padding-1rem">
                        <a class="nav-link <?=$q_active?>" href="<?=base_url("dashboard/queries")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Queries
                        </a>
                        <a class="nav-link <?=$s_active?>" href="<?=base_url("dashboard/subscribe")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Subscribe
                        </a>

                    </li>


                    <?php
                    if(ADMIN_PANEL){
                    $active='';$u_active="";$p_active="";$m_active="";$c_active="";
                    if((isset($parent) && $parent=='admin') || (isset($page) && $page=='admin')){
                        $active='active';
                    }
                    if(str_contains(current_url(), 'admin/users')){
                        $u_active='active';
                    }
                    if(str_contains(current_url(), 'admin/pages')){
                        $p_active='active';
                    }
                    if(str_contains(current_url(), 'admin/media')){
                        $m_active='active';
                    }
                    if(str_contains(current_url(), 'admin/component')){
                        $c_active='active';
                    }
                    ?>
                    <a class="nav-link <?=$active?>" href="<?=base_url("/admin")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Admin
                    </a>
                    <li class="left-nav-padding-1rem">
                        <a class="nav-link <?=$u_active?>" href="<?=base_url("admin/users")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Users
                        </a>
                        <a class="nav-link <?=$p_active?>" href="<?=base_url("admin/pages")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Pages
                        </a>
                        <a class="nav-link <?=$m_active?>" href="<?=base_url("admin/media")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Media
                        </a>
                        <a class="nav-link <?=$c_active?>" href="<?=base_url("admin/components")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Components
                        </a>

                    </li>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>