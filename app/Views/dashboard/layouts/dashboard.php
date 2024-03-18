<!DOCTYPE html>
<html lang="en">

<head>
    <?= view(DASHBOARD_VIEW.'/components/head') ?>
</head>

<body class="sb-nav-fixed">

    <?= view(DASHBOARD_VIEW.'/components/topnav') ?>

    <div id="layoutSidenav">
        <?= view(DASHBOARD_VIEW.'/components/leftsidebar') ?>
        <div id="layoutSidenav_content">
            <main>
                <?= $this->renderSection("content"); ?>
            </main>
            <?= view(DASHBOARD_VIEW.'/components/footer-dashboard') ?>
            
        </div>
    </div>

    <div class="add-edit-form">
        <div class="add-edit-form-wrapper">
            
        </div>
    </div>

    <?= view(COMMON_VIEW . '/popup-msg') ?>
    <script>
        let baseURL = "<?= base_url()?>"
        let dashboardURL = "<?= base_url('dashboard')?>"
    </script>
    <script src="<?= base_url(COMMON_ASSETS."/js/bootstrap.min.js")?>" crossorigin="anonymous"></script>
    <script src="<?= base_url(COMMON_ASSETS."/js/jquery.min.js") ?>"></script>
    <script src="<?= base_url(COMMON_ASSETS."/js/common.js") ?>"></script>
    <script src="<?= base_url(DASHBOARD_ASSETS."/js/dashboard.js") ?>"></script>
</body>

</html>