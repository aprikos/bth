<?php include("incl/config.php"); ?>
<?php
 $pageStyle = '
figure img {border: 1px solid #FFF;}
';
?>

<?php 
 $pageId = "style";
 $title = "Style";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"])) 
{
  $p = $_GET["p"];
}

// Is the page known?
$path = "incl/style";
$file = null;
switch($p) 
{
  case "choose-stylesheet":
    $pageTitle   = "Välj Stylesheet";
    $file        = "choose_stylesheet.php";
    break;
  
  case "choose-stylesheet-process":
    include("$path/choose_stylesheet_process.php");
    break;
  
  default:
    $pageTitle   = "Välj style för webbplatsen.";
    $file        = "default.php";
}

 include("incl/header.php"); 
?>

  <aside>
    <?php include("$path/aside.php"); ?>
  </aside>
<article id="testcontent">
  <?php include("$path/$file"); ?>
</article>

<br style="clear:both;"/>
<?php include("incl/footer.php"); ?>
