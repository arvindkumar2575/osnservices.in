

<?=view(OSN_VIEW_V2.'/components/head')?>

<body>
    <!-- Spinner Start -->
    <?=view(OSN_VIEW_V2.'/components/spinner')?>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?=view(OSN_VIEW_V2.'/components/topbar')?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?=view(OSN_VIEW_V2.'/components/navbar')?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <?=view(OSN_VIEW_V2.'/components/page-header')?>
    <!-- Page Header End -->



    <?= $this->renderSection("content"); ?>




    <!-- Footer Start -->
    <?=view(OSN_VIEW_V2.'/components/footer')?>
    <!-- Footer End -->


    <?=view(OSN_VIEW_V2.'/components/back-to-top')?>


    <?=view(OSN_VIEW_V2.'/components/scripts')?>
</body>

</html>