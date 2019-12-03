<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/fontawesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/all.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/js/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/isotope.css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/style.css">
	<script src="<?php echo base_url() ?>assets/bootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/all.js"></script>
  <style>
    /* Parallax */
    body, html 
    {
      height: 100%;
      margin: 0;
      font: 400 15px/1.8 "Lato", sans-serif;
      color: #777;
    }

    .bgimg-1, .bgimg-2, .bgimg-3 
    {
      position: relative;
      opacity: 0.65;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .bgimg-1 
    {
      background-image: url("<?php echo base_url() ?>assets/img/1.jpg");
      min-height: 100%;
    }
    
    .bgimg-2 
    {
      background-image: url("<?php echo base_url() ?>assets/img/2.jpg");
      min-height: 400px;
    }

    .bgimg-3 
    {
      background-image: url("<?php echo base_url() ?>assets/img/3.jpg");
      min-height: 400px;
    }

    .caption 
    {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      text-align: center;
      color: #000;
    }

    .caption span.border 
    {
      background-color: #111;
      color: #fff;
      padding: 18px;
      font-size: 25px;
      letter-spacing: 10px;
    }

    h3 
    {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) 
    {
      .bgimg-1, .bgimg-2, .bgimg-3 
      {
        background-attachment: scroll;
      }
    }
    /* Footer */
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img src="<?php echo base_url() ?>assets/img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Shafiqa Nurrahman
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"href="<?php echo base_url() ?>">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('welcome/program') ?>">Program</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('welcome/profil') ?>">Profil</a>
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
