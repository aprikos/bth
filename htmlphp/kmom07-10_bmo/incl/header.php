<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <!-- links to external stylesheets -->
  <link rel="stylesheet" href="style/stylesheet.css">  
  <link rel="shortcut icon" href="img/tomb.ico">
 </head>
 <body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>

  <div id="wrapper"> <!-- div wrapper -->
<!-- Header -->
   <header id="banner">
    <img src="img/bmo-header.png" alt="BMO" width="625" height="79">
   </header>
<!-- Navigation menu -->
   <nav class="navmenu">
    <a id="index-" href="index.php">Startsidan</a> -
    <a id="articles-" href="articles.php">Artikelarkiv</a> -
    <a id="gallery-" href="gallery.php">Galleri</a> -
    <a id="about-" href="about.php">Om verksamheten</a> 
   </nav>
   <div id="content">