<?php //require_once("./resources/config/conn.php"); 

define("BASE","http://localhost/php-template");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Sojeb Sikder">

  <link rel="icon" href="<?php echo BASE; ?>/public/assets/images/logo/icon.png" type="image/png" sizes="16x16">

  <!--bootstrap file link -->
  <link rel="stylesheet" href="<?php echo BASE; ?>/public/assets/css/bootstrap.min.css">
  <script src="<?php echo BASE; ?>/public/assets/js/jquery.min.js"></script>
  <script src="<?php echo BASE; ?>/public/assets/js/popper.min.js"></script>
  <script src="<?php echo BASE; ?>/public/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE; ?>/public/assets/js/init.js"></script>

<!--material file link -->
  <link rel="stylesheet" href="<?php echo BASE; ?>/public/assets/css/material/material.css">
  <script src="<?php echo BASE; ?>/public/assets/css/material/material.js"></script>


  <title>Title</title>
</head>
<body class="m-parralox">

<div class="jumbotron text-center">
  <h1 class="text-dark">Title</h1>
  <p class="text-dark">Slogan</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-info sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo BASE; ?>">Title</a>

  <!-- Links -->
  <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link" href="<?php echo BASE; ?>">Home</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
   
  </ul>
  

 
</nav>
