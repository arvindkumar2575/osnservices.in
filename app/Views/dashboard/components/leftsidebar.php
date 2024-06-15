<div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <?php
                    $active='';$q_active='';
                    if((isset($parent) && $parent=='dashboard') || (isset($page) && $page=='dashboard')){
                        $active='active';
                    }
                    if(str_contains(current_url(), 'dashboard/queries')){
                        $q_active='active';
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

                    </li>


                    <?php
                    $active='';
                    if(isset($parent) && $parent=='admin'){
                        $active='active';
                    }else if(isset($page) && $page=='admin'){
                        $active='active';
                    }
                    ?>
                    <a class="nav-link <?=$active?>" href="<?=base_url("/admin")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Admin
                    </a>
                </div>
            </div>
        </nav>
    </div>