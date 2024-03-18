<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=isset($description)&&!empty($description)?$description:""?>">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title><?=(isset($title)&&!empty($title))?$title.' | OSN Services':'OSN Services'?></title>

    <link rel="canonical" href="<?=current_url()?>">

    <!-- bootstrap minified css  -->
    <link href="<?= base_url(COMMON_ASSETS.'/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- common css  -->
    <link href="<?= base_url(COMMON_ASSETS.'/css/common.css') ?>" rel="stylesheet">
    <!-- template styles -->
    <link href="<?= base_url(OSN_ASSETS.'/css/osn.css') ?>" rel="stylesheet">
</head>

<body>