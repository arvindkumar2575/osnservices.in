

<?=view(OSN_VIEW_V2.'/components/head')?>

<body>
    <!-- Spinner Start -->
    <?=view(OSN_VIEW_V2.'/components/spinner')?>
    <!-- Spinner End -->
    

    <?= $this->renderSection("content"); ?>


    <?=view(OSN_VIEW_V2.'/components/back-to-top')?>


    <?=view(OSN_VIEW_V2.'/components/scripts')?>
</body>

</html>