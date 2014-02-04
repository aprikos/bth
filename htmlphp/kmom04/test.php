<?php include("incl/config.php"); ?>
<?php
 $pageStyle = '
figure img {border: 1px solid #FFF;}
}
';
?>

<?php 
 $pageId = "test";
 $title = "Tester";
 include("incl/header.php"); 
?>

<?php include("incl/test/aside.php")?>

<article id="testcontent">
<?php
 if(!isset($_GET['page'])) {
	include("incl/test/default.php");
} else {
 include("incl/test/".$_GET['page'].".php");
}
?>

</article>
<br style="clear:both;"/>
<?php include("incl/footer.php"); ?>
