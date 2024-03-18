<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=isset($description)&&!empty($description)?$description:""?>">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title><?=(isset($title)&&!empty($title))?$title.' | OSN Services':'OSN Services'?></title>

    <!-- <link rel="canonical" href="<?=current_url()?>"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <!-- bootstrap minified css  -->
    <link href="<?= base_url(COMMON_ASSETS.'/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url(COMMON_ASSETS.'/css/common.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url(DASHBOARD_ASSETS.'/css/dashboard.css') ?>" rel="stylesheet">
</head>

<body>