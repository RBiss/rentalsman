<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Rentalsman</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rentalsman">
    <link rel="shortcut icon" href="images/logo.png"> 
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="stylesheet" href="wp-content/themes/twentytwentyone/style.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Cormorant+Garamond&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>   
<?php
wp_head()
?>

<body>
  <!--<div class="page-container">-->
  <div class="header">
  <nav class="navbar navbar-expand-xl navbar-dark navbar-custom">
  <div class="container-lg">
         
             <a class="navbar-brand" href="/wp/"><img src="https://rbissonette.imgd.ca/wp/wp-content/uploads/2021/03/logo27755.png" width="250px"></a>
            <?php

wp_nav_menu(

  array(

    'theme_location' => 'primary',
    'menu_class'=> 'top-menu'

  )
);
 ?>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
</div>
             
 </nav> 
</div>
<div class="backdown">
 <div class="collapse navbar-collapse" id="navbarText">
 
                      <ul class="navbar-nav mr-auto goright">
                        
                      <li class="nav-item">  
                        <a class="nav-link" href="/wp">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/wp/new-listing">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/wp/listing/">Find Property</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/wp/wp-login.php?action=register">Sell Property</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/wp/about/">About</a>
                      </li>
                       </ul>
</div>
                    
        </div>
        <div class="top-content"></div>
     
  