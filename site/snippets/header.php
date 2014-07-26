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

    <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
    <link rel="stylesheet" href="assets/css/normalize.min.css">

    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="assets/css/app.css">

    <script src="assets/js/vendor/modernizr.js"></script>

  </head>

<body>

  <?php snippet('menu') ?>

  <!-- body content here -->

  <div class="row site-headings">
    <div class="small-11 small-centered columns">
      <h1 class="text-center title"><?php echo html($site->title_short()) ?></h1>
      <h2 class="text-center subtitle"><?php echo html($site->subtitle()) ?></h2>
    </div>
  </div>
