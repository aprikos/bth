<?php include("incl/config.php"); 

 $pageId = "gallery";
 $title = "Galleri";

include("incl/header.php");

$dbPath = "incl/articles/data/bmo.sqlite";

$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

$stmt = $db->prepare("SELECT * FROM 'object'");
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<a id="top"><h1>Galleri</h1></a>

<p>Här finns ett galleri med bilder på objekt från utställningen. Klicka på bilden för att se den i fullstorlek.</p>

<?php foreach($res as $ad): ?>

	<figure class="gallery">
		<h2><?php echo $ad['title']; ?></h2>
		<a href="<?php echo $ad['image']; ?>" target="_blank">
			<?php echo "<img src='" . $ad['image'] . "' alt='" . $ad['title'] . "'>"; ?>
		</a>
		<figcaption>
			<?php echo $ad['text']; ?>
		</figcaption>
	</figure>
	
<?php endforeach; ?>

<hr>
<p class="back"><a href="#top">Klicka här</a> för att komma tillbaka till toppen av sidan.</p>

<?php include("incl/footer.php"); ?>
