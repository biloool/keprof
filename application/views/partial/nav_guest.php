<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img src="<?php echo base_url() ?>assets/img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Shafiqa Nurrahman
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"href="<?php echo base_url() ?>">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('welcome/data_anak') ?>">Data Anak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('welcome/program') ?>">Program</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('welcome/tentang') ?>" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Struktur Organisasi</a>
                        <a class="dropdown-item" href="#">Visi dan Misi</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('welcome/login')?>">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Admin</button>
            </form>
        </div>
    </nav>
</body>
</html>