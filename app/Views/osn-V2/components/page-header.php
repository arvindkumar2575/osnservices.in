<div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(53, 53, 53, .7), rgba(53, 53, 53, .7)), url(<?= base_url("assets/images/intro-bg.jpg") ?>) center center no-repeat;">
    <div class="container py-1">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $title ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?= base_url("/") ?>">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)" style="cursor: default;">Service</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>
    </div>
</div>