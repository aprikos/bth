<?php include("incl/config.php"); 

 $pageId = "articles";
 $title = "Artikelarkiv";

$dbPath = dirname(__FILE__) . "/incl/articles/data/bmo.sqlite";

$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

$stmt = $db->prepare("SELECT * FROM Article WHERE Category='article'");
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

include("incl/header.php")

?>

<h1>Artikelarkivet</h1>

<p>Här finns en lista på samtliga artiklar som finns tillgängliga:</p>

<table>

  <tr>
    <th>Artikelnam</th>
    <th>Författare</th>
  </tr>
  
  <?php foreach($res as $ad): ?>
  
  <tr>
    <td><a href="read.php?id=<?php echo $ad['id']?>"><?php echo $ad['title']; ?></a></td>
    <td><?php echo $ad['author']; ?></td>
  </tr>

<?php endforeach; ?>

</table>

<hr>
<p class="back">För att se ytterligare bilder på objekten som beskrivs i artiklarna <a href="gallery.php">klicka här</a>.</p>

<?php include("incl/footer.php"); ?>
