<?php /*<footer class="footer">
    <div class="container content">
    <p class="float-end mb-0 back-to-top"><a href="#">Back to top</a></p>
    <p class="company-copyright mb-0">&copy; 2015–2022 Company, Inc.</p>
    </div>
</footer> */?>
<?= view(COMMON_VIEW . '/popup-msg') ?>

    <script type="text/javascript">
        let BASE_URL = "<?=base_url();?>"
        let CURRENT_URL = "<?=current_url();?>"
    </script>
    <script src="<?= base_url(COMMON_ASSETS.'/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url(COMMON_ASSETS.'/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url(COMMON_ASSETS.'/js/common.js') ?>"></script>
    <script src="<?= base_url(DASHBOARD_ASSETS.'/js/dashboard.js') ?>"></script>
</body>
</html>