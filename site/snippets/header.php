<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

    <meta name="description" content="<?php echo html($site->description()) ?>" />
    <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
    <meta name="robots" content="index, follow" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo u(); ?>/assets/css/app.min.css">

    <script src="<?php echo u(); ?>/assets/js/dist/modernizr.min.js"></script>

  </head>

<!-- 
  There are two pages that have background images:
    1. each project page has a gallery slider
    2. each page has one if the background image switch is on
 -->
 
  <?php if ($page->template() == "project") { ?>
    <body class="background-image">
      <?php snippet('project-slider') ?>

      <!-- start project page body div -->
      <div class="project-page-body">
  <?php } else if ($site->background_image() == "on") { ?>
    <body class="background-image">
  <?php } else {; ?>
    <body class="page">
  <?php }; ?>

  
  <!-- body content here -->

  <div class="row site-headings text-center">
    
    <div class="small-8 small-centered columns heading-panel">
      
      <?php snippet('menu') ?>

      <div class="small-centered columns">
        <h1 class="hide text-center title"><?php echo html($site->title_short()) ?></h1>
        <h2 class="hide text-center subtitle"><?php echo html($site->subtitle()) ?></h2>

        <a href="<?php echo u(); ?>"><img class="text-center logo" src="<?php echo u(); ?>/assets/img/logo.png" /></a>
      </div>

    </div>

  </div>
