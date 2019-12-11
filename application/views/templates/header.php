<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Generator Umów</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link type="text/css" href="<?= site_url('/assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= site_url('/assets/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= site_url('/assets/css/theme.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= site_url('/assets/images/icons/css/font-awesome.css') ?>" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>

<div class="navbar navbar-fixed-top">
<div class="card card-register mx-auto mt-5">
            <?php if (!is_null($this->session->flashdata('info'))) {
                ?> <div class="alert alert-primary">
                    <?= $this->session->flashdata('info') ?>
                </div>
            <?php } ?>
            <?php if (!is_null($this->session->flashdata('error'))) {
                ?> <div class="alert alert-danger">
                    <?= $this->session->flashdata('error') ?>
                </div>
            <?php } ?>
            <?php if (strlen(validation_errors()) != 0) { ?>
                <div class="alert alert-danger">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?php 
            ?>
        </div>

<div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                        <?php if (!isset($this->session->user)) { ?>
                            <li><a href="<?= site_url('login/login') ?>">Login</a></li>
                            <li><a href="<?= site_url('login/sing_up') ?>">Sign Up</a></li>
                        <?php  } else {?>
                        <li><a href="<?= site_url('login/logout') ?>">Logout</a></li>
                        <?php } ?>
                    </ul>
                </div><!-- /.nav-collapse -->

   
                <?= !isset($this->session->user) ? '</div>' : ''; ?>