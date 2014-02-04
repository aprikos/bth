<?php 
include("incl/config.php");

$pageTitle = "Visa källkod";
$pageId = "source";

$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;
?>


<?php include("incl/header.php"); ?>

<div id="content">
<?php echo "$sourceBody"; ?>
<hr>
</div>

<?php include("incl/footer.php"); ?>