<div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <?php
                    $active='';
                    if(isset($parent) && $parent=='dashboard'){
                        $active='active';
                    }else if(isset($page) && $page=='dashboard'){
                        $active='active';
                    }
                    ?>
                    <a class="nav-link <?=$active?>" href="<?=base_url("admin/dashboard")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

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

                    
                    <?php /* 
                    <a class="nav-link <?=$type==1?'active':''?>" href="<?=base_url("/crm/visitor-visa")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Visitor Visa
                    </a>
                    <a class="nav-link <?=$type==2?'active':''?>" href="<?=base_url("/crm/study-visa")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Study Visa
                    </a>
                    <a class="nav-link <?=$type==3?'active':''?>" href="<?=base_url("/crm/work-visa")?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Work Visa
                    </a> 
                    */ ?>
                </div>
            </div>
            <?php /*<div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>*/ ?>
        </nav>
    </div>