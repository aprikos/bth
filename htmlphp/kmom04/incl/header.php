<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <!-- links to external stylesheets -->
<?php if(isset($_SESSION['stylesheet'])): ?>
  <link rel="stylesheet" href="style/<?php echo $_SESSION['stylesheet']; ?>">  
<?php else: ?>
  <link rel="stylesheet" href="style/stylesheet.css" title="General stylesheet">
  <link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
<?php endif; ?>
  <link rel="shortcut icon" href="img/favicon.ico">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <?php if(isset($pageStyle)) : ?>
   <style type="text/css">
    <?php echo $pageStyle; ?>
   </style>
  <?php endif; ?>
 
 </head>
 <body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
<!-- Related content header -->
  <header id="top">
   <div id="login">
    <?php echo userLoginMenu(); ?>
   </div>
   <a href="http://www.student.bth.se/~malv13/htmlphp/kmom01/me.php">kmom01</a> 
   <a href="http://www.student.bth.se/~malv13/htmlphp/kmom02/me.php">kmom02</a>
   <a href="http://www.student.bth.se/~malv13/htmlphp/kmom03/me.php">kmom03</a>
   <a href="http://www.student.bth.se/~malv13/htmlphp/kmom04/me.php">kmom04</a>
  </header>
  <div id="wrapper"> <!-- div wrapper -->
<!-- Header -->
   <header>
    <img src="img/logo.png" alt="Tildas snygga logga" width=490 height=90>
   </header>
<!-- Navigation menu -->
   <nav class="navmenu">
    <a id="me-" href="me.php">Me</a>
	  <a id="test-" href="test.php">Tester</a>
    <a id="report-" href="report.php">Redovisning</a>
    <a id="style-" href="style.php">Style</a>
    <a id="source-" href="viewsource.php">K&auml;llkod</a>

   </nav>
