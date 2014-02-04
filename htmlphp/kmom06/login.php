<?php include("incl/config.php"); ?>

<?php 
 $pageId = "loginpage";
 $title = "Logga in";
 if($_GET['p']=="login"){
	$content = userLogin();
} else if($_GET['p']=="logout") {
	$content = userLogout(); 
}
 include("incl/header.php"); 
?>

<?php if(!isset($_GET['p'])) {
	if(userIsAuthenticated()) { 
		echo "<p>Du är inloggad.</p>";
	} else {
		echo "<p>Du är inte inloggad.</p>";
	}
} else if($_GET['p']=="login" || $_GET['p']=="logout") {
	echo $content;
}
?>

<?php include("incl/footer.php"); ?>