<?php include("incl/config.php"); 

 $pageId = "read";
 $title = "Artikelarkiv";

include("incl/header.php");

$dbPath = "incl/articles/data/bmo.sqlite";

$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

$stmt = $db->prepare("SELECT * FROM 'article' WHERE id=?");
$stmt->execute(array($_GET['id']));
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($res as $ad):

 echo "<h1>{$ad['title']}</h1>";
 echo "{$ad['content']}";

endforeach; 

?>

<hr>
<p class="back">
	<a href="articles.php">Klicka här</a> för att komma tillbaka till arkivet.
</p>

<?php include("incl/footer.php"); ?>
